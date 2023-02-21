<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            border: 1px solid black;
            width: 500px;
            height: 500px;
        }

        .box {
            width: 20%;
            height: 20%;
            display: flex;
            font-size: 48px;
        }

        /* warna kotak hitam */
        .box.black {
            background-color: black;
            color: white;
        }

        /* warna kotak putih */
        .box.white {
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        for ($i = 0; $i < 25; $i++) {
            $colorClass = ($i % 2 == 0) ? 'white' : 'black';
            echo '<div class="box ' . $colorClass . '">' . '</div>';
        }
        ?>
    </div>
</body>

</html>