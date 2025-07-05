<?php
include 'connect.php';

$sql = "SELECT id, name, email, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h3>Users:</h3>";
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] .
             " | Name: " . $row["name"] .
             " | Email: " . $row["email"] .
             " | Password (hashed): " . $row["password"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
