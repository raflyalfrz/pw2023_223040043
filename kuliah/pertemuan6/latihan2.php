<?php
// $mahasiswa = [
//     ["Rafly Alfarizi", "223040043", "raflyalfarizx24@gmail.com", "Teknik Informatika"],
//     ["Rafly Alfarizi", "223040043", "raflyalfarizx24@gmail.com", "Teknik Informatika"],
//     ["Rafly Alfarizi", "223040043", "raflyalfarizx24@gmail.com", "Teknik Informatika"],
//     ["Rafly Alfarizi", "223040043", "raflyalfarizx24@gmail.com", "Teknik Informatika"],
//     ["Rafly Alfarizi", "223040043", "raflyalfarizx24@gmail.com", "Teknik Informatika"],
// ];

// Array associative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Rafly Alfarizi",
        "nrp" => "223040043",
        "email" => "raflyalfarizx24@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "rafly.jpg",
    ],
    [
        "nama" => "Rafly Alfarizi",
        "nrp" => "223040043",
        "email" => "raflyalfarizx24@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "rafly.jpg",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>NRP : <?= $mhs["nrp"] ?></li>
            <li>Jurusan : <?= $mhs["jurusan"] ?></li>
            <li>Email : <?= $mhs["email"] ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>