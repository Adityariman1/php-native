<?php
class laptop
{
    public $pemilik;

    protected function hidupkanLaptop()
    {
        return "Hidupkan Laptop";
    }

    public function paksaHidupkan()
    {
        return $this->hidupkanLaptop();
    }
}

$laptopAnto = new laptop();
$laptopAnto->pemilik = "Anto ";

echo $laptopAnto->pemilik;
echo $laptopAnto->paksaHidupkan();
