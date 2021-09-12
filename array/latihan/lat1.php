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
        <legend>Program Masuk Sekolah Favorit</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Masukan Jumlah Data</th>
                    <td><input type="number" name="jumlah"></td>
                </tr>
                <tr>
                    <th>
                    </th>
                    <td><button type="submit" name="save">Simpan</button></td>
                    <td><button type="reset">Reset</button></td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php
    if(isset($_POST['save'])) 
    {
    $row = $_POST['jumlah'];
    ?>
    <fieldset>
        <legend>Input Data Siswa</legend>
        <table>
            <form action="proses1.php" method="post">
            <?php
            for($i=1;$i <= $row ; $i++) 
            {
            ?> 
            <tr>
                <th colspan=2></th>
                <th>Nama</th>
                <td><input type="text" name="nama[]" required></td>
            </tr>
            <tr>
                <th colspan=2></th>
                <th>Asal Sekolah</th>
                <td><input type="text" name="sekolah[]" required></td>
            </tr>
            <tr>
                <th colspan=2></th>
                <th>Nilai Bahasa Indonesia</th>
                <td><input type="number" name="bi[]" min="1" max="100"required></td>
            </tr>
            <tr>
                <th colspan=2></th>
                <th>Nilai Matematika</th>
                <td><input type="number" name="mtk[]"min="1" max="100" required></td>
            </tr>
            <tr>
                <th colspan=2></th>
                <th>Nilai Bahasa Inggris</th>
                <td><input type="number" name="inggris[]" min="1" max="100" required></td>
            </tr>
            <tr>
                <th colspan=2></th>
                <th>Nilai IPA</th>
                <td><input type="number" name="ipa[]"  min="1" max="100" required></td>
            </tr>
            <tr>
                <th colspan=5><hr></th>
            </tr>
               <?php
            }
            ?>
            <tr>
                <th>
                </th>
                <td><button type="submit" name="simpan">Simpan</button></td>
            </tr>
            </form>
        </table>
    </fieldset>
    <?php
    }
    ?>
</body>
</html>