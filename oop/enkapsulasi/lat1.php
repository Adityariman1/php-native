<?php
class emailPresiden
{
    protected $email = "presiden";
    private $password = "1234";
    public $nama = "Joko Widodo";

    public function login()
    {
        $a = $this->email;
        $b = $this->password;
        if ($a == "presiden" && $b == "1234") {
            $c = "Login Berhasil";
        }
        return $c;
    }

    public function info()
    {
        $a = $this->email;
        $b = $this->password;
        $d = $this->nama;
        $c = " Pemilik : " . $d . "<br>" . " email :" . $a;
        return $c;
    }
}
$presiden = new emailpresiden();

echo $presiden->info() . "<br>";
echo "login : " . $presiden->login();
