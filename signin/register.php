
<?php 

  require '../controller/functions.php';

  if( isset($_POST["register"]) ){
      if ( register($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        // echo mysqli_error($conn);
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }
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
      <!-- <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
      <h1 class="h3 mb-3 font-weight-normal mb-5">Please sign in</h1>

      <label for="username" class="sr-only">Username</label>
      <input type="text" id="username" class="form-control" name="username" placeholder="Username..." required autofocus>
      
      <label for="password" class="sr-only">Password</label>
      <input type="password" id="password" class="form-control" name="password" placeholder="Password..." required>
      
      <label for="password2" class="sr-only">Password</label>
      <input type="password" id="password2" class="form-control" name="password2" placeholder="kompirmasi password..." required>
      
      <div class="checkbox mb-3">
        <label>
          <!-- <input type="checkbox" value="remember-me"> Remember me -->
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Register</button>
      <a href="../" class="btn btn-lg btn-secondary btn-block my-2">Back</a>

      <!-- <button class="btn btn-lg btn-primary btn-block" type="submit" name="new">New accound</button>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button> -->

      <!-- <a href="detail/index.php" class="btn btn-primary my-2">Detail</a>
          <a href="#" class="btn btn-secondary my-2">Pesan</a> -->

      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
