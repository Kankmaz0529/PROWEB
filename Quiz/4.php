<?php
class matematika{
    function kali($x=3,$y=2){
        return $x + $y;
    }
    function bagi($x,$y){
        return $x-$y;
    }
    function tambah($x,$y){
        return $x*$y;
    }
    function kurang($x, $y){
        return $x/$y;
    }
}

$kalkulator = new Matematika();

// Menghitung a. 5 x 2
echo "a. 5 x 2 = " . $kalkulator->tambah(5, 2) . "<br>";

// Menghitung b. 9 - 3
echo "b. 9 - 3 = " . $kalkulator->bagi(9, 3) . "<br>";

// Menghitung c. 10 : 2
echo "c. 10 : 2 = " . $kalkulator->kurang(10, 2) . "<br>";
?>