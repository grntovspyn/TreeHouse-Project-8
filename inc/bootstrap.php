<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/functions_auth.php';


/*
 * Set access to components from \Symfony\Component\HttpFoundation\
 * 1. Session
 * 2. Request
 * 3. Redirect
 */

// 1. session \Symfony\Component\HttpFoundation\Session
$session = new \Symfony\Component\HttpFoundation\Session\Session();
$session->start();

// 2. request \Symfony\Component\HttpFoundation\Request
function request() {
    return \Symfony\Component\HttpFoundation\Request::createFromGlobals();
}

// 3. redirect \Symfony\Component\HttpFoundation\Response
function redirect($path, $extra = []) {
    $response = \Symfony\Component\HttpFoundation\Response::create(null, \Symfony\Component\HttpFoundation\Response::HTTP_FOUND, ['Location' => $path]);
    if (key_exists('cookies', $extra)) {
       foreach($extra['cookies'] as $cookie) {
           $response->headers->setCookie($cookie);
       }
    }
    $response->send();
    exit;
}