<?php
// ARRAY
// ARRAY adalah variabel yang bisa menampung banyak nilai

// Membuat Array
$hari = array('Senin', 'Selasa', 'Rabu', 'Kamis', "Juma'at", 'Sabtu', 'Minggu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Rafly', 10, false];
$binatang = ['🐈', '🐇', '🐒', '🐨', '🐮'];

//Mencetak Array
var_dump($hari);
print_r($bulan);
var_dump($myArray);
echo $binatang[4];

echo "<hr>";

//Manipulasi Array
//Menambah elemen di akhrir array
$bulan[] = 'April';
$bulan[] = 'Mei';
print_r($bulan);
echo "<hr>";
array_push($bulan, 'Juni', 'Juli', 'Agustus');
print_r($bulan);
echo "<hr>";

//Menambah elemen di awal array
array_unshift($binatang, '🐍', '🐔');
print_r($binatang);
echo "<hr>";

//Menghapus elemen di akhir array
array_pop($hari);
print_r($hari);
echo "<hr>";

//Menghapus elemen di awal array
array_shift($hari);
print_r($hari);
