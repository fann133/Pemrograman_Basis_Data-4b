<link rel="stylesheet" href="bootstrap.css">

<?php
$nik = $_GET['id'];

include 'config.php';
$db = new config();

$sql = "SELECT * FROM penduduk WHERE nik={$nik}";
$data = $db->ambilOne($sql); 
?>
<hr>
<form action="ubah_aksi.php?id=<?= $nik?>" name="from" method="POST">
<div class="form-group">
    Nama Lengkap :
    <input class="form-control" type="text" name="Nama" value=" <?=$data['nama']?>" placeholder=" isi nama"/>
</div>
<div class="form-group">
    tempat lahir :
    <input class="form-control" type="text" name="Tempat" value=" <?=$data['tempat_lahir']?>" placeholder="isi tempat lahir"/>
</div>
<div class="form-group">
    tanggal lahir :
    <input class="form-control" type="date" name="Tanggal" value=" <?=$data['tanggal_lahir']?>" placeholder=" isi nama"/>
</div>

<div class="form-group">
    <input class="btn btn-info btn-sm" type="submit" value="Simpan"/>
    
</div>

</form>