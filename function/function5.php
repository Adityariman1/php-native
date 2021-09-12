<?php
//membuat fungsi
function hitungMundur($thnLahir, $thnSekarang) {
    $umur = $thnSekarang - $thnLahir;
    return $umur;
}

function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, my name is " . $nama . "<br>";
    //Memangggil fungsi lain 
    echo "Saya berusia " . hitungMundur(2004, 2021) . " Tahun <br>";
    echo "Senang berkenalan dengan Anda<br>";
}
    echo perkenalan("Adit");
?>