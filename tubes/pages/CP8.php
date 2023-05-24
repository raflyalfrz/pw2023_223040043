<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Health Pharmacy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <!-- ....................Link css........................  -->
    <link rel="stylesheet" href="../css/stylesheet.css
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
            <a class="navbar-brand" href="../index.php#kategori"><i class="fa-solid fa-briefcase-medical pe-2"></i>Health Pharmacy</a>
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
                        <a class="nav-link" href="../php/login.php" onclick="closeDropdownMenu()"><i class="fa-solid fa-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ............................Bagian Produk........................ -->
    <section class="shop py-5" id="produk">
        <div class="container py-5">
            <div class="row py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-4  d-sm-block  d-md-block  d-lg-block">
                        <div class="card border-0 bg-light mb-2">
                            <img src="../img/Vitaflow botol susu.png" class="card-img-top img-fluid" alt="VITAFLOW BOTOL SUSU MULTIFUNGSI PP 140 ML - DOT SIZE S" style="object-fit: contain">
                        </div>
                    </div>
                    <div class="col-lg-5 col-11 d-flex align-items-center justify-content-center ">
                        <table class="table no-border">
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <td>:</td>
                                    <td>VITAFLOW BOTOL SUSU MULTIFUNGSI PP 140 ML - DOT SIZE S</td>
                                </tr>
                                <tr>
                                    <th>Harga</th>
                                    <td>:</td>
                                    <td>Rp. 34.000/PC</td>
                                </tr>
                                <tr>
                                    <th>Dosis</th>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td>:</td>
                                    <td>Vitaflow Botol Susu PP 140ml Lingkaran Awan Dengan Dot Size S.
                                        Botol dengan leher standar ukuran 140ml yang terbuat dari bahan polypropylene (PP) yang bebas BPA (BPA FREE) dan tahan panas hingga suhu 120 derajat celcius. Botol Vitaflow juga bisa ditaruh di freezer ketika mendinginkan susu. Botol dengan printing desain cantik ini dibuat dari tinta food contact grade teknologi Jepang terbaru yang tidak mudah mengelupas.
                                        Dilengkapi dalam botol dengan dot peristaltic slim neck ukuran S dan dilengkapi dengan buku instruksi yang dikemas dalam individual box bahan carton.</td>
                                </tr>
                            </tbody>
                        </table>
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