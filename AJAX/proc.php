<?php
require_once 'config.php';
$db = new Database();

if (isset($_POST['jenis'])){
    $jenis = $_POST['jenis'];
    
    if($jenis == 'kab'){
        $prop = $_POST['prop'];
        $data = $db->loadData("SELECT * FROM kabupaten WHERE propinsi_id='$prop' ORDER BY nama");
        echo "<option value=''>Pilih Kota/Kab</option>";
        foreach ($data as $dat){
            echo "<option value='" . $dat['id'] . "'>" . $dat['nama'] . "</option>";
        }
    }

    if($jenis == 'kec'){
        $kab = $_POST['kab'];
        $data = $db->loadData("SELECT * FROM kecamatan WHERE kabupaten_id='$kab' ORDER BY nama");
        echo "<option value=''>Pilih Kecamatan</option>";
        foreach($data as $dat) {
            echo "<option value='" . $dat['id'] . "'>" . $dat['nama'] . "</option>";
        }
    }

    if($jenis == 'desa'){
        $kec = $_POST['kec'];
        $data = $db->loadData("SELECT * FROM desa WHERE kecamatan_id='$kec' ORDER BY nama");
        echo "<option value=''>Pilih Desa</option>";
        foreach($data as $dat){
            echo "<option value='" . $dat['id'] . "'>" . $dat['nama'] . "</option>";
        }
    }
}
?>