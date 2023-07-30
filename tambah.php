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
                    <label class="control-label col-sm-2">Nama Lengkap:</label>
                    <div class="col-sm-4">
                        <input required class="form-control" type="text" name="no_kk" value="" placeholder="Masukkan Nama Lengkap"/>
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-sm-2">Tempat Lahir :</label>
                <div class="col-sm-4">
                    <input required class="form-control" type="text" name="nama" value="" placeholder="Tempat Lahir"/>
                </div>
                </div>

            <div class="form-group">
            <label class="control-label col-sm-2">Tanggal Lahir :</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="jenis_kelamin" value="" placeholder="Jenis Kelamin"/>
            </div>
        </div>

            <div class="form-group">
            <label class="control-label col-sm-2">Jenis Kelamin :</label>
            <div class="col-sm-6">          
            <label class="radio-inline"><input value="Laki-Laki" name="jenis" type="radio"> Laki-Laki</label>
            <label class="radio-inline"><input value="Perempuan" name="jenis" type="radio"> Perempuan</label>
            </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Agama :</label>
                <div class="col-sm-2">
        <select required name="" id=""></select>
        </div>


            <div class="form-group">
                <input class="btn btn-info btn-sm" type="submit" value="Simpan"/>
                
            </div>

            </form>
                    </div>
                </div>
            </div>


