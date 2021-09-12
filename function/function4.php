<?php
//Optimal parameter / default parameter
function pertambahan($bil1  , $bil2 = 2)
{
    return $bil1 + $bil2;
}

echo "<li>" . pertambahan(10,10) . "</li>";
echo "<li>" . pertambahan(10) . "</li>";
echo "<li>" . pertambahan(8) . "</li>";

?>