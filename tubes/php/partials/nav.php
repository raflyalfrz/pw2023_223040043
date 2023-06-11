<nav class="navbar navbar-expand-lg bg-white fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fa-sharp fa-solid fa-briefcase-medical pe-2"></i>Health Pharmacy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav m-auto my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php#beranda" onclick="closeDropdownMenu()">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php#toko" onclick="closeDropdownMenu()">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php#produk" onclick="closeDropdownMenu()">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php#kontak" onclick="closeDropdownMenu()">contact</a>
                </li>
            </ul>
            <form action="" method="post" class="d-flex" role="search">
                <input class="px-2 search" name="keyword" id="keyword" type="text" placeholder="Cari" aria-label="Search" />
                <button class="btn0" name="cari" id="tombol-cari" type="submit">Cari</button>
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
                        <li><a class="dropdown-item nav-klik" href="dashboard.php">Admin</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>