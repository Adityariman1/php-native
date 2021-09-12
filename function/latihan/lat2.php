<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Penghitungan Bangun Ruang Lingkaran</legend>
        <form action="" method="POST">
            Masukan Jari - Jari : <input type="number" name="jari">
            <br><input type="submit" name="input" value="Simpan">
        </form>
    </fieldset>
</body>
</html>

 
<?php
if(isset($_POST['input'])) {
$a = $_POST['jari'];

function luasLingkaran($jari, $phi=3.14 ) {
    $luas = $jari * $jari * $phi;
    return $luas;
}
function kelLingkaran($jari, $phi=3.14 ) {
    $kel = 2 * ($jari * $phi);
    return $kel;
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Hasil</legend>
        <table>
            <tr>
                <td>jari jari </td>
                <td>:</td>
                <td><?php echo $a; ?> <br></td>
            </tr>
            <tr>
                <td>Luas Lingkaran </td>
                <td>:</td>
                <td><?php echo luasLingkaran($a)?><br</td>
            </tr>
            <tr>
                <td>Keliling Lingkaran </td>
                <td>:</td>
                <td><?php echo kelLingkaran($a)?></td>
            </tr>
        </table>
    </fieldset>
</body>
</html>
    
    
    

