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
    <!-- <?php
      session_start(); 
      if(empty($_SESSION['email'])) {
          header("location:index.php?pesan=belum_login");
            }
    ?> -->
    <h1 class="tx-judul"> DAFTAR INVENTARIS BARANG <br> KANTOR SERBA ADA</h1>
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
    <?php
        
        include "config.php";
        $kode_barang = $_GET['kode_barang'];

        $query = mysqli_query($connection, "SELECT * FROM inventaris WHERE kode_barang='$kode_barang'") or die (mysqli_error($connection));
        $query = mysqli_fetch_array($query);
        
    
    ?>
    <center>
    <div class="Utama">
        <p class="jd-hapus">Hapus Data Inventaris<br></p>
        <p>Yakin Ingin Menghapus <?php
        echo $query['nama_barang'];
        ?> ?</p>
        <div>
        <a href="proseshapusdata.php?kode_barang=<?php echo $query['kode_barang']; ?>">
            <button type="button" id="tombolhapus" class="btn btn-danger" >Hapus</button>
        </a>
        <a href="datainventaris.php">
            <button type="button" id="tombolbatal" class="btn btn-primary" >Batal</button>
        </a>
        </div>


        
    </div>
    </center>


    
  </body>
</html>
