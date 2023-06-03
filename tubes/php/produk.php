<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.admin.php");
}
require('functions.php');
require('partials/header.admin.php');

//pagination

$brgs = query("SELECT *  FROM produk");

//jika cari diklik
if (isset($_POST["cari"])) {
    $brgs = cari($_POST["keyword"]);
}
?>



<div class="d-flex" id="wrapper">
    <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
            <i class="fa-solid fa-briefcase-medical me-2"></i>Health Pharmacy
        </div>
        <div class="list-group list-group-flush my-3">
            <a href="../php/dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fa-solid fa-box me-2"></i>Dashboard</a>
            <a href="../php/user.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fa-solid fa-user me-2"></i>User</a>
            <a href="../php/produk.php" class="list-group-item list-group-item-action bg-transparent second-text active">
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
                <h2 class="fs-2 m-0">Product</h2>
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
            <div class="container">
                <a href="../php/tambah.php" class="btn bg-white mb-3">Tambah</a>
                <a href="../php/tambah.php" class="btn bg-white mb-3">Stock</a>
                <a href="../php/cetak.php" target="_blank" class="btn bg-danger mb-3 text-white"><i class="fa-solid fa-print me-2"></i>Print</a>
                <br>
                <br>
                <div class="col-lg-6 col-md-8 col-sm-10 col-12">
                    <form action="" method="post" class="input-group">
                        <input type="text" name="keyword" class="form-control" autofocus placeholder="Masukkan kata kunci pencarian" autocomplete="off" id="keyword">
                        <button type="submit" name="cari" id="tombol-cari" class="btn btn-primary">Cari</button>
                    </form>
                </div>

                <br>
                <div id="container">
                    <table class="table bg-white rounded shadow-sm  table-hover table-striped ">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Aksi</th>
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
                                    <td><?php echo $brg['Kategori_produk'] ?></td>
                                    <td></td>
                                    <td><img src="../img/<?php echo $brg['gambar']; ?>" width="50"></td>

                                    <td>
                                        <a href="edit.php?id=<?php echo $brg['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3 text-success"></i></a>
                                        <a href="hapus.php?id=<?php echo $brg['id'] ?>" class="link-dark" onclick="confirmDelete(event)"><i class="fa-solid fa-trash fs-5 text-danger"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <?php require('partials/footer.admin.php') ?>