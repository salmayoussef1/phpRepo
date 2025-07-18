<?php
session_start();
include "config/db.php";

if (!isset($_POST['username']) || !isset($_POST['pass'])) {
    header("Location: login.php?error=missing_fields");
    exit;
}

$userName = $_POST['username'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users WHERE username = ?";
$stat = $conn->prepare($sql);
$stat->bind_param("s", $userName);
$stat->execute();

$result = $stat->get_result();
$user = $result->fetch_assoc();

if ($user && $pass == $user['password']) {
    $_SESSION["user"] = [
        'id' => $user['id'],
        'username' => $user['username']
    ];
    header("Location: index.php");
    exit;
} else {
    header("Location: login.php?error=User Not Found");
    exit;
}
?>
