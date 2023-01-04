<?php
session_start();
// Include configuration
include '../config/db.php';
$conn = connect();

// Get value from POST form
$title = $_POST['title'];
$category = $_POST['category'];
$content = $_POST['content'];
$author = $_SESSION['name'];

$sql = "INSERT INTO articles (title, category, content, author) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $title, $category, $content, $author);
$stmt->execute();

header('Location: ../home.php')


?>