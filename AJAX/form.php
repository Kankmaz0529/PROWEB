<?php
require_once 'config.php';
$db = new Database();
?>
<html>
<!DOCTYPE html>
<head>
    <title>AJAX</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js"></script>
</head>
<body>
    <form name="addForm" method="post" action="proses.php">
        <select class="select2" style="width: 20%" name="propinsi_id" id="propinsi_id">
            <option selected>Pilih</option>
            <?php
                $data = $db->loadData("SELECT * FROM propinsi ORDER BY nama");
                foreach($data as $dat){
                    echo "<option value='" . $dat['id'] . "'>" . $dat['nama'] . "</option>";
                }
            ?>
        </select>
        <select class="select2" style="width: 20%" name="kabupaten_id" id="kabupaten_id"></select>
        <select class="select2" style="width: 20%" name="kecamatan_id" id="kecamatan_id"></select>
        <select class="select2" style="width: 20%" name="desa_id" id="desa_id"></select>
    </form>
</body>
</html>

<script type="text/javascript">
$(document).ready(function() {
    $('.select2').select2();
    $('#propinsi_id').change(function() {
        var prop = $('#propinsi_id').val();
        $.ajax({
            type: "POST",
            url: "proc.php",
            data: 'jenis=kab&prop=' + prop,
            success: function(res) {
                $('#kabupaten_id').html(res);
            }
        });
    });

    $('#kabupaten_id').change(function() {
        var kab = $('#kabupaten_id').val();
        $.ajax({
            type: "POST",
            url: "proc.php",
            data: 'jenis=kec&kab=' + kab,
            success: function(res) {
                $('#kecamatan_id').html(res);
            }
        });
    });

    $('#kecamatan_id').change(function() {
        var kec = $('#kecamatan_id').val();
        $.ajax({
            type: "POST",
            url: "proc.php",
            data: 'jenis=desa&kec=' + kec,
            success: function(res) {
                $('#desa_id').html(res);
            }
        });
    });
});
</script>