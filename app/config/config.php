
<?php
    // Database Params
    // Global named constant for DB
    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'MVC');

    // App Root
    // Go back 2 directories to get /app directory
    $appDirectory = dirname(dirname(__FILE__));
    define('APPROOT', $appDirectory);

    // URL Root
    $urlRoot = "http://localhost/MVC";
    define("URLROOT",  $urlRoot);

    // Site Name
    $siteName = "MVC";
    define("SITENAME", $siteName);

    // You might face redireciton error, make sure to edit .htaccess to the correct path.
