<?php
require_once __DIR__ . '/../inc/bootstrap.php';

$session->getFlashBag()->add('success','Successfully logged out');
$cookie = setAuthCookie('expired', 1);
redirect('../', ['cookies' => [$cookie]]);