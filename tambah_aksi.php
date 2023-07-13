<?php
$nik = $_POST['nik'];
$nokk = $_POST['no_kk'];
$nama = $_POST ['nama'];
$kelamin = $_POST ['jenis_kelamin'];
$tempat = $_POST ['tempat'];
$tanggal = $_POST ['tanggal'];
$agama = $_POST ['agama'];

// koneksi
include 'config.php';
$db = new config();

$sql = "INSERT INTO penduduk(nik,no_kk,nama,jenis_kelamin,tempat_lahir,tanggal_lahir,agama) VALUES ('$nik','$nokk','$nama','$kelamin','$tempat','$tanggal','$agama')";
$query = $db->aksiQuery($sql);
if($query){
    header('Location:index.php');
}else{
    die("data gagal diubah");
}
?>