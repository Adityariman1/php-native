<?php

    $uang = 200000; 
    $beliMinum = 15000;
    $beliSosis = 25000;
    echo "Uang ucup : <b>$uang</b> <hr>";

    echo "Jajan minum : <b> $beliMinum </b> <br>";
    $uang -= $beliMinum;
    echo "Sisa uang ucup : <b>$uang</b> <hr>";

    echo "Beli sosis bakar seharga :<b>$beliSosis</b> <br>";
    $uang -= $beliSosis;
    echo "Sisa uang ucup :<b>$uang</b> <hr>";

    
    $uangsedekah = 0.1;
    $uangsedekah *= $uang;

    echo "Sedekah ke musafir 10% dari <b>$uang</b> yaitu sebesar <b>$uangsedekah</b> <br>";
    $uang -= $uangsedekah;
    echo "Sisa uang ucup :<b>$uang</b> <hr>";

    
    $uangnemu = 0.5;
    $uangnemu *= $uang;

    echo "Nemu uang di jalan 50% dari sisa uang ucup <b>$uang</b> yaitu sebesar <b>$uangnemu</b> <br>
    Sisa uang ucup sekarang :<b>$uangnemu</b> + <b>$uang</b> <hr>";

    $uang += $uangnemu;
    echo "Total uang ucup sekarang adalah :<b>$uang</b>";
  
?>