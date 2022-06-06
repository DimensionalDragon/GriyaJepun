<?php
    session_start();
    $username = $_SESSION["nama"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/admin.css">

</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="images/logo.png"> Griya Jepun</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Dashboard</p>

                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Insert</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="InsertKamar.php" target="iframe_a">Insert Kamar</a>
                        </li>
                        <li>
                            <a href="InsertKaryawan.php" target="iframe_a">Insert Karyawan</a>
                        </li>
                        <li>
                            <a href="InsertFasilitas.php" target="iframe_a">Insert Fasilitas</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="pelanggan.php" target="iframe_a">Data Pelanggan</a>    
                </li>
                <li>
                    <a href="kamarkos.php" target="iframe_a">Data Kamar</a>
                </li>
                <li>
                    <a href="Karyawan.php" target="iframe_a">Data Karyawan</a>
                </li>
                <li>
                    <a href="fasilitas.php" target="iframe_a">Data Tipe Kamar</a>
                </li>
                <li>
                    <a href="dataReservasi.php" target="iframe_a">Data Reservasi</a>
                </li>
                <li>
                    <a href="dataPembatalan.php" target="iframe_a">Data Pembatalan</a>
                </li>
                <li>
                    <a href="dataPembayaran.php" target="iframe_a">Data Pembayaran</a>
                </li>
            </ul>
        </nav>

        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <p class="nav-link">Admin <?php echo $username; ?><p>
                            </li>
                            <li class="nav-item active">
                                <p><a class="nav-link" href="proses_admin/logout.php">Logout</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h2>Selamat Datang, <?php echo $username; ?> <h2>
            <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" name="iframe_a" style="border:none;" allowfullscreen></iframe>
                </div>
            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>