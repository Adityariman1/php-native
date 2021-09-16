<?php
class orangTua
{
    protected $noAtm = "111-2222-3333-4444";
    private $pinAtm = "1234";

    public function noAtm()
    {
        return $this->noAtm;
    }
    public function pinAtm()
    {
        return $this->pinAtm;
    }
}

class anak extends orangTua
{
    public function noAtm()
    {
        return $this->noAtm;
    }
    public function pinAtm()
    {
        return $this->pinAtm;
    }
}

$orangtua = new orangTua();
$anak = new anak();

echo "No Kartu ATM : " . $orangtua->noAtm() . "<br>";
echo "Pin ATM : " . $orangtua->pinAtm() . "<hr>";

echo "No Kartu ATM : " . $anak->noAtm() . "<br>";
echo "Pin ATM : " . $anak->pinAtm();
