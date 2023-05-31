<?php
require('functions.php');
require('partials/header.admin.php');
$brgs = query("SELECT *  FROM produk")

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
            <a href="../php/admin.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                <i class="fa-solid fa-right-from-bracket me-2"></i>Logout</a>
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
                            <h3 class="fs-2">0</h3>
                            <p class="fs-5">Products</p>
                        </div>
                        <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">0</h3>
                            <p class="fs-5">User</p>
                        </div>
                        <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>
            </div>

            <div class="container my-5">
                <h3 class="fs-4 mb-3">User</h3>

                <table class="table bg-white rounded shadow-sm  table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis kelamin</th>
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
                                <td>
                                    <a href="../php/edit.php?id=<?php echo $brg['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3 text-success"></i></a>
                                    <a href="../php/hapus.php?id=<?php echo $brg['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5 text-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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
                                <td><?php echo $brg['dosis_produk'] ?></td>
                                <td><?php echo $brg['deskripsi_produk'] ?></td>
                                <td><img src="../img/Sakatonik.png" width="50"></td>
                                <td>
                                    <a href="../php/edit.php?id=<?php echo $brg['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3 text-success"></i></a>
                                    <a href="../php/hapus.php?id=<?php echo $brg['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5 text-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php require('partials/footer.admin.php') ?>