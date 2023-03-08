<?php
// Mengecek apakah sebuah bilangan itu GANJIL / GENAP

function cek_ganjil_genap($angka) // parameter
{
    // jika $angka dibagi 2, sisanya 1 maka GANJIL
    if ($angka % 2 === 1) {
        return "$angka adalah bilangan GANJIL!";
    } else { //selain dari itu
        return "$angka adalah bilangan GENAP!";
    }
}
echo cek_ganjil_genap(10); // argument
echo "<br>";
echo cek_ganjil_genap(5);
echo "<br>";
echo cek_ganjil_genap(100);
