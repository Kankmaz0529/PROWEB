<?php
for($i=10; $i<10; $i--){ 
    echo $i." ";
}

for($i=1; $i<=7; $i++) {
    for($j=1; $j<=$i; $j++){
        echo $i." ";
    }
    echo "<br>";
}

$a = 8;
if($a<5){
    echo "Satu satu";
    $a++;
}
if ($a<10){
    echo "Aku sayang ibu"; 
    $a+=10;
}
if($a<20){
    echo "Dua dua"; 
    $a+=10;
}
if ($a<15){
    echo "Aku sayang ayah"; 
    $a+=10;
}
?>