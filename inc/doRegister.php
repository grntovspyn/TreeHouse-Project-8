<?php
require_once __DIR__ . '/../inc/bootstrap.php';

$username = request()->get('username');
$password = request()->get('password');
$confirmPassword = request()->get('confirm_password');

if($password != $confirmPassword) {
    $session->getFlashBag()->add('error', 'Passwords do NOT match');
    redirect('../register.php');
}

$user = new App\Model\User;

$checkName = $user->checkUsername($username);

if(!empty($checkName)) {
    $session->getFlashBag()->add('error', 'Username taken, please choose another username');
    redirect('../register.php');
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$newUser = $user->createUser($username, $hashedPassword);
$session->getFlashBag()->add('success', 'New account created');
saveUserData($newUser);