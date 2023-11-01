<?php

    include 'db_conn.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    define('PROJECT_ROOT', '/var/www/html/');
    define('SOURCE_PATH', PROJECT_ROOT. 'source/');
    define('VIEWS_PATH', PROJECT_ROOT . 'view/');

    define('SITE_URL', 'http://localhost:8080/');
    define('IMAGE_URL', SITE_URL. 'img/');

    // database connection settings
    define('MYSQL_HOST', 'mariadb');
    define('MYSQL_DATABASE', 'sdgTestdb');
    define('MYSQL_USER', 'root');
    define('MYSQL_PASSWORD', 'mijn_p@ss#');

    $connection = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);

    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    } else {
        echo "Database connection successful!";
    }

?>