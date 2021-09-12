<?php 
    if(isset($_POST['hitung'])){
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $golongan = $_POST['golongan'];
        $jamKerja = $_POST['jamKerja'];
        $jamLembur = 0;
        $gajiLembur = 0;
        $totalPajak = 0;

        //jam lembur
        $jamLembur = $jamKerja-173;
        
        //jam lebur setiap jam nya
        for($i = 0; $i<=$jamLembur; $i++){
             $gajiLembur = $jamLembur*20000;
         }

        //golongan
        if($golongan == 1){
            $gajiPokok = 1500000;
            $tunjangan = 150000;
        }else if($golongan == 2){
            $gajiPokok = 2000000;
            $tunjangan = 200000;
        }else if($golongan == 3){
            $gajiPokok = 2500000;
            $tunjangan = 250000;
        }else if($golongan == 4){
            $gajiPokok = 3000000;
            $tunjangan = 300000;
        }else{
            echo "Gagal";
        }

        //pajak gaji pokok dan lembur
        $pajakGajiPokok = $gajiPokok * 0.05;
        $pajakGajiLembur = $gajiLembur * 0.05;

        //gaji kotor
        $gajiKotor = $gajiPokok + $tunjangan + $gajiLembur;
        
        //total Pajak
        $totalPajak = $pajakGajiLembur+$pajakGajiPokok;

        //total gaji
        $totalGaji = ($gajiPokok+$gajiLembur+$tunjangan) - ($pajakGajiLembur+$pajakGajiPokok);

        
        echo "<h2>Hitung Penggajian</h2> <br>";
        echo "<table width = 800 border =1>
        <tr>
        <td> Nama </td>
        <td> Jenis Kelamin </td>
        <td> Agama </td>
        <td> Golongan </td>
        <td> Gaji Pokok </td>
        <td> Tunjangan </td>
        </tr>
        <tr>
        <td> $nama </td>
        <td> $jk </td>
        <td> $agama </td>
        <td> $golongan </td>
        <td> $gajiPokok </td>
        <td> $tunjangan </td>
        </tr>
        </table>";
        echo "<table width = 800 border =1>
        <tr>
        <td> Gaji Lembur </td>
        <td> $gajiLembur </td>
        </tr>
        <tr>
        <td> Pajak Gaji Pokok </td>
        <td> $pajakGajiPokok </td>
        </tr>
        <tr>
        <td> Pajak Gaji Lembur </td>
        <td> $pajakGajiLembur </td>
        </tr>
        <tr>
        <td> Gaji Kotor </td>
        <td> $gajiKotor </td>
        </tr>
        <tr>
        <td> Total Pajak </td>
        <td> $totalPajak </td>
        </tr>
        <tr>
        <td> Gaji Yang Diterima </td>
        <td> $totalGaji </td>
        </tr>
        </table>";

    }
?>