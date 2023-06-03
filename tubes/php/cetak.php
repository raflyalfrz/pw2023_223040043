<?php

require_once __DIR__ . '/vendor/autoload.php';

require('functions.php');
$brgs = query("SELECT *  FROM produk");

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>
   <h1>Daftar Produk</h1>
   <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Stock</th>
        </tr>';

$i = 1;
foreach ($brgs as $brg) {
    $html .= '<tr>
            <td>' . $i++ . '</td>
            <td><img src="../img/' . $brg["gambar"] . '" width="50"></td>
            <td>' . $brg["nama_produk"] . '</td>
            <td>Rp. ' . $brg["harga"] . '</td>
            <td>' . $brg["Kategori_produk"] . '</td>
        </tr>';
}

$html .= '</table>    
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('Daftar-Produk.pdf', 'I');
