<?php
$nik = $_GET['id'];
$nama = $_POST ['Nama'];
$tempat = $_POST ['Tempat'];
$tanggal = $_POST ['Tanggal'];

include 'config.php';
$db = new config();

$sql = "UPDATE penduduk  SET nama='$nama',tempat_lahir='$tempat',tanggal_lahir='$tanggal' WHERE nik={$nik}";
$query = $db->aksiQuery($sql);
if($query){
    header('Location:index.php');
}else{

    die("data gagal diubah");
}


?>