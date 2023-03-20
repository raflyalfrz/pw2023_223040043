<?php
$mahasiswa = [
    [
        "nama" => "Rafly Alfarizi",
        "nrp" => "223040043",
        "email" => "rafly.223040043@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "rafly.jpg",
    ],
    [
        "nama" => "Rachka Fauziansyah",
        "nrp" => "223040036",
        "email" => "rachka.223040036@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "rachka.jpg",
    ],
    [
        "nama" => "Pandu Permana",
        "nrp" => "223040042",
        "email" => "pandu.223040042@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "pandu.jpg",
    ],
    [
        "nama" => "Lisvindanu",
        "nrp" => "223040038",
        "email" => "lisvindanu.223040038@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "lisvindanu.jpg",
    ],
    [
        "nama" => "Faiz Azkiyya",
        "nrp" => "223040060",
        "email" => "faiz.223040060@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "faiz.jpg",
    ],
    [
        "nama" => "Daffa Musyaffa",
        "nrp" => "223040048",
        "email" => "daffa.223040048@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "daffa.jpg",
    ],
    [
        "nama" => "Rifki Ramadhani",
        "nrp" => "223040046",
        "email" => "rifki.223040046@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "rifki.jpg",
    ],
    [
        "nama" => "Reza Fahrezi",
        "nrp" => "223040044",
        "email" => "reza.223040044@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "reza.jpg",
    ],
    [
        "nama" => "Sandy Nugraha",
        "nrp" => "223040047",
        "email" => "sandy.223040047@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "sandy.jpg",
    ],
    [
        "nama" => "Arya Saputra",
        "nrp" => "223040051",
        "email" => "arya.223040051@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "arya.jpg",
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