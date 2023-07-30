<link rel="stylesheet" href="bootstrap.css">
<title>Aplikasi Keluarga</title>

<div class="container-fluid">
  <h1 class="text-primary">SELAMAT DATANG <small>[Aplikasi Kartu Keluarga]</small></h1>
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-info">
        <div class="panel-heading text-center">
          <strong>PROVINSI PAPUA BARAT DAYA <br>KABUPATEN SORONG</strong>
        </div>
        <div class="panel-body">
          <table>
            <tr>
              <td width="58%">NIK</td>
              <td width="5%">:</td>
              <td><strong>9201070311030001</strong></td>
            </tr>
            <tr>
              <td>Nama Lengkap</td>
              <td>:</td>
              <td>Muhamat Irfan Rifai</td>
            </tr>
            <tr>
              <td>Tempat/Tanggal lahir</td>
              <td>:</td>
              <td>Sorong, 29 November 2003</td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td>:</td>
              <td>Laki-laki</td>
            </tr>
            <tr>
              <td>Agama</td>
              <td>:</td>
              <td>Islam</td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td>Jl. Perkutut Aimas Unit 2</td>
            </tr>
            <tr>
              <td>Status Perkawinan</td>
              <td>:</td>
              <td>belum menikah</td>
            </tr>
            <tr>
              <td>Pekerjaan</td>
              <td>:</td>
              <td>Pelajar</td>
            </tr>
            <tr>
              <td>Berlaku Hingga</td>
              <td>:</td>
              <td>Seumur Hidup</td>
            </tr>
            <tr>
              <td>Foto</td>
              <td>:</td>
              <td><img src="img/img1.png" alt="muhamat irfan rifai" width="120px" class="img-responsive img-rounded"></td>
            </tr>
          </table>
        </div>
        <div class="panel-footer text-center"><strong>Kartu Tanda Penduduk</strong></div>
      </div>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="panel panel-primary">
      <div class="panel-heading text-center"><strong>Data Keluarga</strong></div>
      <div class="panel-body">
        <a class="btn btn-success" href="tambah.php">Tambah Data</a>
        <br><br>
        <table class="table table-striped table-bordered tabel-hover">
        <tr>
        <th width="5%" class="text-center">No</th>
        <th class="text-center">NIK</th>
        <th class="text-center">NAMA LENGKAP</th>
        <th class="text-center">JENIS KELAMIN</th>
        <th class="text-center">TEMPAT TANGGAL LAHIR</th>
        <th class="text-center">Agama</th>
        <th class="text-center">Aksi</th>
    </tr>
    <tr>
    </tr>
    <?php
    include 'config.php';
    $db = new config();
    $hasil = $db->ambilAll("SELECT * FROM penduduk");
        $no=1;
        foreach ($hasil as $data){
        echo "<tr>";
        echo '<td class="text-center">'.$no.'</td>';
        echo '<td class="text-center text-primary">'.$data['nik'].'</td>';
        echo '<td class="text-center"><strong>'.$data['nama'].'</strong></td>';
        echo '<td class="text-center">'.$data['jenis_kelamin'].'</td>';
        echo '<td class="text-center">' . $data['tempat_lahir'] . ', ' . $data['tanggal_lahir'] . '</td>';
        echo '<td class="text-center">'.$data['agama'].'</td>';
        echo '<td class="text-center">

        <a  class="btn btn-warning btn-sm"  href="ubah.php?id='.$data['nik'].'">ubah</a>
        <a onclick="return confirm(`yakin hapus ?`)" class="btn btn-danger btn-xs"  href="hapus.php?id='.$data['nik'].'">hapus</a>
        
        </td>';
        echo "</tr>";
        $no = $no + 1;
    }
    ?>
    <tr>
        <th colspan="4" class= "text-center">Total Data</th>
        <th colspan="3" class="text-center" >
            <span class="text-black"><?php echo count($hasil) ?>
        </th>
    </tr>
</table>
      </div>
    </div>
  </div>
</div>

