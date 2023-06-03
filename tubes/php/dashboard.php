<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.admin.php");
}
require('functions.php');
require('partials/header.admin.php');
$brgs = query("SELECT *  FROM produk");
$pgns = query("SELECT *  FROM user");
// untuk menghitung jumlah data produk yang ada
$get1 = query("SELECT * FROM produk");
$count1 = count($get1);
// untuk menghitung data user yang ada
$get2 = query("SELECT * FROM user");
$count2 = count($get2)
?>

<div class="d-flex" id="wrapper">
    <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
            <i class="fa-solid fa-briefcase-medical me-2"></i>Health Pharmacy
        </div>
        <div class="list-group list-group-flush my-3">
            <a href="../php/dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text active">
                <i class="fa-solid fa-box me-2"></i>Dashboard</a>
            <a href="../php/user.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
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
                <h2 class="fs-2 m-0">Dashboard</h2>
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

        <div class="container-fluid px-4">
            <div class="row g-3 my-2">
                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"><?= $count2 ?></h3>
                            <p class="fs-5">User</p>
                        </div>
                        <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"><?= $count1 ?></h3>
                            <p class="fs-5">Produk</p>
                        </div>
                        <i class="fas fa-box fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>
            </div>



            <div class="container my-5">
                <h3 class="fs-4 mb-3">Produk</h3>

                <table class="table bg-white rounded shadow-sm  table-hover table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Dosis</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Gambar</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;
                        foreach ($brgs as $brg) :
                            $i++ ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?php echo $brg['nama_produk'] ?></td>
                                <td>Rp.<?php echo $brg['harga'] ?></td>
                                <td><?php echo $brg['dosis_produk'] ?></td>
                                <td><?php echo $brg['deskripsi_produk'] ?></td>
                                <td><img src="../img/<?php echo $brg['gambar']; ?>" width="50"></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php require('partials/footer.admin.php') ?>