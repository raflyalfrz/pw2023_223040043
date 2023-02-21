<!DOCTYPE html>
<html>

<head>
    <title>2c</title>
    <style type="text/css">
        .box1 {
            display: flex;
            flex-wrap: wrap;
        }

        .box {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            background-color: salmon;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        for ($i = 10; $i >= 1; $i--) {
            echo "<div class='box1'>";
            for ($j = 1; $j <= $i; $j++) {
                echo "<div class='box'>";
                echo "<p>" . $j . "</p>";
                echo "</div>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>