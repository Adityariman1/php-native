<?php

    $akademi = 85;
    $atletik = 80;
    $rumus = ($akademi >= 85 && $atletik >=83) ? "lulus" : "tidak lulus";

    echo "<br>Nilai Akademik : <b> $akademi </b>";
    echo "<br>Nilai Atletik : <b> $atletik </b>";
    echo "<br>Keterangan : <b> $rumus </b>";
?>