<?php
include "config/db.php";

if (isset($_GET['USER'])) {
    $search = trim($_GET['USER']);

    $sql = "SELECT username FROM users WHERE username LIKE ?";
    $stmt = $conn->prepare($sql);
    $param = "%" . $search . "%";
    $stmt->bind_param("s", $param);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h2>Search Results:</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "<p>" . htmlspecialchars($row['username']) . "</p>";
        }
    } else {
        echo "No users found.";
    }
}
?>
