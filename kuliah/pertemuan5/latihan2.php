<?php
$binatang = ['🐈', '🐇', '🐒', '🐨', '🐮', '🐍'];
$warna = ['Oren', 'putih', 'coklat', 'Abu Abu', 'Hitam Putih', 'Hijau'];

// Mengurutkan array
// sort(), rsort()


// Mencetak array untuk user
// for, foreach
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peternakan ku</title>
</head>

<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for ($i = 0; $i < count($binatang); $i++) { ?>
            <li><?= $binatang[$i]; ?></li>
        <?php } ?>
    </ul>

    <h2>Daftar warna</h2>
    <ul>
        <?php for ($i = 0; $i < count($warna); $i++) { ?>
            <li><?= $warna[$i]; ?></li>
        <?php } ?>
    </ul>

    <hr>

    <h2>Daftar Binatang</h2>
    <ol>
        <?php foreach ($binatang as $b) { ?>
            <li><?= $b; ?></li>
        <?php } ?>
    </ol>

    <h2>Daftar Warna</h2>
    <ol>
        <?php foreach ($warna as $w) { ?>
            <li><?= $w; ?></li>
        <?php } ?>
    </ol>
</body>

</html>