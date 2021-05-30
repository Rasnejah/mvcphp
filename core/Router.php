<?php

namespace core;

class Router
{
    private $controller = 'Site';
    private $method = "home";
    private $param = [];
    public function __construct()
    {
      
    }

    private function url()
    {
        $parse_url = explode("/",filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL));
        return $parse_url;
    }
}