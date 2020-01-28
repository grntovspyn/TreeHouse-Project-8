<?php
require_once __DIR__ . '/../inc/bootstrap.php';

$user = new App\Model\User;
$checkUser = $user->checkUsername(request()->get('username'));

if(empty($checkUser)) {
    $session->getFlashBag()->add('error', 'Username not found');
    redirect('../login.php');
}

if(!password_verify(request()->get('password'), $checkUser['password'])) {
    $session->getFlashBag()->add('error','Invalid Password');
    redirect('../login.php');
}

saveUserSession($checkUser);
redirect('../');