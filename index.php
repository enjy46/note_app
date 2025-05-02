<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT id, content, created_at FROM notes WHERE user_id=? ORDER BY created_at DESC");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$notes = $stmt->get_result();
?>

<a href="logout.php">Logout</a>
<h2>Your Notes</h2>

<form action="add_note.php" method="POST">
    <textarea name="content" placeholder="Write your note here..." required></textarea>
    <button type="submit">Add Note</button>
</form>

<ul>
<?php while ($row = $notes->fetch_assoc()): ?>
    <li>
        <p><?= htmlspecialchars($row['content']) ?></p>
        <small><?= $row['created_at'] ?></small>
        <a href="delete_note.php?id=<?= $row['id'] ?>">Delete</a>
    </li>
<?php endwhile; ?>
</ul>