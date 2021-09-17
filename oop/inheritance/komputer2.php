<?php
class komputer
{
    public $merk = "acer";

    public function lihatspec()
    {
        return "Spec Komputer: Acer,
     Processor Intel core i7, Ram 4GB";
    }
}

class laptop extends komputer
{
    public $merk = "asus";
    public function lihatspec()
    {
        return "Spec Laptop: Asus,
     Processor Intel core i5, Ram 2GB";
    }

    public function lihatspeckomputer()
    {
        return parent::lihatspec();
    }
    public function lihatmerkkomputer()
    {
        return parent::$merk;
    }
}
$laptop = new laptop();
echo $laptop->lihatspec() . "<br>";
echo $laptop->lihatspeckomputer();
echo $laptop->lihatmerkkomputer();
