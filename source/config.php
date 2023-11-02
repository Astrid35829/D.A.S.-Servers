<?php
    include 'db_conn.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

    if (!$connection){
        die("Database connection failed: " . mysqli_connect_error());
    } else {
        echo "Database connection successful!";
    }

    $query      = 'SELECT * FROM sdgs ORDER BY title';
    $result     = $connection->query($query);
    $item       = $result->fetch_assoc();
?>