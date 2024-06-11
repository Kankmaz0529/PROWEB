<?php
class mtk {
    private $pi = 3.14;

    function lpVBalok($p, $l, $t){
        $lp = 2 * (($p * $l) + ($p * $t) + ($l * $t));
        $vb = $p * $l * $t;
        return 'Luas Permukaan Balok = ' . $lp . ' & Volume Balok = ' . $vb;
    }

    function lpVBola($r){
        $lp = 4 * $this->pi * ($r * $r);
        $vb = (4/3) * $this->pi * ($r * $r * $r);
        return 'Luas Permukaan Bola = ' . $lp . ' & Volume Bola = ' . $vb;
    }

    function konversi($angka){
        if($angka > 3.7 && $angka <= 4.0){
                $hasil = 'A';
            } else if ($angka > 3.3 && $angka <= 3.7){
                $hasil = 'A-';
            } else if ($angka > 3.0 && $angka <= 3.3){
                $hasil = 'B+';
            } else if ($angka > 2.7 && $angka <= 3.0){
                $hasil = 'B';
            } else if ($angka > 2.3 && $angka <= 2.7){
                $hasil = 'B-';
            } else if ($angka > 2.0 && $angka <= 2.3){
                $hasil = 'C+';
            } else if ($angka > 1.0 && $angka <= 2.0){
                $hasil = 'C';
            } else if ($angka > 0.0 && $angka <= 1.0){
                $hasil = 'D';
            } else if ($angka = 0.0){
                $hasil = 'E';
            } else {
                $hasil = 'Nilai angka tidak valid';
            }
        return 'Konversi Huruf = ' . $hasil;
    }
}
?>