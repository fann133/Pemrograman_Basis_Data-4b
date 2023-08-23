<?php

class config {
    public $connect;

    public function __construct() {
        $this->Koneksi_db();
    }

    private function Koneksi_db() {
        $server = "localhost";
        $user = "root";
        $password = "";
        $database = "kartu_keluarga";

        # Koneksi database
        $this->connect = new mysqli($server, $user, $password, $database);
        return $this->connect;
    }

    public function ambilAll($sql) {
        $hasil = $this->connect->query($sql)->fetch_all(MYSQLI_ASSOC);
        return $hasil;
    }

    public function ambilOne($sql) {
        $hasil = $this->connect->query($sql)->fetch_assoc();
        return $hasil;
    }

    public function aksiQuery($sql) {
        return $this->connect->query($sql);
    }
}
?>
