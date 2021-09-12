<?php
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

// menambahkan isi pada indeks ke - 1
$hobi[1] .= "Coding";

// menghapus isi array
unset($hobi[1]);

// menambahkan isi pada indeks terakhir
$hobi[] = "olahraga";

foreach ($hobi as $suka) {
    echo $suka."<br>";
}
?>