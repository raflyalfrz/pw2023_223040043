<?php
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
        <section class="shop py-5" id="produk">
            <div class="container py-5">
                <div class="row py-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-4  d-sm-block  d-md-block  d-lg-block">
                            <div class="card border-0 bg-light mb-2">
                                <img src="../img/<?php echo $brg[0]['gambar']; ?>" class="card-img-top img-fluid" alt="AICARE INFRARED THERMOMETER" style="object-fit: contain">
                            </div>
                        </div>
                        <div class="col-lg-5 col-11 d-flex align-items-center justify-content-center ">
                            <table class="table no-border">
                                <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <td>:</td>
                                        <td><?php echo $brg[0]['nama_produk'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Harga</th>
                                        <td>:</td>
                                        <td>Rp.<?php echo $brg[0]['harga'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Dosis</th>
                                        <td>:</td>
                                        <td><?php echo $brg[0]['dosis_produk'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td>:</td>
                                        <td><?php echo $brg[0]['deskripsi_produk'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
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