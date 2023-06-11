<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:php/login.php");
}
require('php/functions.php');

$kategori = "";
if (isset($_GET['kategori'])) {
    $kategori = $_GET['kategori'];
    echo "<h3>$kategori</h3>";
    $brgs = query("SELECT * FROM produk WHERE Kategori_produk = '$kategori'");
} else {
    $brgs = query("SELECT * FROM produk");
}

// jika cari diklik
if (isset($_POST["cari"])) {
    $keyword = $_POST["keyword"];
    $brgs = cari($keyword);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Health Pharmacy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <!-- ....................Link css........................  -->
    <link rel="stylesheet" href="css/main.css" />

    <!-- .....................Link font....................... -->
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">

    <!-- ......................Link Icon...................... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    <!--........................ Navbar....................... -->
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fa-sharp fa-solid fa-briefcase-medical pe-2"></i>Health Pharmacy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav m-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-klik" href="#beranda" onclick="closeDropdownMenu()">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-klik" href="#toko" onclick="closeDropdownMenu()">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-klik" href="#produk" onclick="closeDropdownMenu()">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-klik" href="#kontak" onclick="closeDropdownMenu()">contact</a>
                    </li>
                </ul>
                <form action="" method="post" class="d-flex" role="search">
                    <input class="px-2 search" name="keyword" id="keyword" type="text" placeholder="Cari" aria-label="Search" autocomplete="off" />
                    <button class="btn0" name="cari" id="tombol-cari" type="submit"><a href="#produk" class="nav-link nav-klik">Cari</a></button>
                </form>
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-klik" href="#" onclick="noacces(event)"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"></i><?php echo $_SESSION['username'] ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item nav-klik" href="php/dashboard.php">Admin</a></li>
                            <li><a class="dropdown-item nav-klik text-danger" href="php/logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ...........................HOME........................... -->
    <section class="main py-5" id="beranda">
        <div class="container py-5">
            <div class="row py-5">
                <div class="pt-5 text-center">
                    <h1 class="pt-5">Selamat Datang</h1>
                    <h1>DIHealth Pharmacy</h1>
                    <!-- ................tombol............. -->
                    <button class="btn1 mt-3">
                        <a class="nav-link" href="#produk">Lihat Produk</a>
                    </button>

                </div>
            </div>
        </div>
    </section>



    <!-- .......................Toko................................ -->
    <section class="about" id="toko">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-8 m-auto text-center">
                    <h1>Health Pharmacy</h1>
                    <h5 style="color: #348099">
                        toko yang menjual produk kesehatan
                    </h5>
                </div>
            </div>
            <div class="row">
                <!-- ..........................Bagian yang dijual 1.............. -->
                <div class="col-lg-4 col-6 py-4 text-center">
                    <img src="./img/obat-obatan.png" class="mb-3" alt="" />
                    <h5 class="py-3">Obat-Obatan</h5>
                    <p style="text-align: start">
                        menyediakan informasi tentang berbagai jenis obat-obatan yang digunakan untuk mengobati berbagai penyakit dan kondisi kesehatan. Pengunjung dapat menemukan penjelasan singkat mengenai jenis obat yang tersedia, petunjuk penggunaan yang tepat, serta peringatan atau efek samping yang mungkin terjadi.
                    </p>
                </div>
                <!-- ..........................Bagian yang dijual 2.............. -->
                <div class="col-lg-4 col-6 py-4 text-center">
                    <img src="./img/vitamin.png" class="mb-3" alt="" />
                    <h5 class="py-3">Vitamin</h5>
                    <p style="text-align: start">
                        menyediakan berbagai macam produk vitamin yang penting untuk menjaga kesehatan dan mendukung fungsi tubuh yang optimal. Pengunjung dapat menemukan penjelasan singkat mengenai manfaat setiap jenis vitamin, serta informasi tentang dosis yang dianjurkan dan cara penggunaannya.
                    </p>
                </div>
                <!-- ..........................Bagian yang dijual 3.............. -->
                <div class="col-lg-4 col-6 py-4 text-center mx-auto">
                    <img src="./img/ibu dan bayi.png" class="mb-3" alt="" />
                    <h5 class="py-3">Ibu dan Bayi</h5>
                    <p style="text-align: start">
                        fokus pada kesehatan ibu hamil, persiapan kehamilan, perawatan selama kehamilan, serta perawatan dan perkembangan bayi. Pengunjung dapat menemukan informasi singkat mengenai perawatan kehamilan, nutrisi penting selama masa kehamilan, tanda-tanda kehamilan yang normal, serta tips dan saran untuk merawat bayi yang baru lahir.
                    </p>
                </div>
                <!-- ..........................Bagian yang dijual 4.............. -->

                <div class="col-lg-4 col-6 py-4 text-center">
                    <img src="./img/alat kesehatan.png" class="mb-3" alt="" />
                    <h5 class="py-3">Alat kesehatan</h5>
                    <p style="text-align: start">
                        memberikan informasi tentang berbagai jenis alat kesehatan yang dapat digunakan untuk mendukung pemantauan kesehatan dan perawatan mandiri. Pengunjung dapat menemukan penjelasan singkat mengenai penggunaan alat-alat seperti tensimeter, termometer, atau alat monitor tingkat glukosa darah, serta petunjuk penggunaan yang benar.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ............................Produk........................ -->
    <section class="shop py-5" id="produk">
        <div class="container" id="container">
            <div class="row py-5">
                <div class="col-lg-8 m-auto text-center">
                    <h1>Jelajahi Toko Kami</h1>
                    <h5 style="color: #348099">
                        Semua produk
                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="row text-center justify-content-center ">
                    <div class="col-lg-2 col-md-3 col-3">
                        <div class="menu-kategori">
                            <a onclick="loadProduk('vitamin')">
                                <img src="../tubes/img/vitamin.png" class=" mt-4" alt="vitamin">
                            </a>
                            <p class="mt-2">Vitamin</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-3">
                        <div class="menu-kategori">
                            <a onclick="loadProduk('obat')">
                                <img src="../tubes/img/obat-obatan.png" class=" mt-4" alt="obat">
                            </a>
                            <p class="mt-2">Obat-obatan</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-3">
                        <div class="menu-kategori">
                            <a onclick="loadProduk('Ibu dan Bayi')">
                                <img src="../tubes/img/ibu dan bayi.png" class=" mt-4" alt="ibu dan bayi">
                            </a>
                            <p class="mt-2">Ibu dan Bayi</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-3">
                        <div class="menu-kategori">
                            <a onclick="loadProduk('Alat Kesehatan')">
                                <img src="../tubes/img/alat kesehatan.png" class=" mt-4" alt="alat kesehatan">
                            </a>
                            <p class="mt-2">Alat Kesehatan</p>
                        </div>
                    </div>
                </div>
                <?php $i = 0;
                foreach ($brgs as $brg) :
                    $i++ ?>
                    <div class="col-lg-3 col-md-6  col-6 text-center">
                        <form action="">
                            <div class="card border-0 mb-4 mt-4">
                                <img src="img/<?php echo $brg['gambar'] ?>" class="card-img-top img-fluid" alt="hiu" />
                                <div class="card-body">
                                    <h6 class="card-title"><?php echo strtoupper($brg['nama_produk']) ?></h6>
                                    <p class="card-text">Rp.<?php echo $brg['harga'] ?></p>
                                    <a href="../tubes/php/detail.brg.php?id=<?php echo $brg['id'] ?>" class="btn btn5 btn-dark">Lihat detail</a>
                                    <button type="submit" class="btn btn6 btn-dark" onclick="noacces(event)"><i class="fa-solid fa-cart-shopping"></i></button>
                                    <input type="hidden" name="item_name" value="<?= $brg['nama_produk']; ?>">
                                    <input type="hidden" name="item_harga" value="<?php echo $brg['harga'] ?>">
                                </div>
                            </div>
                        </form>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="apple py-5">
        <div class="container text-white py-5">
            <div class="row justify-content-end">
                <div class="col-lg-7 text-end">
                    <h1 class="font-weight-bold py-3">
                        Vaksin Booster Serentak
                    </h1>
                    <!-- ................tombol............. -->
                    <h6>Kunjungi Lembaga Kesehatan Terdekat atau</h6>
                    <button class="btn3 mt-4" onclick="noacces(event)">Daftar segera</button>
                </div>
            </div>
        </div>
    </section>

    <!-- .....................Contact........................... -->
    <section class="contact py-5" id="kontak">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-5 m-auto text-center">
                    <h1>Kontak kami</h1>
                    <h5 style="color: #348099">hubungi kami Jika ada yang ditanyakan</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 text-center">
                    <img src="./img/dokter.png" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-5 col-11">
                    <div class="alert alert-success alert-dismissible fade show col-lg-11 d-none my-alert" role="alert">
                        <strong>Terimakasih!</strong> Pesan anda sudah kami terima.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form name="kontak-form-company">
                        <div class="row py-5-0">
                            <div class="col-lg-11 py-3">
                                <input type="text" class="form-control bg-light" placeholder="Your name" name="nama" autocomplete="off" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11 py-3">
                                <input type="email" class="form-control bg-light" placeholder="E-mail" name="email" autocomplete="off" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11 py-3">
                                <textarea class="form-control bg-light" id="pesan" rows="10" placeholder="Your message" name="pesan"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn4 btn-primary btn-kirim">
                            Kirim
                        </button>
                        <!-- ..................Tombol loading................ -->
                        <button class="btn4 btn-primary btn-loading d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- .....................Footer........................... -->
    <section class="new">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3 py-4">
                    <h5 class="pb-3">Health Pharmacy</h5>
                    <p>
                        merupakan toko yang menjual obat - obatan, alat kesehatan dan banyak lagi yang berhubungan dengan kesehatan,
                    </p>
                </div>
                <div class="col-lg-3 py-4">
                    <h5 class="pb-3">MENU</h5>
                    <div>
                        <a href="#beranda" class="d-block text-white text-decoration-none">Home</a>
                        <a href="#toko" class="d-block mt-2 text-white text-decoration-none">Toko</a>
                        <a href="#produk" class="d-block mt-2 text-white text-decoration-none">Produk</a>
                    </div>
                </div>
                <div class="col-lg-2 py-4">
                    <h5 class="pb-3">MEDIA SOSIAL</h5>
                    <a href=""><i class="fa-brands fa-facebook text-light"></i></a>
                    <a href=""><i class="fa-brands fa-square-instagram text-light"></i></a>
                    <a href="https://github.com/raflyalfrz"><i class="fa-brands fa-github text-light"></i></a>
                </div>
                <div class="col-lg-4 py-4">
                    <h5 class="pb-3">INFO KONTAK</h5>
                    <p><i class="fa-solid fa-phone-flip pe-2"></i>+62 812-8550-9120</p>
                    <p><i class="fa-solid fa-envelope pe-2"></i>muhammadraflyalfrz24@gmail.com</p>
                    <p><i class="fa-solid fa-map-location-dot pe-2"></i>Jawa barat,Indonesia</p>
                </div>
            </div>


            <hr />
            <p class="text-center">
                Copyright ©2023 | Made with Muhammad Rafly Alfarizi
            </p>
        </div>
    </section>

    <!-- .....................Link script JS....................... -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/main2.js"></script>
</body>

</html>