<?php
require_once __DIR__ . '/../inc/bootstrap.php';
requireAdmin();

$user = new App\Model\User;
if($user->deleteUser(request()->get('userId'))) {
    $session->getFlashBag()->add('success', "User delete!");
} else {
    $session->getFlashBag()->add('success', "Unable to delete user");
}

redirect('../admin.php');