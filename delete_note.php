<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id']) || !isset($_GET['id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$note_id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM notes WHERE id=? AND user_id=?");
$stmt->bind_param("ii", $note_id, $user_id);
$stmt->execute();

header("Location: index.php");