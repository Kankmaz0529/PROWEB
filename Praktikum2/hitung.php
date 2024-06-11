<?php
include 'classMatematika.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $math = new mtk();
    $balok = $math->lpVBalok($_POST['panjang'], $_POST['lebar'], $_POST['tinggi']);
    $bola = $math->lpVBola($_POST['jarijari']);
    $konversi = $math->konversi($_POST['angka']);

    echo $balok . "<br><br>" . $bola . "<br><br>" . $konversi;
} else {

}
?>