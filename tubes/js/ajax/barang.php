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
    <table class="table bg-white rounded shadow-sm table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Kategori</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($brgs as $brg) :
                $i++ ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?php echo $brg['nama_produk'] ?></td>
                    <td>Rp.<?php echo $brg['harga'] ?></td>
                    <td><?php echo $brg['Kategori_produk'] ?></td>
                    <td><img src="../img/<?php echo $brg['gambar']; ?>" width="50"></td>

                    <td>
                        <a href="edit.php?id=<?php echo $brg['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3 text-success"></i></a>
                        <a href="hapus.php?id=<?php echo $brg['id'] ?>" class="link-dark" onclick="confirmDelete(event)"><i class="fa-solid fa-trash fs-5 text-danger"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <h3>Maaf, data tidak ditemukan...</h3>
<?php endif; ?>