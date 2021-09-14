<?php
class Kucing 
{
    public $warna;

    public function __construct($warna)
    {
        $this->warna = $warna;
    }
    public function bersuara() 
    {
        return "meowng.....meowng....meowng...";
    }
    public function berburu()
    {
        return "berburu ikan";
    }
}

$kucing1 = new Kucing("Hitam");
echo "Warna Kucing 1 : " . $kucing1->warna . "<br>";

$kucing2 = new Kucing("oren");
echo "Warna Kucing 2 : " . $kucing2->warna . "<br>";

?>