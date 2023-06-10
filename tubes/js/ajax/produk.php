<?php
require '../../php/functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM produk
                    WHERE
                    nama_produk LIKE '%$keyword%' OR
                    deskripsi_produk LIKE '%$keyword%'";
$brgs = query($query);
?>

<?php if (count($brgs) > 0) : ?>
    <div class="row py-5">
        <div class="col-lg-8 m-auto text-center">
            <h1>Jelajahi Toko Kami</h1>
            <?php if ($keyword !== "") : ?>
                <h5 style="color: #348099">Produk yang dicari....</h5>
            <?php else : ?>
                <h5 style="color:#348099">Semua Produk</h5>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <?php if ($keyword !== "") : ?>
        <?php else : ?>
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
        <?php endif; ?>
        <?php $i = 0;
        foreach ($brgs as $brg) :
            $i++ ?>
            <div class="col-lg-3 col-md-6  col-6 text-center">
                <div class="card border-0 mb-4 mt-4">
                    <img src="img/<?php echo $brg['gambar'] ?>" class="card-img-top img-fluid" alt="hiu" />
                    <div class="card-body">
                        <h6 class="card-title"><?php echo $brg['nama_produk'] ?></h6>
                        <p class="card-text">Rp.<?php echo $brg['harga'] ?></p>
                        <a href="../tubes/php/detail.brg.php?id=<?php echo $brg['id'] ?>" class="btn btn5 btn-dark">Lihat detail</a>
                        <button type="submit" class="btn btn6 btn-dark"><i class="fa-solid fa-cart-shopping"></i></button>
                        <input type="hidden" name="item_name" value="<?= $brg['nama_produk']; ?>">
                        <input type="hidden" name="item_harga" value="<?php echo $brg['harga'] ?>">
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
<?php else : ?>
    <div class="row py-5">
        <div class="col-lg-8 m-auto text-center">
            <h1>Jelajahi Toko Kami</h1>
            <h5 style="color: #348099">Produk Belum Tersedia !</h5>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-lg-8 m-auto text-center">
            <div class="text-center">
                <img src="img/no-search.gif" width="400" alt="">
            </div>

        </div>
    </div>
<?php endif; ?>