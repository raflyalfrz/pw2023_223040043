<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}

require('functions.php');

$brgs = [];
$kategori = "";

if (isset($_GET["kategori"])) {
    $kategori = $_GET["kategori"];
    $brgs = query("SELECT * FROM produk WHERE kategori_produk = '$kategori'");
} else {
    $brgs = query("SELECT * FROM produk");
}
//jika cari diklik
if (isset($_POST["cari"])) {
    $brgs = cari($_POST["keyword"]);
}

require('partials/header.php');
require('partials/nav.php');
?>

<section class="shop py-5" id="produk">
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-8 m-auto text-center">
                <h3><?php echo $kategori ? $kategori : 'Semua Produk' ?></h3>
            </div>
        </div>
        <div class="row">
            <?php $i = 0;
            foreach ($brgs as $brg) :
                $i++ ?>
                <div class="col-lg-3 col-6 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <img src="../img/<?php echo $brg['gambar']; ?>" class="card-img-top img-fluid" alt="<?php echo $brg['nama_produk'] ?>" style="object-fit: contain">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $brg['nama_produk'] ?></h6>
                            <p class="card-text">Rp.<?php echo $brg['harga'] ?></p>
                            <a href="detail.brg.php?id=<?php echo $brg['id'] ?>" class="btn btn-primary">Lihat detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require('partials/footer.php') ?>