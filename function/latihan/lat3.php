<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <form action="" method="post">
    <fieldset>
        <legend>Biodata</legend>
        <table>
        <tr>
            <td>Nama </td>
            <td> : </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td> : </td>
            <td><input  type="radio"  name="jk" value="laki-laki" >
            laki-laki
            <input type="radio" name="jk" value="perempuan"> 
            Perempuan</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td> : </td>
            <td><input type="date" name="lahir"></td>
        </tr>
        <tr>
        <td>Agama</td>
            <td> : </td>
            <td><select  name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
            </select></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : </td>
            <td><textarea name="alamat" cols="40" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td> : </td>
            <td>
            <input type="checkbox" name="hobi[]" value="Mancing" checked> mancing<br>
            <input type="checkbox" name="hobi[]" value="Main Game"> Main Game<br>
            <input type="checkbox" name="hobi[]" value="Main Basket"> Main Basket<br>
            <input type="checkbox" name="hobi[]" value="Main Bola">Main Bola<br>
            <input type="checkbox" name="hobi[]" value="Main Golf">Main Golf<br>
            <input type="checkbox" name="hobi[]" value="Main Billiar">Main Billiar<br>
            </td>
        </tr>
        <tr>
            <td>
            <input type="submit" name="submit" value="submit">
            </td>
        </tr>
        </table>
    </fieldset>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $hobi = $_POST['hobi'];
    function biodata($nama, $jk, $lahir, $agama, $alamat, $hobi) {
        echo "Nama : " . $nama . "<br>";
        echo "Jenis Kelamin : " . $jk . "<br>";
        echo "Tanggal Lahir : " . $lahir . "<br>";
        echo "Agama : " . $agama . "<br>";
        echo "Alamat : " . $alamat . "<br>";
        echo "Hobi : "; 
        foreach ($hobi as $key ) {
            echo $key;
            echo ", ";
        }
    }
    echo biodata($_POST['nama'], $_POST['jk'], $_POST['lahir'], $_POST['agama'],$_POST['alamat'], $hobi);
}

?>