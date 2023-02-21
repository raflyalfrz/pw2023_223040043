<?php

$nama_depan = "Rafly";
$nama_belakang = "Alfarizi";


for ($i = 1; $i <= 100; $i++) {
    // jika nilai $i hanya habis dibagi 3, maka tampilkan nama depan
    if ($i % 3 == 0) {
        echo $nama_depan . "<br>";
    }

    // jika nilai $i hanya habis dibagi 5, maka tampilkan nama belakang
    elseif ($i % 5 == 0) {
        echo $nama_belakang . "<br>";
    }

    // jika nilai $i habis dibagi 3 dan 5, maka tampilkan nama lengkap
    elseif ($i % 3 == 0 && $i % 5 == 0) {
        echo $nama_depan . " " . $nama_belakang . "<br>";
    }

    // jika nilai $i tidak habis dibagi 3 atau 5, maka tampilkan nilai $i itu sendiri
    else {
        echo $i . "<br>";
    }
}
