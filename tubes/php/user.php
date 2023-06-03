<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.admin.php");
}
require('functions.php');
require('partials/header.admin.php');
$brgs = query("SELECT *  FROM produk");
$pgns = query("SELECT *  FROM user")

?>

<div class="d-flex" id="wrapper">
    <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
            <i class="fa-solid fa-briefcase-medical me-2"></i>Health Pharmacy
        </div>
        <div class="list-group list-group-flush my-3">
            <a href="../php/dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fa-solid fa-box me-2"></i>Dashboard</a>
            <a href="../php/user.php" class="list-group-item list-group-item-action bg-transparent second-text active">
                <i class="fa-solid fa-user me-2"></i>User</a>
            <a href="../php/produk.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fa-solid fa-box me-2"></i>Product</a>
            <a href="../index.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fa-solid fa-store me-2"></i>Store</a>
            <?php require('partials/tbl_logout_admin.php') ?>
        </div>
    </div>
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                <h2 class="fs-2 m-0">User</h2>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php require('partials/nav.admin.php') ?>
                </ul>
            </div>
        </nav>


    </div>

    <?php require('partials/footer.admin.php') ?>