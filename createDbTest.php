<?php
/**
 * Created by PhpStorm.
 * User: jbyrne
 * Date: 04/01/2017
 * Time: 17:07
 */
include 'dbConnect.php';
// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();