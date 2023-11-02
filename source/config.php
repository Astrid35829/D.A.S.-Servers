<?php
    include 'db_conn.php';
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
    $sdg = 'SELECT * FROM sdgs ORDER BY title';
    $stmt = $connection->prepare($sdg);
    $stmt->execute();
    $result = $stmt->get_result();
    $sdgItem = mysqli_fetch_assoc($result);
?>