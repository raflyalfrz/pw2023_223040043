<?php
$perangkat_keras = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komputer</title>
</head>

<body>
    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
        <?php foreach ($perangkat_keras as $pk) { ?>
            <li><?= $pk; ?></li>
        <?php } ?>
    </ol>

    <br>

    <h2>Macam-macam perangkat keras komputer baru</h2>
    <ol>
        <?php
        $perangkat_keras_baru = $perangkat_keras;
        array_push($perangkat_keras_baru, "Card Reader", "Modem");
        sort($perangkat_keras_baru);

        foreach ($perangkat_keras_baru as $pkb) { ?>
            <li><?= $pkb; ?></li>
        <?php } ?>
    </ol>
</body>

</html>