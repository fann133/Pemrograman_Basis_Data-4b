<?php
    $nik = $_GET['id'];

    include 'config.php';
    $db = new config();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Proses form disubmit, simpan data ke database
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];

        // Lakukan query untuk menyimpan data ke database
        $sql = "UPDATE penduduk SET nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama' WHERE nik='$nik'";
        $query = $db->aksiQuery($sql);

        // Redirect ke halaman index.php setelah berhasil menyimpan data
        header("Location: index.php");
        exit();
    } else {
        // Tampilkan data dari database pada form saat halaman di-load
        $sql = "SELECT * FROM penduduk WHERE nik={$nik}";
        $data = $db->ambilOne($sql);
    }
    ?>

    