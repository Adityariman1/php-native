<?php
$artikel = [
    [
        "judul" => "Belajar Php & Mysql untul Pemula",
        "penulis" => "Petani"
    ],
    [
        "judul" => "Belajar Php dari Nol hingga Mahir",
        "penulis" => "Petani"
    ],
    [
        "judul" => "Belajar Aplikasi Web dengan PHP",
        "penulis" => "Petani"
    ],
];

foreach ($artikel as $isi) {
    echo "<h3>" .$isi['judul']."</h3>";
    echo "<p>" . $isi['penulis']."</p>";
}
?>