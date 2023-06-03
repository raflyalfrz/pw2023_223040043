<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.admin.php");
}
require('functions.php');
require('partials/header.admin.php');


if (isset($_POST['tambah'])) {

    if (tambah($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambah!');
        document.location.href = 'produk.php';
        </script>";
    }
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
                <div class="text-center mb-4">
                    <h3>Tambah Produk</h3>
                </div>

                <div class="container d-flex justify-content-center">
                    <form action="" method="post" style="width:50vw; min-width:300px;" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Nama Produk:</label>
                            <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="masukan nama produk" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga:</label>
                            <input type="number" class="form-control" name="harga" id="harga" placeholder="masukan jumlah harga" pattern="[\d.]+" title="Hanya boleh angka dan titik(.)" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori:</label>
                            <select class="form-select" name="Kategori_produk" id="Kategori_produk" required>
                                <option value="" selected disabled>Pilih kategori</option>
                                <option value="obat">Obat</option>
                                <option value="vitamin">Vitamin</option>
                                <option value="alat kesehatan">Alat Kesehatan</option>
                                <option value="ibu_bayi">Ibu dan Bayi</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Dosis:</label>
                            <textarea type="text" class="form-control" name="dosis_produk" id="dosis_produk" rows="2" placeholder="masukan dosis" autocomplete="off" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi:</label>
                            <textarea class="form-control" name="deskripsi_produk" rows="2" id="deskripsi_produk" placeholder="masukan deskrpsi" autocomplete="off" required></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control" name="gambar" id="gambar" required>
                        </div>


                        <div>
                            <button type="submit" class="btn btn-success" name="tambah">Tambah</button>
                            <a href="../php/produk.php" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require('partials/footer.admin.php') ?>