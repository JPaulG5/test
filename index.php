<?php

session_start();

$uri =  parse_url( $_SERVER['REQUEST_URI'] )['path'];
$file = explode( "/", $uri )[1];

require 'Core/Router.php';
require 'Core/Validator.php';
require 'Core/function.php';
require 'Core/Database.php';

$router = new Router();

require 'routes.php';
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route( $uri, $method );