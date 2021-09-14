<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Aritmatika</legend>
            <table>
                <tr>
                    <td>Bilangan 1 </td>
                    <td>:</td>
                    <td><input type="number" name="bilangan1"></td>
                </tr>
                <tr>
                    <td>Bilangan 2 </td>
                    <td>:</td>
                    <td><input type="number" name="bilangan2"></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><input type="submit" name="proses" value="Proses"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>

<?php 
if (isset($_POST['proses'])) {
    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];
   }
class Aritmatika{
    public $bilangan1;
    public $bilangan2;
    public function __construct($x,$y){
        $this-> bilangan1 = $x;
        $this-> bilangan2 = $y;
    }
    public function tambah()
    {  
            return ($this->bilangan1 + $this->bilangan2 );
    }
    public function kurang()
    {  
            return ($this->bilangan1 - $this->bilangan2 );
    }
    public function kali()
    {  
            return ($this->bilangan1 * $this->bilangan2 );
    }
    public function bagi()
    {  
            return ($this->bilangan1 / $this->bilangan2 );
    }
    public function modulus()
    {  
            return ($this->bilangan1 % $this->bilangan2 );
    }
}
$aritmatika1 = new aritmatika($bilangan1,$bilangan2);
echo "Bilangan 1 : " . $aritmatika1->bilangan1 . "<br>";
echo "Bilangan 2 : " . $aritmatika1->bilangan2 . "<br>";
echo "Penjumlahan : " . $aritmatika1->tambah()  . "<br>";
echo "Pengurangan : " . $aritmatika1->kurang()  . "<br>";
echo "Perkalian : " . $aritmatika1->kali()  . "<br>";
echo "Pembagian : " . $aritmatika1->bagi()  . "<br>";
echo "Modulus : " . $aritmatika1->modulus()  . "<br>";

?>