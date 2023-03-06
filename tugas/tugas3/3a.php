<?php
echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r)
{
    $luas = 3.14 * $r * $r;
    echo "Jari-jari = $r cm. <br>";
    echo "Luas lingkaran = $luas cm kuadrat <br>";
}

hitungLuasLingkaran(10);

echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r)
{
    $keliling = 2 * 3.14 * $r;
    echo "Jari-jari = $r cm. <br>";
    echo "Keliling lingkaran = $keliling cm <br>";
}

hitungKelilingLingkaran(20);

echo "<hr>";
