<?php
function isAuthenticated()
{
    return decodeAuthCookie();
}

function saveUserData($user)
{
    global $session;
    $session->getFlashBag()->add('success','Successfully logged in');
    $expTime = time() + 3600;
    $data = [
        'auth_user_id' => (int) $user['id'],
        'auth_roles' => (int) $user['role_id']
    ];
    
    $cookie = setAuthCookie($data, $expTime);
    redirect('../',['cookies'=>[$cookie]]);
}

function setAuthCookie($data, $expTime)
{
    $cookie = new \Symfony\Component\HttpFoundation\Cookie(
        'auth',
        json_encode($data),
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
    $cookie = json_decode(request()->cookies->get('auth'));
    if (null === $prop) {
        return $cookie;
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
    return $ownerId == decodeAuthCookie('auth_user_id');
}

function getAuthenticatedUser()
{
    $user = new App\Model\User;
    return $user->findUserById(decodeAuthCookie('auth_user_id'));
}