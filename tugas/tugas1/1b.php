<?php 
$angka = 43;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1b</title>
</head>
<body>
    <?php 
    echo "Aku adalah angka <strong>$angka</strong><br/>";
    echo "Jika aku dikali 5, maka aku sekarang menjadi <strong>" . ($angka *=5) . "</strong><br/>";
    echo "Jika aku dibagi 2, maka aku sekarang menjadi <strong>" . ($angka /=2) . "</strong><br/>";
    echo "Jika aku ditambah 75, maka aku sekarang menjadi <strong>" . ($angka +=75) . "</strong><br/>";
    echo "Jika aku dikurang 20, maka aku sekarang menjadi <strong>" . ($angka -=20) . "</strong><br/>";
    ?>
</body>
</html>