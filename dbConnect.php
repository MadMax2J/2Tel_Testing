<?php
/**
 * Created by PhpStorm.
 * User: jbyrne
 * Date: 04/01/2017
 * Time: 17:23
 */
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";