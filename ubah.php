<title>Ubah Keluarga</title>
    <link rel="stylesheet" href="bootstrap.css">

<?php
$nik = $_GET['id'];

include 'config.php';
$db = new config();

$sql = "SELECT * FROM penduduk WHERE nik={$nik}";
$data = $db->ambilOne($sql); 
?>
<div class="container">
        <h2 class="text-warning">Ubah Keluarga</h2>
        <div class="panel panel-warning">
            <div class="panel-heading">Form Ubah Data</div>
            <div class="panel-body">
                <form class="form-horizontal" action="ubah_aksi.php?id=<?= $nik?>" name="form" method="POST">
                    <div class="form-group">
                        <label class="control-label col-sm-2">NIK :</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="number" name="nik" value="<?= $data['nik'] ?>" placeholder="Masukkan NIK" readonly />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-sm-2">Nama Lengkap :</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="nama" value="<?= $data['nama'] ?>" placeholder="Masukkan Nama Lengkap"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-sm-2">Tempat Lahir :</label>
                        <div class="col-sm-2">
                            <input class="form-control" type="text" name="tempat_lahir" value="<?= $data['tempat_lahir'] ?>" placeholder="Isi nama"/>
                        </div> 
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-sm-2">Tanggal Lahir :</label>
                        <div class="col-sm-2">
                            <input class="form-control" type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>"/>
                        </div> 
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-sm-2">Jenis Kelamin :</label>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($data['jenis_kelamin'] === 'Laki-laki') ? 'checked' : '' ?>>
                                Laki-laki
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($data['jenis_kelamin'] === 'Perempuan') ? 'checked' : '' ?>>
                                Perempuan
                            </label>
                        </div> 
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Agama :</label>
                        <div class="col-sm-2">
                            <select required class="form-control" name="agama">
                                <option value="">---> Pilih Opsi <---</option>
                                <option value="Islam" <?php echo ($data['agama'] === 'Islam') ? 'selected' : '' ?>>Islam</option>
                                <option value="Kristen" <?php echo ($data['agama'] === 'Kristen') ? 'selected' : '' ?>>Kristen</option>
                                <option value="Katolik" <?php echo ($data['agama'] === 'Katolik') ? 'selected' : '' ?>>Katolik</option>
                                <option value="Hindu" <?php echo ($data['agama'] === 'Hindu') ? 'selected' : '' ?>>Hindu</option>
                                <option value="Budha" <?php echo ($data['agama'] === 'Budha') ? 'selected' : '' ?>>Budha</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10"> 
                            <a href="index.php" class="btn btn-default">Kembali</a>
                            <button class="btn btn-warning" type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


