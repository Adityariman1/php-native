<?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $mobil = $_POST['mobil'];
        $jenis = $_POST['jenis'];
        $pinjam = $_POST['pinjam'];
        $plat = $_POST['plat'];
        $kembali = $_POST['kembali'];
        $supir = $_POST['supir'];
        $jamin = $_POST['jamin'];
        $merek = $_POST['merek'];
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
<form action="hal3.php" method="post">
<input type="hidden" name="nama" value=<?php echo "$nama";?>>
<input type="hidden" name="nik" value=<?php echo "$nik";?>>
<input type="hidden" name="jk" value=<?php echo "$jk";?>>
<input type="hidden" name="agama" value=<?php echo "$agama";?>>
<input type="hidden" name="mobil" value=<?php echo "$mobil";?>>
<input type="hidden" name="jenis" value=<?php echo "$jenis";?>>
<input type="hidden" name="pinjam" value=<?php echo "$pinjam";?>>
<input type="hidden" name="plat" value=<?php echo "$plat";?>>
<input type="hidden" name="kembali" value=<?php echo "$kembali";?>>
<input type="hidden" name="supir" value=<?php echo "$supir";?>>
<input type="hidden" name="jamin" value=<?php echo "$jamin";?>>
<input type="hidden" name="merek" value=<?php echo "$merek";?>>
<fieldset>
    <legend>Verifikasi Pengembalian</legend>
    <table>
    <tr>
            <td>Tanggal Peminjaman</td>
            <td> : </td>
            <td><input  type="date" name="tanggalpengembalian"></td>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
    </table>
</fieldset>
</form>
</body>
</html>