<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM users WHERE id = $id");
    $user = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Edit User</h2>
  <form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" class="form-control" name="name" value="<?= $user['name'] ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
  </form>
</div>
</body>
</html>