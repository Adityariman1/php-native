<?php
if(isset($_POST['simpan']))
{
$nama = $_POST['nama'];
$sekolah = $_POST['sekolah'];
$bi = $_POST['bi'];
$mtk = $_POST['mtk'];
$inggris = $_POST['inggris'];
$ipa = $_POST['ipa'];
$total = 0;
$keterangan ="";
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
        <legend>Data Siswa</legend>
        <table border=1>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Asal Sekolah</th>
                <th>Nilai Bahasa Indonesia</th>
                <th>Nilai Matematika</th>
                <th>Nilai Bahasa Inggris</th>
                <th>Nilai IPA</th>
                <th>Jumlah Nilai</th>
                <th>Keterangan</th>
            </tr>
            
            <?php
            $no=1;
            
            for($i = 0 ; $i < count($nama); $i++){?>
            
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $nama[$i]; ?></td>
                <td><?php echo $sekolah[$i]; ?></td>
                <td><?php echo $bi[$i]; ?></td>
                <td><?php echo $mtk[$i]; ?></td>
                <td><?php echo $inggris[$i]; ?></td>
                <td><?php echo $ipa[$i]; ?></td>
                <?php $total = $bi[$i] + $mtk[$i] + $inggris[$i] + $ipa[$i];?>
                <td><?php echo $total; ?></td>
                <?php
                if($total > 340) {
                    $keterangan = "Diterima";
                } else {
                    $keterangan = "Tidak Diterima";
                }
                ?>
                <td><?php echo $keterangan;?></td>
            </tr>
            <?php } ?>

        </table>
    </fieldset>
    
</body>
</html>
