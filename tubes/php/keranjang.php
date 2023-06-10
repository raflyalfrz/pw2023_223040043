<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}
require('functions.php');

$brgs = query("SELECT *  FROM produk");

require('partials/header.php');
require('partials/nav.php');
?>

<section>
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-12">
                <div class=" rounded p-5 mb-5">
                    <div class="row">
                        <table class="table bg-white rounded shadow-sm  table-hover table-striped ">
                            <thead>
                                <tr class="bg-info">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</section>

<?php require('partials/footer.php') ?>