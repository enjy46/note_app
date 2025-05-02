<?php
$host = 'localhost';
$db   = 'note_app';
$user = 'root';
$pass = ''; // Set your MySQL password if needed

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>