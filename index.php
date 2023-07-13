<link rel="stylesheet" href="bootstrap.css">

<h1 class="text-primary">Database Kartu Keluarga</h1>

<a class="btn btn-primary" href="tambah.php">+</a>


<table border="1" width="100%" class="table table-striped table-bordered table-hover ">
    <tr>
        <th class="text-center">No</th>
        <th class="text-center">Nama</th>
        <th class="text-center">Nik</th>
        <th class="text-center">Jenis Kelamin</th>
        <th class="text-center">Agama</th>
        <th class="text-center">Tempat Lahir</th>
        <th class="text-center">Tanggal Lahir</th>
        <th class="text-center">Golongan Darah</th>
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
        echo '<td class="text-center">'.$data['nama'].'</td>';
        echo '<td class="text-center">'.$data['nik'].'</td>';
        echo '<td class="text-center">'.$data['jenis_kelamin'].'</td>';
        echo '<td class="text-center">'.$data['agama'].'</td>';
        echo '<td class="text-center">'.$data['tempat_lahir'].'</td>';
        echo '<td class="text-center">'.$data['tanggal_lahir'].'</td>';
        echo '<td class="text-center">'.$data['golongan_darah'].'</td>';
        echo '<td class="text-center">

        <a  class="btn btn-warning btn-xs"  href="ubah.php?id='.$data['nik'].'">ubah</a>
        <a onclick="return confirm(`yakin hapus ?`)" class="btn btn-danger btn-xs"  href="hapus.php?id='.$data['nik'].'">hapus</a>
        
        </td>';
        echo "</tr>";
        $no = $no + 1;
    }
    ?>
    <tr>
        <th colspan="2" class= "text-center">Total Data</th>
        <th colspan="7" class="text-center" >
            <span class="label label-primary"><?php echo count($hasil) ?>
        </th>
    </tr>
</table>
</hr>

