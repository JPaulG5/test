<?php
$xammp = "/{$file}/index.php";


$router->get($xammp.'/', 'home/index.php');
$router->post($xammp.'/', 'home/create.php');
$router->delete($xammp.'/', 'home/delete.php');

$router->get($xammp.'/edit', 'edit/index.php');
$router->post($xammp.'/edit', 'edit/update.php');


$router->get($xammp.'/history', 'history/index.php');


$router->get($xammp.'/login', 'session/index.php');
$router->post($xammp.'/login', 'session/store.php');
$router->get($xammp.'/logout', 'session/destroy.php');


$router->get($xammp.'/registration', 'registration/index.php');
$router->post($xammp.'/registration', 'registration/store.php');

