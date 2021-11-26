<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi Inventaris Berbasis Web</title>
    <link rel="stylesheet" href="assets/css/styledata.css" />
<!-- 
    bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- boorstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
      body {
        background-image: url("assets/img/bg-awal.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }  
   
    </style>
  </head>
  <body class="bodyumum">
    <?php
      session_start(); 
      if(empty($_SESSION['email'])) {
          header("location:index.php?pesan=belum_login");
            }
    ?>
    <h1 class="tx-judul"> DAFTAR INVENTARIS BARANG <br> KANTOR SERBA ADA</h1>
    <!-- <li class="nav-item dropdown"> -->
    <!-- <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a> -->
    <nav class="navbar-expand-lg navbar-light">
    <div class="utama">
      <ul class="navbar nav justify-content-start">
        <li ><a  class="nav-link" aria-current="page" href="admin.php">Beranda</a></li>
        <li ><a  class="nav-link" href="datainventaris.php">Daftar Inventaris</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">List Per Kategori</a>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="kategoribangunan.php">Bangunan</a></li>
              <li><a class="dropdown-item" href="kategorikendaraan.php">Kendaraan</a></li>
              <li><a class="dropdown-item" href="kategorialattulis.php">Alat Tulis Kantor</a></li>
              <li><a class="dropdown-item" href="kategorielektronik.php">Elektronik</a></li>
              </ul>
        </li>
        
        <span  class="d-flex ">
            <a  href="logout.php">
              <button type="button"  class="btn btn-primary" id="logout">Logout</button>
            </a>
          </span>
          
        
      </ul>
      
      
    </div>
    </nav>
    <div class="btn-tambah">
        <a href="tambah.php">
        <button type="button" id="tomboltambah" class="btn btn-primary" >+  Tambah</button>
        </a>
    </div>

    <div class="tb-isi">
        <table class="table" >
          <tr class="tb-atas">
            <th>No</th>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Satuan</th>
            <th>Tanggal Datang</th>
            <th>Kategori</th>
            <th>Status</th>
            <th>Harga Satuan</th>
            <th>Total Harga</th>
            <th>Aksi</th>
          </tr>
      
        <?php
        include 'config.php';
        $query = mysqli_query ($connection, "SELECT * from inventaris WHERE kategori='Alat Tulis Kantor'");
        $s=1;
        $totalharga1=0;
        $totalharga2=0;
        while ($data=mysqli_fetch_array($query))
        {?>
            <tr>
                <!-- <th scope="row">1</th> -->
                <td> <?php echo $s++?></td>
                <td> <?php echo $data['kode_barang'];?></td>
                <td> <?php echo $data['nama_barang'];?></td>
                <td> <?php echo $data['jumlah'];?></td>
                <td> <?php echo $data['satuan'];?></td>
                <td> <?php echo $data['tgl_datang'];?></td>
                <td> <?php echo $data['kategori'];?></td>
                <td> <?php echo $data['status_barang'];?></td>
                <?php $hargatotal=$data['harga']*$data['jumlah'];?>
                <?php 
                $totalharga1=$hargatotal+$totalharga2;
                $totalharga2=$totalharga1;
                
                ?>
                <?php $harga=number_format($data['harga'],0,",",".")?>
                <?php $hargatotal=number_format($hargatotal,0,",",".")?>
                
                <td> 
                  <?php echo "Rp."; echo $harga; echo " ,-"?>
                </td>
                <td> 
                  <?php echo "Rp."; echo $hargatotal; echo " ,-"?>
                </td>
      
              <td> 
              <a href="edit.php?kode_barang=<?php echo $data['kode_barang']; ?>">
                <button type="button" id="tombolhapus" class="btn btn-secondary" >Edit</button> 
            </a>
                <a href="hapus.php?kode_barang=<?php echo $data['kode_barang']; ?>">
                    <button type="button" id="tombolhapus" class="btn btn-danger" >Hapus</button>
                </a>
        
              </td>
            </tr>
            <?php 
        }   
        ?> 

    </table>
    </div>
    <center>
    <div >
      <p class="totalinventaris">Total Inventaris 
        <?php $totalharga2=number_format($totalharga2,0,",",".");
        echo "Rp."; echo $totalharga2; echo " ,-"
        ?></p>
    </div>
    </center>
  </body>
</html>

<!-- while ($r=mysql_fetch_array($query)){
  // Ubah format harga dengan fungsi number_format
  $harga=number_format($r[harga],0,",",".");
 
  echo "<tr bgcolor=$warna>
    <td>$r[kode]</td><td>$r[nama]</td><td>$r[stok]</td>
    <td>$r[tgl_masuk]</td><td>Rp. $harga</td></tr>";
} -->
