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
            <a href="../php/dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text active">
                <i class="fa-solid fa-box me-2"></i>Profil</a>
            <a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                <i class="fa-solid fa-right-from-bracket me-2"></i>Kembali</a>
        </div>
    </div>
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                <h2 class="fs-2 m-0">Profil</h2>
            </div>


        </nav>

        <div class="container-fluid px-4">
            <div class="container">
                <a href="../php/tambah.php" class="btn bg-white mb-3">Tambah</a>
                <a href="../php/tambah.php" class="btn bg-white mb-3">Stock</a>


                <div class="col-lg-6 col-md-8 col-sm-10 col-12">
                    <form action="" method="post" class="input-group">
                        <input type="text" name="keyword" class="form-control" autofocus placeholder="Masukkan kata kunci pencarian" autocomplete="off">
                        <button type="submit" name="cari" class="btn btn-primary">Cari</button>
                    </form>
                </div>

                <br>
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


    <?php require('partials/footer.admin.php') ?>