<?php
class Segitiga {
    public $setengah = 0.5;
    public $alas = 10.0;
    public $tinggi = 15.0;
    public $sisi1 = 10;
    public $sisi2 = 15;
    public $sisi3 = 10;
    public function luas() {
        $luasSegitiga = $this->setengah * $this->alas * $this->tinggi;
        return $luasSegitiga;
    }
    public function keliling() {
        $kelilingSegitiga = $this->sisi1 + $this->sisi2 + $this->sisi3;
        return $kelilingSegitiga;
    }
}
$segitiga1 = new Segitiga();
echo "Alas Segitiga : " . $segitiga1->alas . "<br>";
echo "Tinggi Segitiga : " . $segitiga1->tinggi . "<br>";
echo "Sisi 1 : " . $segitiga1->sisi1 . "<br>";
echo "Sisi 2 : " . $segitiga1->sisi2 . "<br>";
echo "Sisi 3 : " . $segitiga1->sisi3 . "<br>";
echo "Luas Segitiga : " . $segitiga1->luas() . "<br>";
echo "Keliling Segitiga : " . $segitiga1->keliling() . "<br>";
?>