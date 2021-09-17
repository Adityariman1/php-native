<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=

    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <table>
            <form action="" method="post">
            <tr>
                <td>Jenis Mahkluk</td>
                <td> : </td>
                <td><select name="hamba" id="">
                    <option value="Manusia">Manusia</option>
                    <option value="Malaikat">Malaikat</option>
                    <option value="Jin">Jin</option>
                    <option value="Setan">Setan</option>
                </select></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan" name="simpan"></td>
            </tr>
            </form>
        </table>
    </fieldset>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $hamba = $_POST['hamba'];
    class mahkluk
    {
        public $hamba;

        public function __construct($a)
        {
            $this->hamba = $a;
        }
    }
    class manusia extends mahkluk
    {
        public function tugas()
        {

        }
    }
    class malaikat extends manusia
    {
        public function tugas()
        {

        }
    }
    class setan extends malaikat
    {
        public function tugas()
        {

        }
    }
    class jin extends setan
    {
        public function tugas()
        {

        }
    }

}

?>
