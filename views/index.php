<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
 <!-- fontawesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Login</title>
</head>
<body class="bg-light">
  <div style="height: 100vh;">
      <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto">

                <div class="card-header bg-white border-0 py-3">
                  <h1 class="text-center">LOGIN</h1>
                </div>

                <div class="card-body">
                      <form action="../actions/login.php" method="post">
                        <input type="text" name="username" placeholder="USERNAME" class="form-control mb-2" required>
                        <input type="password" name="password" placeholder="PASSWORD" class="form-control mb-5" required>
                        <button type="submit" class="btn btn-primary w-100">Log in</button>
                      </form>

                      <p class="text-center mt-3 small"><a href="register.php">Create Account</a></p>
                </div>

            </div>
      </div>
  </div>
  <!-- script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>