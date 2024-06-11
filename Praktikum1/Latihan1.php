<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kalkulator Sederhana</title>
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
    <h2>Kalkulator Sederhana</h2>
    <form method="post" action="">
        <input type="number" name="angka1" placeholder="Masukkan angka pertama" required><br>
        <input type="number" name="angka2" placeholder="Masukkan angka kedua" required><br>
        <h4 style="text-align: center">Hasil</h4>
        <input type="text" name="hasil" placeholder="Hasil" readonly><br>
        <h4 style="text-align: center">Operator</h4>
        <input type="submit" name="operator" value="+">
        <input type="submit" name="operator" value="-">
        <input type="submit" name="operator" value="x">
        <input type="submit" name="operator" value="/">
        <input type="submit" name="operator" value="Mod">
    </form>
    <?php
    if(isset($_POST['operator'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case 'x':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if ($angka2 == 0) {
                    $hasil = "Tidak bisa dibagi dengan nol";
                } else {
                    $hasil = $angka1 / $angka2;
                }
                break;
            case 'Mod':
                // $mod = intval($angka1 / $angka2);
                // $sisa = $angka1 % $angka2;
                // $hasil = $mod . " sisa " . $sisa;
                $hasil = $angka1 % $angka2;
                break;
            default:
                $hasil = "Operasi tidak valid";
                break;
        }

        echo "<script>document.getElementsByName('hasil')[0].value='$hasil';</script>";
    }
    ?>
</div>
</body>
</html>