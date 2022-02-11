<?php

/**
 * Read the README.md before
 * This is the main controller to decide which MVC should to run
 * based on requested URL.
 *
 * @author Igram Picasa <https://github.com/igpcl>
 */

// let's load our classes
spl_autoload_register(function ($class) : void {
    include str_replace('\\', '/', $class) . '.php';
});


// This is your path
// Leave it empty if you put the files directly
// into your web dir
$prefix = 'My-Simple-MVC-PHP-main';

// The routes
// Don't make it hard, we need to a route to run 
// our MVC but it's not neccesary to undestand 
// how the route works in first place
// just try to understand how MVC works
$routes = [
    '\/(.+)?' => [new Controller\ArticleController, 'indexAction'],
    // '\/opps' => [new Controller\OppsController, 'indexAction'], // you can add more like this
];

// Lets have our routes with requested path
// Keep in mind this is just a simple route
// You can programm or use a better one
// but MVC will be the same
$matches=0;
foreach ($routes as $url => $action) {
    // find a matching request with our routes
    $matches = preg_match("/\/{$prefix}{$url}/", $_SERVER['REQUEST_URI'], $params);

    // any match?
    if ($matches > 0) {
        // just the action with your parametters
        $controller = new $action[0];
        $controller->{$action[1]}($params);
        break;
    }
}

if (!$matches) {
    // return 404 if there be no match
    http_response_code(404);
    die('Error 404');
}