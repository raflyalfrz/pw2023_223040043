<?php
session_start();
if (!isset($_SESSION["login1"])) {
    header("location:login.admin.php");
}
require('functions.php');

$id = htmlspecialchars($_GET['id']);

if (hapus($id) > 0) {
    echo "<script>
        alert('data berhasil dihapus!');
        document.location.href = 'produk.php';
        </script>";
} else {
    echo "<script>
        alert('data gagal dihapus!');
        document.location.href = 'produk.php';
        </script>";
}
