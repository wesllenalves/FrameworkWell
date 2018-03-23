<?php

require_once __DIR__. "/../vendor/autoload.php";

$base  = dirname($_SERVER['PHP_SELF']);

// Update request when we have a subdirectory    
if(ltrim($base, '/')){ 

    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}


$Router = new FrameworkWell\Routing\Router();

require_once __DIR__. "/../app/routes/routes.php";

$Router->dispatch();
