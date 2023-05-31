<?php
require('php/functions.php');
$brgs = query("SELECT *  FROM produk ");

require('php/partials/nav.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Health Pharmacy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/main.css" />

    <!-- .....................Link font....................... -->
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">

    <!-- ......................Link Icon...................... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <section class="main py-5" id="beranda">
        <div class="container py-5">
            <div class="row py-5">
                <div class="pt-5 text-center">
                    <h1 class="pt-5">Selamat Datang</h1>
                    <h1>Di Health Pharmacy</h1>
                    <!-- ................tombol............. -->
                    <button class="btn1 mt-3">
                        <a class="nav-link" href="#produk">Lihat Produk</a>
                    </button>
                </div>
            </div>
        </div>
    </section>



    <!-- .......................bagian kategori................................ -->
    <section class="kategori" id="kategori">
        <div class="container mt-5 ">
            <div class="judul-kategori">
                <h3 class="text-center">Kategori Produk</h3>
            </div>
            <div class="row text-center justify-content-center ">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="menu-kategori">
                        <a href="../tubes/pages/vitamin.php">
                            <img src="../tubes/img/vitamin.png" class=" mt-4" alt="vitamin">
                        </a>
                        <p class="mt-2">Vitamin</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="menu-kategori">
                        <a href="../tubes/pages/obat_obatan.php">
                            <img src="../tubes/img/obat-obatan.png" class=" mt-4" alt="obat">
                        </a>
                        <p class="mt-2">Obat-obatan</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="menu-kategori">
                        <a href="../tubes/pages/ibu_dan_bayi.php">
                            <img src="../tubes/img/ibu dan bayi.png" class=" mt-4" alt="ibu dan bayi">
                        </a>
                        <p class="mt-2">Ibu dan Bayi</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="menu-kategori">
                        <a href="../tubes/pages/alkes.php">
                            <img src="../tubes/img/alat kesehatan.png" class=" mt-4" alt="alat kesehatan">
                        </a>
                        <p class="mt-2">Alat Kesehatan</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ............................Bagian Produk........................ -->
    <section class="shop py-5" id="produk">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-8 m-auto text-center">
                    <h3>Semua produk</h3>
                </div>
            </div>
            <div class="row ">
                <?php $i = 0;
                foreach ($brgs as $brg) :
                    $i++ ?>
                    <div class="col-lg-3 col-6 text-center">
                        <div class="card border-0 bg-light mb-2">
                            <img src="../tubes/img/<?php echo $brg['gambar']; ?>" class="card-img-top img-fluid" alt="<?php echo $row['nama_produk'] ?>" style="object-fit: contain">
                            <div class="card-body">
                                <h6 class="card-title"><?php echo $brg['nama_produk'] ?></h6>
                                <p class="card-text">Rp.<?php echo $brg['harga'] ?></p>
                                <a href="../tubes/php/detail.brg.php?id=<?php echo $brg['id'] ?>" class="btn btn-primary ">Lihat detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php require('php/partials/footer.php') ?>