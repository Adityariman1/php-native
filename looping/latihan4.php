<?php
/* soal 1*/
$b = 1;
for ($i = $b; $i <= 5; $i++) {
    for ($c = $b; $c <= $i; $c++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>"; 

for ($b =0; $b<5; $b++){
    for ($c=5; $c> $b; $c--) {
        echo "&nbsp";
    }
    for ($i = 0; $i <= $b; $i++){
        echo "*";
    }
    echo "<br>";
}

?>