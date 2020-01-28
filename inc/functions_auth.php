<?php
use Firebase\JWT\JWT;

function isAuthenticated()
{
    return decodeAuthCookie();
}

function saveUserData($user)
{
    global $session;
    $session->getFlashBag()->add('success','Successfully logged in');
    $expTime = time() + 3600;
    $key = getenv('SECRET_KEY');
    $payload = [
        'iss' => request()->getBaseUrl(),
        'sub' => (int) $user['id'],
        'exp' => $expTime,
        'iat' => time(),
        'nbf' => time(),
        'auth_roles' => (int) $user['role_id']
    ];
    $jwt = JWT::encode($payload, $key);

    
    $cookie = setAuthCookie($jwt, $expTime);
    redirect('../',['cookies'=>[$cookie]]);
}

function setAuthCookie($data, $expTime)
{
    $cookie = new \Symfony\Component\HttpFoundation\Cookie(
        'auth',
        $data,
        $expTime,
        '/',
        'localhost',
        false,
        true
    );
    return $cookie;
}

function decodeAuthCookie($prop = null)
{   
    JWT::$leeway = 1; // $leeway in seconds
    $key = getenv('SECRET_KEY');
    try {
        $cookie = JWT::decode(request()->cookies->get('auth'), $key, ['HS256']);
    } catch (Exception $e) {
        return false;
    }
    if (null === $prop) {
        return $cookie;
    }
    if($prop == 'auth_user_id') {
        $prop = 'sub';
    }
    if(!isset($cookie->$prop)){
        return false;
    }
    return $cookie->$prop;
}

function requireAuth()
{
    if (!isAuthenticated()) {
        global $session;
        $session->getFlashBag()->add('error', 'Not authorized, please log in');
        redirect('./login.php');
    }
}

function isAdmin()
{
    if(!isAuthenticated()) {
        return false;
    }
    return decodeAuthCookie('auth_roles') === 2;
}

function requireAdmin()
{
    if(!isAdmin()) {
        global $session;
        $session->getFlashBag()->add('error', 'Not Authorized');
        redirect('../');
    }
}

function isOwner($ownerId)
{
    if(!isAuthenticated()){
        return false;
    }
    return $ownerId == decodeAuthCookie('sub');
}

function getAuthenticatedUser()
{
    $user = new App\Model\User;
    return $user->findUserById(decodeAuthCookie('sub'));
}