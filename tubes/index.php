<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Health Pharmacy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <!-- ....................Link css........................  -->
    <link rel="stylesheet" href="../tubes/css/stylesheet.css
    " />

    <!-- .....................Link font....................... -->
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">

    <!-- ......................Link Icon...................... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!--........................ Navbar....................... -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-briefcase-medical pe-2"></i>Health Pharmacy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <form class="d-flex w-90" role="search">
                    <input class="flex-grow-1 px-2 search" type="search" placeholder="Cari apapun yang tersedia diHealth Pharmacy" aria-label="Search" />
                    <button class="btn0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#toko" onclick="closeDropdownMenu()"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./php/login.php" onclick="closeDropdownMenu()"><i class="fa-solid fa-user"></i></a>
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
            <div class="row">
                <!-- ................Produk 1............... -->
                <div class="col-lg-3 col-6 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <img src="../tubes/img/Aicare infrared.png" class="card-img-top img-fluid" alt="AICARE INFRARED THERMOMETER" style="object-fit: contain">
                        <div class="card-body">
                            <h6 class="card-title">AICARE INFRARED THERMOMETER</h6>
                            <p class="card-text">Rp. 284.551/PC</p>
                            <a href="../tubes/pages/CP1.php" class="btn btn-primary ">Lihat detail</a>
                        </div>
                    </div>
                </div>

                <!-- ................Produk 2............... -->
                <div class="col-lg-3 col-6 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <img src="../tubes/img/Laica digital.png" class="card-img-top img-fluid" alt="lAICA DIGITAL THERMOMETER" style="object-fit: contain">
                        <div class="card-body">
                            <h6 class="card-title">LAICA DIGITAL THERMOMETER</h6>
                            <p class="card-text">Rp. 133.200/PC</p>
                            <a href="../tubes/pages/CP2.php" class="btn btn-primary ">Lihat detail</a>
                        </div>
                    </div>
                </div>

                <!-- ................Produk 3............... -->
                <div class="col-lg-3 col-6 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <img src="../tubes/img/Tempra drops.png" class="card-img-top img-fluid" alt="TEMPRA DROPS 15 ML/OBAT DEMAM NYERI ANAK & BAYI" style="object-fit: contain">
                        <div class="card-body">
                            <h6 class="card-title">TEMPRA DROPS 15ML</h6>
                            <p class="card-text">Rp. 50.350/BOTOL</p>
                            <a href="../tubes/pages/CP3.php" class="btn btn-primary ">Lihat detail</a>
                        </div>
                    </div>
                </div>

                <!-- ................Produk 4............... -->
                <div class="col-lg-3 col-6 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <img src="../tubes/img/Entrostop.png" class="card-img-top img-fluid" alt="ENTROSTOP HERBAL ANAK 6 SACHET" style="object-fit: contain">
                        <div class="card-body">
                            <h6 class="card-title">ENTROSTOP HERBAL ANAK</h6>
                            <p class="card-text">Rp. 15.120/DUS</p>
                            <a href="../tubes/pages/CP4.php" class="btn btn-primary ">Lihat detail</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row ">
                <!-- ................Produk 5............... -->
                <div class="col-lg-3 col-6 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <img src="../tubes/img/Cdr .png" class="card-img-top img-fluid" alt="CDR 15 TABLET EFFERVESCENT/ SUPLEMEN KESEHATAN TULANG & SENDI" style="object-fit: contain">
                        <div class="card-body">
                            <h6 class="card-title">CDR 15 TABLET EFFERVESCENT</h6>
                            <p class="card-text">Rp. 65.819/TUBE</p>
                            <a href="../tubes/pages/CP5.php" class="btn btn-primary ">Lihat detail</a>
                        </div>
                    </div>
                </div>

                <!-- ................Produk 6............... -->
                <div class="col-lg-3 col-6 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <img src="../tubes/img/Sakatonik.png" class="card-img-top img-fluid" alt="SAKATONIK LIVER SIRUP" style="object-fit: contain">
                        <div class="card-body">
                            <h6 class="card-title">SAKATONIK LIVER SIRUP</h6>
                            <p class="card-text">Rp. 12.851/BOTOL</p>
                            <a href="../tubes/pages/CP6.php" class="btn btn-primary ">Lihat detail</a>
                        </div>
                    </div>
                </div>

                <!-- ................Produk 7............... -->
                <div class="col-lg-3 col-6 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <img src="../tubes/img/Minyak telon.jpg" class="card-img-top img-fluid" alt="My Baby Minyak Telon 150 ml" style="object-fit: contain">
                        <div class="card-body">
                            <h6 class="card-title">MY BABY MINYAK TELON</h6>
                            <p class="card-text">Rp. 36.300/BOTOL</p>
                            <a href="../tubes/pages/CP7.php" class="btn btn-primary ">Lihat detail</a>
                        </div>
                    </div>
                </div>

                <!-- ................Produk 8............... -->
                <div class="col-lg-3 col-6 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <img src="../tubes/img/Vitaflow botol susu.png" class="card-img-top img-fluid" alt="VITAFLOW BOTOL SUSU MULTIFUNGSI PP 140 ML - DOT SIZE S" style="object-fit: contain">
                        <div class="card-body">
                            <h6 class="card-title">VITAFLOW BOTOL SUSU</h6>
                            <p class="card-text">Rp. 34.000</p>
                            <a href="../tubes/pages/CP8.php" class="btn btn-primary ">Lihat detail</a>
                        </div>
                    </div>
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
                        <a href="#produk" class="d-block mt-2 text-white text-decoration-none">Produk</a>
                    </div>
                </div>
                <div class="col-lg-2 py-4">
                    <h5 class="pb-3">MEDIA SOSIAL</h5>
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-telegram"></i></a>
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

    <script src="../tubes/js/main.js"></script>
</body>

</html>