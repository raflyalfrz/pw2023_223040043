<?php
session_start();
require 'functions.php';
$conn = koneksi();


if (isset($_SESSION["login1"])) {
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST["login1"])) {
    $username = $_POST["nama"];
    $password = $_POST["password"];

    if (login_customer($username, $password)) {
        header("Location: dashboard.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/reglog.admin.css">


    <!-- ......................Link Icon...................... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <i class="fa-solid fa-briefcase-medical me-2"></i>Health Pharmacy
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-box me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-box me-2"></i>Product</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-store me-2"></i>Store</a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Admin</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid py-4 px-4">
                <div class="row">
                    <div class="col-md-12 right">
                        <div class="input-box">
                            <header>Login account</header>
                            <?php if (isset($error)) : ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>salah!</strong> pastikan password dan username sudah sesuai.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            <form action="" method="post">
                                <div class="input-field">
                                    <input type="text" class="input" id="nama" name="nama" required autocomplete="off">
                                    <label for="nama">Username</label>
                                </div>
                                <div class="input-field">
                                    <input type="password" class="input" id="show" name="password" required>
                                    <label for="password">Password</label>
                                </div>
                                <div class="cekbox px-2">
                                    <label for="password">Show Password</label>
                                    <input type="checkbox" onclick="ShowPw()">
                                </div>
                                <div class="input-field">
                                    <button type="submit" class="submit" name="login1">Sign In</button>
                                </div>
                            </form>
                            <div class="signin">
                                <span>Belum mempunyai akun? <a href="../php/admin.php">Daftar disini</a></span> <span>Atau <a href="../index.php">Kembali</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require('partials/footer.admin.php') ?>