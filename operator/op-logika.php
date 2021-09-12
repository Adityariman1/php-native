<?php

    $a = 1;
    $b = 9;
    $c = 10;
    $d = 11;
    $tono = 10000;
    $lini = 8000;
    $toni = 15000;
    $username = "aditya";
    $pass = 1234;

    echo "<hr>";
    echo "$a < $c = ". ($a < $c);
    echo "<br>($b > $c) &&  ($c > $b) :"
        . (($b > $c) && ($c > $b));

    echo "<br>($c > $d) || ($b < $c ) :"
        . (($c > $d) || ($b <  $c) );
    echo "<hr>";

    echo "apakah uang toni lebih besar dari tono dan lini : "
        . (($toni > $tono) && ($toni > $lini));
    echo "<br>uang toni lebih besar dari lini dan tidak lebih besar dari tono :"
        . (($toni > $lini) && ($toni < $tono));
        echo "<hr>";

    echo "Username : $username";
    echo "<br>Password : $pass";
    echo "<br>login : " 
        . (($username && $pass) && ($username && $pass));
        echo "<hr>";

?>  