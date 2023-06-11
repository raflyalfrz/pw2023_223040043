<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}
require('functions.php');

// Mendapatkan ID produk dari parameter URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query SQL untuk mengambil detail produk berdasarkan ID dengan batasan 1 baris
    $brg = query("SELECT * FROM produk WHERE id = $id LIMIT 1");

    if ($brg) {
        require('partials/header.php');
        require('partials/nav.php');
?>

        <section>
            <div class="container py-5">
                <div class="row py-5">


                    <div class="col-lg-12">
                        <div class="shadow border rounded p-5 mb-5">

                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="card shadow border rounded p-5 mb-5">
                                        <img src="../img/<?php echo $brg[0]['gambar']; ?>" class="card-img-top img-fluid" alt="AICARE INFRARED THERMOMETER" style="object-fit: contain">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h3><?php echo $brg[0]['nama_produk'] ?></h3>
                                    <p class="card-text">
                                        <span class="text-muted mb-1 d-block">Harga :</span>

                                        <i class="fa-solid fa-tag me-2 text-info"></i>

                                        Rp. <?php echo $brg[0]['harga'] ?>
                                    </p>


                                    <p class="card-text">
                                        <span class="text-muted mb-1 d-block">Kategori :</span>

                                        <i class="fa-solid fa-arrow-right me-2 text-info"></i>
                                        <?php echo $brg[0]['Kategori_produk'] ?>
                                    </p>


                                    <p class="card-text">
                                        <span class="text-muted mb-1 d-block">Dosis :</span>
                                        <i class="fa-solid fa-arrow-right me-2 text-info"></i> <?php echo $brg[0]['dosis_produk'] ?>
                                    </p>


                                    <p class="card-text">
                                        <span class="text-muted mb-1 d-block">Deskripsi :</span>
                                        <i class="fa-solid fa-arrow-right me-2 text-info"></i> <?php echo $brg[0]['deskripsi_produk'] ?>
                                    </p>

                                    <div class="form-group mt-3">
                                        <label for="quantity">Jumlah:</label>
                                        <input type="number" id="quantity" name="quantity" min="1" value="1" class="form-control">
                                    </div>

                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-dark mt-2" onclick="noacces(event)">Tambah ke Keranjang</button>
                                        <button type="button" class="btn btn-danger mt-2"><a class="nav-link" href="../index.php#produk">Kembali</a></button>
                                        <input type="hidden" name="item_name" value="<?= $brg[0]['nama_produk']; ?>">
                                        <input type="hidden" name="item_harga" value="<?php echo $brg[0]['harga'] ?>">
                                    </div>


                                </div>
                                <div class="col-lg-6">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




<?php
        require('partials/footer.php');
    } else {
        // Tampilkan pesan jika ID tidak ditemukan
        echo "Produk tidak ditemukan.";
    }
} else {
    // Tampilkan pesan jika parameter ID tidak diberikan
    echo "ID tidak diberikan.";
}
?>