<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Users List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Users</h2>
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT id, name, email, password FROM users";
      $result = $conn->query($sql);

      if ($result->num_rows > 0):
        while($row = $result->fetch_assoc()):
      ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['password'] ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
      </tr>
      <?php endwhile; else: ?>
      <tr><td colspan="5">No users found.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>
</body>
</html>
<?php $conn->close(); ?>