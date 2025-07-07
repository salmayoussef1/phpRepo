<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success text-center mt-4'>User updated successfully</div>";
    } else {
        echo "<div class='alert alert-danger text-center mt-4'>Error updating user: " . $conn->error . "</div>";
    }
}