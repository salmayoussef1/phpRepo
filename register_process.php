<?php
include "config/db.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name     = trim($_POST['name']);
    $username = trim($_POST['username']);
    $pass     = trim($_POST['pass']);
    $cpass    = trim($_POST['cpass']);


    if (empty($name) || empty($username) || empty($pass) || empty($cpass)) {
        echo "Please fill in all fields.";
        exit;
    }

    if ($pass !== $cpass) {
        echo "Passwords do not match.";
        exit;
    }

    $ifstmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $ifstmt->bind_param("s", $username);
    $ifstmt->execute();
    $ifresult = $ifstmt->get_result();

    if ($ifresult->num_rows > 0) {
        echo "Username already exists.";
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO users (name, username, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $username, $pass);
    $stmt->execute();

    echo "Registration successful!";
}
?>
