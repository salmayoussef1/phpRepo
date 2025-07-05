<?php
include 'connect.php';

$emailToDelete = "salma@example.com";

$sql = "DELETE FROM users WHERE email='$emailToDelete'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted ";
} else {
    echo "deleting record: " . $conn->error;
}

$conn->close();
?>
