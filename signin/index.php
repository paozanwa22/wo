<?php

// set session
session_start();

if (isset($_SESSION["login"])) {
  header("Location: ../index.php");
  exit;
}

require '../controller/functions.php';

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
  // $result = mysqli_query($conn, "SELECT ket FROM user WHERE username = '$username'");

  // cek username
  if (mysqli_num_rows($result) === 1) {
    // cek password
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row["password"])) {
      // set session
      $_SESSION["login"] = true;
      //cek user atau admin
      if ($row['ket'] == 1) {
        $_SESSION["admin"] = true;
      }
      header("Location: ../index.php");
      exit;
    }
  }
  echo "
      <script>
          alert('Username atau Password salah!');
      </script>
    ";
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Weading Organizer</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <form class="form-signin" action="" method="POST">
    <h1 class="h3 mb-3 font-weight-normal mb-5">Please sign in</h1>

    <label for="username" class="sr-only">Username</label>
    <input type="text" id="username" class="form-control" name="username" autocomplete="off" placeholder="Email address" required autofocus>

    <label for="password" class="sr-only">Password</label>
    <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>

    <a href="register.php" class="btn btn-primary my-2">New accound</a>
    <button class="btn btn-secondary my-2" type="submit" name="login">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
  </form>
</body>

</html>