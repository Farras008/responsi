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

    <div class="ubahutama">
    <p class="jd-ubah">Ubah Data Inventaris<br></p>
    <?php
    include "config.php"; 
    if(empty($_SESSION['email'])) {
        header("location:index.php?pesan=belum_login");
        }
    $kode_barang = $_GET['kode_barang'];
    $data = mysqli_query($connection, "SELECT * FROM inventaris WHERE kode_barang='$kode_barang'"); ?>

    <?php while ($hasil = mysqli_fetch_assoc($data)) : ?>
        <br>
        <div class="container">
            <form method="POST" action="prosesedit.php">
                <div class="mb-3 row">
                    <label for="inputKode" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputkode" value="<?php echo $hasil["kode_barang"];?>"  name="kode_barang">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputnama"  name="nama_barang" value="<?php echo $hasil["nama_barang"];?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="integer" class="form-control" id="inputjumlah" value="<?php echo $hasil["jumlah"];?>" name="jumlah">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputsatuan" class="col-sm-2 col-form-label">Satuan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputsatuan" value="<?php echo $hasil["satuan"];?>" name="satuan">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputtanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputtanggal" value="<?php echo $hasil["tgl_datang"];?>" name="tgl_datang">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputharga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="integer" class="form-control" id="inputharga" value="<?php echo $hasil["harga"];?>" name="harga">
                    </div>
                </div>

                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="kategori" >
                       <!-- <option selected><?php echo $hasil["kategori"];?></option> -->
                        <?php
                            $status=$hasil["kategori"];
                            switch ($status) {
                                case "Bangunan" :
                                    ?>
                                    <option selected value="Bangunan">Bangunan</option>
                                    <option value="Kendaraan">Kendaraan</option>
                                    <option value="Alat Tulis Kantor">Alat Tulis Kantor</option>
                                    <option value="Elektronik">Elektronik</option>

                        
                                    <?php
                                break;
                            case "Kendaraan" :
                                    ?>
                                    <option value="Bangunan">Bangunan</option>
                                    <option selected value="Kendaraan">Kendaraan</option>
                                    <option value="Alat Tulis Kantor">Alat Tulis Kantor</option>
                                    <option value="Elektronik">Elektronik</option>
                       
                                    <?php
                            break;
                            case "Alat Tulis Kantor" :
                                    ?>
                                    <option value="Bangunan">Bangunan</option>
                                    <option value="Kendaraan">Kendaraan</option>
                                    <option selected value="Alat Tulis Kantor">Alat Tulis Kantor</option>
                                    <option value="Elektronik">Elektronik</option>
                                    <?php
                            break;
                            case "Elektronik" :
                                ?>
                                    <option value="Bangunan">Bangunan</option>
                                    <option value="Kendaraan">Kendaraan</option>
                                    <option value="Alat Tulis Kantor">Alat Tulis Kantor</option>
                                    <option selected value="Elektronik">Elektronik</option>                
                                <?php
                            break;
                            }
                            ?>

                        <!-- // <option value="Bangunan">Bangunan</option>
                        // <option value="Kendaraan">Kendaraan</option>
                        // <option value="Alat Tulis Kantor">Alat Tulis Kantor</option>
                        // <option value="Elektronik">Elektronik</option> -->
                    </select>
                    <label for="floatingSelect">Kategori</label>
                </div>

                <?php

                $status=$hasil["status_barang"];

                switch ($status) {
                    case "Baik" :
                        ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  id="flexRadioDefault1" value="Baik" name="status_barang" checked>
                            <label class="form-check-label" for="flexRadioDefault1">Baik</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  id="flexRadioDefault2" value="Perawatan" name="status_barang" >
                            <label class="form-check-label" for="flexRadioDefault2">Perawatan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  id="flexRadioDefault3" value="Rusak" name="status_barang" >
                            <label class="form-check-label" for="flexRadioDefault3">Rusak</label>
                        </div>
                        <?php
                        break;
                    case "Perawatan" :
                        ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  id="flexRadioDefault1" value="Baik" name="status_barang" >
                            <label class="form-check-label" for="flexRadioDefault1">Baik</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  id="flexRadioDefault2" value="Perawatan" name="status_barang" checked >
                            <label class="form-check-label" for="flexRadioDefault2">Perawatan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  id="flexRadioDefault3" value="Rusak" name="status_barang" >
                            <label class="form-check-label" for="flexRadioDefault3">Rusak</label>
                        </div>
                        <?php
                        break;
                    case "Rusak" :
                        ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  id="flexRadioDefault1" value="Baik" name="status_barang" >
                            <label class="form-check-label" for="flexRadioDefault1">Baik</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  id="flexRadioDefault2" value="Perawatan" name="status_barang"  >
                            <label class="form-check-label" for="flexRadioDefault2">Perawatan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  id="flexRadioDefault3" value="Rusak" name="status_barang" checked >
                            <label class="form-check-label" for="flexRadioDefault3">Rusak</label>
                        </div>
                        <?php
                        break;
                }


                ?>
                <center>
                    <button type="submit" class="btn btn-primary">Simpan</button> <br> <br>
                </center>
            </form>
        </div>
    <?php endwhile; ?>
    </div>

  </body>
</html>

