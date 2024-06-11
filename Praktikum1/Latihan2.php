<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Konversi Nilai</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        width: 300px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    input[type="text"], input[type="number"], input[type="submit"] {
        width: 100%;
        margin: 5px 0;
        padding: 10px;
        box-sizing: border-box;
    }
    input[type="text"][readonly] {
        background-color: #f2f2f2;
        cursor: not-allowed;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Konversi Nilai</h2>
    <form method="post" action="">
        <input type="number" name="angka" placeholder="Masukkan angka" required><br>
        <h4 style="text-align: center">Nilai Huruf</h4>
        <input type="text" name="hasil" placeholder="Nilai Huruf" readonly><br>
        <input type="submit" name="konversi" value="Konversi">
    </form>
    <?php
        if(isset($_POST['konversi'])){
            $angka = $_POST['angka'];
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
            echo "<script>document.getElementsByName('hasil')[0].value='$hasil';</script>";
        }
    ?>
</div>
</body>
</html>