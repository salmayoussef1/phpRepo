<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success text-center mt-4'>Record deleted</div>";
    } else {
        echo "<div class='alert alert-danger text-center mt-4'>Deleting record: " . $conn->error . "</div>";
    }
}

$conn->close();
?>
