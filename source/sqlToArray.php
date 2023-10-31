<?php

include 'db_conn.php';
$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
$query      = 'SELECT * FROM sdg ORDER BY title';
$result     = $conn->query($query);
$item       = $result->fetch_assoc();