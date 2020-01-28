<?php
require_once __DIR__ . '/../inc/bootstrap.php';
requireAuth();

$currentPassword = request()->get('current_password');
$password = request()->get('password');
$confirmPassword = request()->get('confirm_password');

if($password != $confirmPassword) {
    $session->getFlashBag()->add('error', 'Passwords do NOT match');
    redirect('../account.php');
}

$currentUser = getAuthenticatedUser();

if(empty($currentUser)) {
    $session->getFlashBag()->add('error', 'Something went wrong');
    redirect('../account.php');
}

if(!password_verify($currentPassword, $currentUser['password'])) {
    $session->getFlashBag()->add('error', 'Current Password was incorrect');
    redirect('../account.php');
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$user = new App\Model\User;
if(!$user->updatePassword($hashedPassword, $currentUser['id'])) {
    $session->getFlashBag()->add('error', 'Cannot update password');
    redirect('../account.php');
}

$session->getFlashBag()->add('success', 'Password update');
redirect('../');
