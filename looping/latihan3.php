<?php
$books= [
    18,45,29,61,47,34,
];
foreach ($books as $buku) {
$sisaBagi = $buku % 3;
echo "$buku % 3 = $sisaBagi<br>";
}

?>