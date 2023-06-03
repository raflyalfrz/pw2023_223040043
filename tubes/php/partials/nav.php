<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><i class="fa-solid fa-briefcase-medical pe-2"></i>Health Pharmacy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <form action="" method="post" class="d-flex w-90" role="search">
                <input class="flex-grow-1 px-2 search" name="keyword" id="keyword" type="text" placeholder="Cari apapun yang tersedia diHealth Pharmacy" aria-label="Search" />
                <button class="btn0" name="cari" id="tombol-cari" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#toko" onclick="closeDropdownMenu()"><i class="fa-solid fa-cart-shopping"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./php/login.php" onclick="closeDropdownMenu()"><i class="fa-solid fa-user"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="php/logout.php" onclick="closeDropdownMenu()"><i class="fa-solid fa-right-from-bracket text-danger"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>