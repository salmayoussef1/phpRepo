<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Create User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Create User</h2>
  
  <form action="insert.php" method="POST">
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Name</label>
      <input type="text" class="form-control" id="exampleInputName" name="name">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail" name="email">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>
