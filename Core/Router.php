<?php

class Router {
    protected $routes = [];

    public function add ( $method, $uri, $controller )
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function get ( $uri, $controller )
    {
        return $this->add( "GET", $uri, $controller );
    }

    public function post ( $uri, $controller )
    {
        return $this->add( "POST", $uri, $controller );
    }

    public function delete ( $uri, $controller )
    {
        return $this->add( "DELETE", $uri, $controller );
    }

    public function route( $uri, $method )
    {
        foreach ($this->routes as $route){
            if($route['uri'] == $uri && $route['method'] == strtoupper($method))
            {
                return require "Controller/" . $route['controller'];
            }
        }

        header("location: /{$GLOBALS['file']}/index.php/login");
    }

}