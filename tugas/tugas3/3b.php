<?php
function urutAngka($angka)
{
    $counter = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $counter . " ";
            $counter++;
        }
        echo "<br>";
    }
}

urutAngka(5);
