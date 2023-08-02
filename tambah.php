<link rel="stylesheet" href="bootstrap.css">
    <title>Aplikasi Keluarga</title>
    <div class="container">
        <h2 class="text-success">Tambah Keluarga</h2>
        <div class="panel panel-success">
            <div class="panel-heading">Form Tambah Data</div>
            <div class="panel-body">
                <form class="form-horizontal" action="tambah_aksi.php" name="from" method="POST">
                    <div class="form-group">
                        <label class="control-label col-sm-2">NIK :</label>  
                        <div class="col-sm-4">
                            <input required class="form-control" type="number" name="nik" value="" placeholder="Masukkan NIK"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Nama Lengkap :</label>
                        <div class="col-sm-4">
                            <input required class="form-control" type="text" name="nama" value="" placeholder="Masukkan Nama Anda"/>
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-2">Tempat Lahir :</label>
                    <div class="col-sm-2">
                        <input required class="form-control" type="text" name="tempat_lahir" value="" placeholder="Masukkan Kota"/>
                    </div>
                    </div>

                <div class="form-group">
                <label class="control-label col-sm-2">Tanggal Lahir :</label>
                <div class="col-sm-2">
                    <input class="form-control" type="date" name="tanggal_lahir" value="" placeholder=""/>
                </div>
            </div>

                <div class="form-group">
                <label class="control-label col-sm-2">Jenis Kelamin :</label>
                <div class="col-sm-6">          
                <label class="radio-inline"><input value="Laki-Laki" name="jenis_kelamin" type="radio"> Laki-Laki</label>
                <label class="radio-inline"><input value="Perempuan" name="jenis_kelamin" type="radio"> Perempuan</label>
                </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2">Agama :</label>
                    <div class="col-sm-2">
                        <select required name="agama" class="form-control">
                            <option value="">---> Pilih Opsi <---</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">kristen</option>
                            <option value="katolik">katolik</option>
                            <option value="budha">budha</option>
                        </select>
                    </div>
                </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10"> 
                            <a href="index.php" class="btn btn-default">Kembali</a>
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>