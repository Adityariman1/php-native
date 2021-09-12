<?php
echo "No 1<br><br>";
for ($i =2; $i <= 6; $i++) {
    for ($j = $i; $j <= $i + 4;$j++) {
        echo $j . " &nbsp";
    }echo "<br>";
}

echo "<br>No 2<br><br>";

$b = 3;
for ($i = 3; $i <= 21; $i+= 2) {
    for ($c = $i; $c <= $b; $c++) {
        echo $c . "&nbsp";
    }
    echo "<br>";
    $b += 2;
    $b = $b + 1;
}

?>