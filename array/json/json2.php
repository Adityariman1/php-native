<?php
$dataJson = '{
    "nama":"Ujang",
    "domisili":"Bandung",
    "usia":23,
    "wni":true,
    "hobi":[
        "futsal","Main Game","Main Kelereng"
        ]
}';

$data = json_decode($dataJson);
echo "Nama : " . $data->nama . "<br>";
echo "Domisili : " . $data->domisili . "<br>";
echo "Usia : " . $data->usia . "<br>";
echo "Hobi : " . implode(" , ", $data->hobi);
?>