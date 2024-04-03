<?php
$physics= 98;
$chemistry= 85;
$biology= 85;
$maths= 69;
$computer= 98;

$total=null;
$pr=null;
$grd=null;


$total=$physics+$chemistry+$biology+$maths+$computer;
$pr=($total/500)*100;

if ($pr >= 90)
    $grd = "A";
else if ($pr >= 80 && $pr < 90)
    $grd = "B";
else if ($pr >= 70 && $pr < 80)
    $grd = "C";
else
    $grd = "d";

    echo" the total mark =" .$total;
    echo" the perctange  =" .$pr. "%/n";
    echo" the grade  =. $grd. /n";
?>