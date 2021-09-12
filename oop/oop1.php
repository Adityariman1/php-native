<?php
// mengdefinisikan sebuah class
class Kucing {
    // membuat property atau attributes
    public $warna = "Coklat";
    public $jumlahKaki = 4;
    public $jenisBulu = "panjang";
    public $makananFavorit = "ikan pindang";

    //membuat method (behavior /)

    public function bersuara() {
        return "Meong...meowng...meong";
    }
    public function berburu() {
        return "berburu ikan";
    }
}
//membuat object (inisiasi object)
$kucing1 = new Kucing();
echo "warna kucing : " . $kucing1->warna . "<br>";
echo "sifat kucing : " . $kucing1->bersuara() . "<br><hr>";

$kucing2 = new Kucing();
// set warna kucing
$kucing2->warna = "oren";
echo "warna kucing : " . $kucing2->warna . "<br>";
echo "sifat kucing : " . $kucing1->berburu() . "<br><hr>";


?>