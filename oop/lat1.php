<?php
class Komputer {
    public $dataPemilik = "adit";
    public $merk = "philips";
    public $ukuranLayar= "100 cm";

    public function menyala() {
        return "Menyala";
    }
    public function dimatikan() {
        return "Dimatikan";
    }
}
$komputer1 = new Komputer();
echo "Data Pemilik : " . $komputer1->dataPemilik . "<br>";
echo "Merk Komputer : " . $komputer1->merk . "<br>";
echo "Keadaan Komputer : " . $komputer1->menyala() . "<br>";
echo "Ukuran Layar : " . $komputer1->ukuranLayar . "<br><hr>";

$komputer2 = new Komputer();
$komputer2->dataPemilik = "abdul";
$komputer2->merk = "acer";
$komputer2->ukuranLayar = "150 cm";
echo "Data Pemilik : " . $komputer2->dataPemilik . "<br>";
echo "Merk Komputer : " . $komputer2->merk . "<br>";
echo "Keadaan Komputer : " . $komputer2->dimatikan() . "<br>";
echo "Ukuran Layar : " . $komputer2->ukuranLayar . "<br><hr>";

$komputer3 = new Komputer();
$komputer3->dataPemilik = "alex";
$komputer3->merk = "apple";
$komputer3->ukuranLayar = "200 cm";
echo "Data Pemilik : " . $komputer3->dataPemilik . "<br>";
echo "Merk Komputer : " . $komputer3->merk . "<br>";
echo "Keadaan Komputer : " . $komputer3->dimatikan() . "<br>";
echo "Ukuran Layar : " . $komputer3->ukuranLayar . "<br><hr>";

$komputer4 = new Komputer();
$komputer4->dataPemilik = "christian";
$komputer4->merk = "huawei";
$komputer4->ukuranLayar = "220 cm";
echo "Data Pemilik : " . $komputer4->dataPemilik . "<br>";
echo "Merk Komputer : " . $komputer4->merk . "<br>";
echo "Keadaan Komputer : " . $komputer4->menyala() . "<br>";
echo "Ukuran Layar : " . $komputer4->ukuranLayar . "<br><hr>";

$komputer5 = new Komputer();
$komputer5->dataPemilik = "jojo";
$komputer5->merk = "ROG";
$komputer5->ukuranLayar = "300 cm";
echo "Data Pemilik : " . $komputer5->dataPemilik . "<br>";
echo "Merk Komputer : " . $komputer5->merk . "<br>";
echo "Keadaan Komputer : " . $komputer5->menyala() . "<br>";
echo "Ukuran Layar : " . $komputer5->ukuranLayar . "<br><hr>";


?>