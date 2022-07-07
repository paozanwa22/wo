<?php
// session start
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: signin/index.php");
    exit;
}

// query data pesanan
require '../controller/functions.php';

$pesanans = query("SELECT * FROM pesanan WHERE kete = 0");

// ambil id tombol yang di tekan
if (isset($_GET['confirm'])) {
    $id = $_GET['id'];

    // rubah kete 0 menjadi 1
    $query = "UPDATE pesanan SET kete = 1 WHERE id_pesanan = $id";
    mysqli_query($conn, $query);
    header("Location: pesanan.php");
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
            <h2>Daftar Pesanan</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>

        <!--  -->
        <?php foreach ($pesanans as $pesanan) : ?>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $pesanan['package']; ?>
                    <!-- jika tombol confirm di tekan, set kete = 1 -->
                    <form action="" method="GET">
                        <input type="hidden" name="id" value="<?= $pesanan['id_pesanan']; ?>">
                        <span class="badge badge-primary badge-pill"><button type="submit" name="confirm" class="btn btn-primary">Confirm</button></span>
                    </form>
                </li>
            </ul>
        <?php endforeach; ?>
        <!--  -->

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