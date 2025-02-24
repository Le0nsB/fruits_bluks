<?php
    $routes = require("routes.php");

    $uri = parse_url($_SERVER["REQUEST_URI"])["path"];

    $config = require("config.php");
    
    $db = new Database($config["database"]);


    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    } else{
        http_response_code(404);
        require "404.php";
        die();
    }
?>