<?php
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST ['tempat_lahir'];
$tanggal_lahir = $_POST ['tanggal_lahir'];
$jenis_kelamin = $_POST ['jenis_kelamin'];
$agama = $_POST ['agama'];

// koneksi
include 'config.php';
$db = new config();

$sql = "INSERT INTO penduduk(nik,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama) VALUES ('$nik','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama')";
$query = $db->aksiQuery($sql);
if($query){
    header('Location:index.php');
}else{
    die("data gagal diubah");
}
?>