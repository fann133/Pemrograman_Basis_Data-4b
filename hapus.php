<?php
$nik = $_GET['id'];

include 'config.php';
$db = new config();

$sql = "DELETE FROM penduduk WHERE nik={$nik}";
$query = mysqli_query($koneksi, $sql);
if($query){
    header('Location:index.php');
}else{

    die("data gagal dihapus");
}


?>