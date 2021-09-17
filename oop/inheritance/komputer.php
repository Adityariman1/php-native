<?php

class komputer
{
    public $merk;
    public $processor;
    public $memori;

    public function beliKomputer()
    {
        return "Beli Komputer Baru";
    }
}

class laptop extends komputer
{
    public function lihatspec()
    {
        return "merk : $this->merk, processor : $this->processor, memori : $this->memori";
    }
}

$laptop = new laptop();
$laptop->merk = "Asus";
$laptop->processor = "Intel Core I7";
$laptop->memori = "4 GB";

echo $laptop->beliKomputer() . "<br>";
echo $laptop->lihatspec();
