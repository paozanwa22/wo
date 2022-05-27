<?php 
// session start
session_start();

if( !isset($_SESSION["login"]) ){
  header("Location: signin/index.php");
  exit;
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

    <title>Pricing example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/pricing.css" rel="stylesheet">
  </head>

  <body>

    <!-- <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
      </nav>
      <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div> -->

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Detail Package Hemat</h1>
      <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Promo Wedding House</h4>
          </div>
          <div class="card-body">
          <h2 class="card-title pricing-card-title">Rp 18.000.000</small></h2>
            <ul class="list-unstyled mt-3 mb-4">
              <p>
                <li>20 users included</li>
                <li>10 GB of storage</li>
                <li>Priority email support</li>
                <li>Help center access</li>
              </p>
              <p>
                <h5>FREE</h5>
                <li>20 users included</li>
                <li>10 GB of storage</li>
                <li>Priority email support</li>
                <li>Help center access</li>
              </p>
            </ul>
            <a href="../checkout/index.php?nama=Promo Wedding House&harga=18.000.000.00" type="submit" class="btn btn-lg btn-block btn-primary" name="#">Order</a>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Promo Wedding House</h4>
          </div>
          <div class="card-body">
          <h2 class="card-title pricing-card-title">Rp 17.000.000</small></h2>
            <ul class="list-unstyled mt-3 mb-4">
              <p>
                <li>20 users included</li>
                <li>10 GB of storage</li>
                <li>Priority email support</li>
                <li>Help center access</li>
              </p>
              <p>
                <h5>FREE</h5>
                <li>20 users included</li>
                <li>10 GB of storage</li>
                <li>Priority email support</li>
                <li>Help center access</li>
              </p>
            </ul>
            <a href="../checkout/index.php?nama=Promo Wedding House&harga=17.000.000.00" type="submit" class="btn btn-lg btn-block btn-primary" name="#">Order</a>
          </div>
        </div>

      </div>
      

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <!-- <img class="mb-2" src="../../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24"> -->
            <small class="d-block mb-3 text-muted">&copy; 20121-2022</small>
          </div>
          <div class="col-6 col-md">
            <h5>Kategori</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="wHouse.php">Wedding House</a></li>
              <li><a class="text-muted" href="pWedding.php">Paket Wedding</a></li>
              <li><a class="text-muted" href="#">Paket Hemat</a></li>
              <li><a class="text-muted" href="../package">All Paket</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <a href="../package" class="text-muted"><h5>Order</h5></a>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="wHouse.php">Mawar Package</a></li>
              <li><a class="text-muted" href="wHouse.php">Melati Package</a></li>
              <li><a class="text-muted" href="wHouse.php">Anggrek Package</a></li>
              <li><a class="text-muted" href="pWedding.php">Silver Package</a></li>
              <li><a class="text-muted" href="pWedding.php">Golden Package</a></li>
              <li><a class="text-muted" href="pWedding.php">Platinum Package</a></li>
              <li><a class="text-muted" href="pWedding.php">Liontin Package</a></li>
              <li><a class="text-muted" href="pWedding.php">Diamond Package</a></li>
              <li><a class="text-muted" href="#">Promo Wedding House</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Sarat & Ketentuan</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
