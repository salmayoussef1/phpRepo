<?php
include "config/db.php";

$userName = $_POST['username'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users WHERE username = ?";

$stat = $conn->prepare($sql);
$stat->bind_param("s", $userName);
$stat->execute();

$result = $stat->get_result();
$user = $result->fetch_assoc();

if ($user && $pass == $user['password']) {
    echo "Hello " . $user['username'];
} else {
    header("Location: login.php?error=user_not_found");
    exit;
}
?>
