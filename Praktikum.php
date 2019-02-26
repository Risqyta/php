<?php
function luas_persegipanjang ($panjang , $lebar){
    return  $panjang * $lebar;
}

$p = 5;
$l = 7;
echo "Luas Persegi Panjang dengan panjang = $p  , dan lebar = $l <br>";
echo luas_persegipanjang($p , $l) ;


function keliling_persegipanjang ($panjang , $lebar){
    return  2 * ($panjang + $lebar);
}

$p = 5;
$l = 7;
echo "<br>Keliling Persegi Panjang dengan panjang = $p  , dan lebar = $l <br>";
echo keliling_persegipanjang($p , $l);
?>