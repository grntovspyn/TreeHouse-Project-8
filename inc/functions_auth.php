<?php

function isAuthenticated()
{
    global $session;

    return $session->get('auth_logged_in', false);
}

function saveUserSession($user)
{
    global $session;
    $session->set('auth_logged_in', true);
    $session->set('auth_user_id', (int) $user['id']);
    $session->set('auth_roles', (int) $user['role_id']);

    $session->getFlashBag()->add('success','Successfully logged in');

}

function requireAuth()
{
    if (!isAuthenticated()) {
        global $session;
        $session->getFlashBag()->add('error', 'Not authorized, please log in');
        redirect('./login.php');
    }
}