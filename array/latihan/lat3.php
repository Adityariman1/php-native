<?php
    $data = [
        [
            "dosen" => "Aceng Fikri", 
            "submenu" => [
            [ "nama" => "Abdul",
            "MataKuliah" => [
            ["MataKuliah" => "MTK"],
            ["MataKuliah" => "IPA"],
            ["MataKuliah" => "IPS"]],

            "Hobi" => [
            ["Hobi" => "Bermain Game"],
            ["Hobi" => "Ngevlog"]]],

            [ "nama" =>
             "Asep",
            "MataKuliah" => [
            ["MataKuliah" => "B.Indonesia"],
            ["MataKuliah" => "B.Inggris"],
            ["MataKuliah" => "B.Sunda"]],
            
            "Hobi" => [
            ["Hobi" => "Traveling"],
            ["Hobi" => "Berolahraga"]]],

            [ "nama" => "Agus",
            "MataKuliah" => [
            ["MataKuliah" => "PKN"],
            ["MataKuliah" => "BK"],
            ["MataKuliah" => "Pkk"]],

            "Hobi" => [
            ["Hobi" => "Bermain Golf"],
            ["Hobi" => "Bermain Basket"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", 
        "submenu" => [
            [ "nama" => "alex",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Futsal"],
            ["Hobi" => "Bermain"]]],

            [ "nama" =>
             "christian",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "B indonesia"],
            ["MataKuliah" => "Sejarah Peradaban Islam"]],
            
            "Hobi" => [
            ["Hobi" => "Traveling"],
            ["Hobi" => "Berkuda"]]],

            [ "nama" => "charles",
            "MataKuliah" => [
            ["MataKuliah" => "Pendidikan Pancasila"],
            ["MataKuliah" => "Bingbingan Konseling"],
            ["MataKuliah" => "Pendidikan Kewarga Negaran"]],

            "Hobi" => [
            ["Hobi" => "Bermain Golf"],
            ["Hobi" => "Bermain Billiar"]]],
        ]
        ],
    ];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Mahasiswa</title>
        <style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 20px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
    </head>
    <body>
        <table border="3" width="100%">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Hobi</th>
        </tr>
        
        <?php $no=1 ; ?>
             <?php foreach($data as $key=> $menu) {
            foreach($menu['submenu'] as $val){
                ?><tr><td><?php 
                
                echo $no ++; ?></td>
                  <td><?php echo $val['nama'];?></td>
                  <td><?php echo $menu['dosen']?></td>
            
                  
            <?php
                 echo "<td>";
                  foreach($val['MataKuliah'] as $sub) {
                ?>   <li><?php echo  $sub['MataKuliah'] ;?></li>
                <?php
                }
                ?><?php
                 echo "<td>";
                foreach($val['Hobi'] as $hobi) {
                    echo "<li>". $hobi['Hobi']. "</li>";
                }
                echo "</td>";
            }
            }
            ?>
            </td>
            </tr>
        
        </table>
    </body>
    </html>