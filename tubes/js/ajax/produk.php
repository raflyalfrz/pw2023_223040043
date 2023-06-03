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
            <?php if ($keyword !== "") : ?>
                <h3>Produk yang dicari...</h3>
            <?php else : ?>
                <h3>Semua Produk</h3>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <?php $i = 0;
        foreach ($brgs as $brg) :
            $i++ ?>
            <div class="col-lg-3 col-6 text-center">
                <div class="card border-0 bg-light mb-2">
                    <img src="../tubes/img/<?php echo $brg['gambar']; ?>" class="card-img-top img-fluid" alt="<?php echo $brg['nama_produk'] ?>" style="object-fit: contain">
                    <div class="card-body">
                        <h6 class="card-title"><?php echo $brg['nama_produk'] ?></h6>
                        <p class="card-text">Rp.<?php echo $brg['harga'] ?></p>
                        <a href="../tubes/php/detail.brg.php?id=<?php echo $brg['id'] ?>" class="btn btn-primary">Lihat detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="row py-5">
        <div class="col-lg-8 m-auto text-center">
        <?php else : ?>
            <div class="text-center">
                <img src="img/no-results.png" alt="">
            </div>
        <?php endif; ?>
        </div>
    </div>