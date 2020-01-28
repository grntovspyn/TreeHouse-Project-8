<?php
require_once __DIR__ . '/../inc/bootstrap.php';
requireAdmin();

$user = new App\Model\User;
$changedUser = $user->changeRole(request()->get('userId'), request()->get('roleId'));

if ($changedUser['role_id'] == 2) {
    $session->getFlashBag()->add('success', $changedUser['username'] . " promoted to admin!");
} else {
    $session->getFlashBag()->add('success', $changedUser['username'] . " demoted to user");
}

redirect('../admin.php');