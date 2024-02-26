<?php

$hewan = ["kucing", "ayam", "banteng", "ikan"];
echo "Hewan dengan index ke-1: " .$hewan[1];
echo "</br> Hewan dengan index ke-3: " .$hewan[3];
echo "<br>";


foreach ($hewan as $animal) {
    echo '<li>' .$animal. "</li>";
}