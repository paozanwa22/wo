<?php
// session start
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: signin/index.php");
  exit;
}

// if (isset($_POST["save"])) {
//   header("Location: ../");
// }

if (!isset($_GET["nama"])) {
  $_GET["nama"] = "Choose package...";
  $_GET["harga"] = "0";

  $nama = $_GET["nama"];
  $harga = $_GET["harga"];
} else {
  $nama = $_GET["nama"];
  $harga = $_GET["harga"];
}

require '../controller/functions.php';

if (isset($_POST["save"])) {
  // pesanan($_POST);
  if (pesanan($_POST) > 0) {
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

  <title>Checkout</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/checkout.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container">
    <div class="py-5 text-center">
      <h2>Checkout form</h2>
      <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    </div>

    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your Pay</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">

          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0" name="namaPackage" id="namaPackage"><?= $nama; ?></h6>
              <small class="text-muted">Package WO</small>
            </div>
            <!-- <span class="text-muted">$5</span> -->
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total</span>
            <strong id="total">Rp <?= $harga; ?></strong>
          </li>
        </ul>

        <!--  -->
      </div>
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Billing address</h4>
        <form action="" method="POST" class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">First name</label>
              <input name="firstName" type="text" class="form-control" id="firstName" autocomplete="off" placeholder="" value="" required>
              <div class="invalid-feedback">
                Masukkan nama depan anda.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Last name</label>
              <input name="lastName" type="text" class="form-control" id="lastName" autocomplete="off" placeholder="" value="" required>
              <div class="invalid-feedback">
                Masukkan nama belakang anda.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email <span class="text-muted">(Optional)</span></label>
            <input name="email" autocomplete="off" type="email" class="form-control" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Address</label>
            <input name="address" autocomplete="off" type="text" class="form-control" id="address" placeholder="1234 Main St" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <div class="mb-3">
            <label for="tanggal">Tanggal</label>
            <input name="tanggal" type="text" class="form-control" id="tanggal" placeholder="Tanggal Acara..." required>
            <div class="invalid-feedback">
              Tolong masukkan tanggal acara.
            </div>
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="package">Paket WO</label>
              <select class="custom-select d-block w-100" id="package" name="package" required>
                <option name="paketWO" value=""><?= $nama; ?></option>
                <option data-price="45.000.000.00">Mawar Package</option>
                <option data-price="55.000.000.00">Melati Package</option>
                <option data-price="65.000.000.00">Anggrek Package</option>
                <option data-price="52.500.000.00">Silver Package</option>
                <option data-price="67.500.000.00">Golden Package</option>
                <option data-price="72.500.000.00">Platinum Package</option>
                <option data-price="85.500.000.00">Liontin Package</option>
                <option data-price="99.000.000.00">Diamond Package</option>
                <option data-price="18.000.000.00">Promo Wedding House</option>
                <option data-price="17.000.000.00">Promo Wedding House</option>
              </select>
              <div class="invalid-feedback">
                Silahkan Pilih Paket WO anda.
              </div>
            </div>
          </div>
          <!-- <hr class="mb-4">
          <h4 class="mb-3">Payment</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label" for="credit">Credit card</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="debit">Debit card</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="paypal">PayPal</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Name on card</label>
              <input name="cc-name" type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Credit card number</label>
              <input name="cc-number" type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cc-cvv">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div> -->
          <hr class="mb-4">
          <p>
            <button class="btn btn-primary btn-lg" type="submit" name="save" onclick="return alert('Kode Pembayaran telah terkirim ke E-mail Anda');">Continue to checkout</button>
            <a href="../" class="btn btn-secondary btn-lg">Cancle</a>
          </p>
        </form>
      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2017-2018 Company Name</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
  </div>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/holder.min.js"></script>
  <script src="../js/jquery.js"></script>
  <script src="../js/script.js"></script>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';

      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
</body>

</html>