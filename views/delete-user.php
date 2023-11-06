<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleter User</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
      <a href="dashboard.php" class="navbar-brand">
        <h1 class="h3">The Company</h1>
      </a>
      <div class="navbar-nav">
          <span class="navbar-text"><?= $_SESSION['full_name'] ?></span>

          <form action="../actions/logout.php" method="post" class="d-flex ms-2">
            <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
          </form>

      </div>
    </div>
  </nav>

  <main class="row justify-content-center gx-0 mt-5">
    <div class="col-4 text-center">
      <i class="fa-solid fa-triangle-exclamation text-warning d-block mb-2 display-4"></i>
      <h2 class="mb-5 text-danger">DELETE ACCOUNT</h2>
      <p class="fw-bold">Are you sure you want to delete your account?</p>

      <div class="row">
        <div class="col">
          <a href="dashboard.php" class="btn btn-secondary w-100">CANCEL</a>
        </div>
        <div class="col">
          <form action="../actions/delete-user.php" method="post">
            <button type="submit" class="btn btn-outline-danger w-100">DELETE</button>
          </form>
        </div>

      </div>
    </div>
  </main>

    




    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

