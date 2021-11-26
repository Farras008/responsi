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
              <li><a class="dropdown-item" href="login.php">Bangunan</a></li>
              <li><a class="dropdown-item" href="#">Kendaraan</a></li>
              <li><a class="dropdown-item" href="#">Alat Tulis Kantor</a></li>
              <li><a class="dropdown-item" href="#">Elektronik</a></li>
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

    <center>
    <div class="tambah-utama">
        <p class="jd-tambah">Tambah Data Inventaris<br></p>
        <div class="container container-daftar">
        <div class="col align-self-center">
            <form method="POST" action="prosesinput.php">
                <div class="mb-3 row">
                    <label for="inputKode" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputkode" placeholder="Masukkan Kode Barang" name="kode_barang">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputnama" placeholder="Masukkan Nama Barang" name="nama_barang">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="integer" class="form-control" id="inputjumlah" placeholder="Masukan Jumlah" name="jumlah">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputsatuan" class="col-sm-2 col-form-label">Satuan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputsatuan" placeholder="Masukan Satuan" name="satuan">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputtanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputtanggal" placeholder="dd/mm/yyyy" name="tgl_datang">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputharga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="integer" class="form-control" id="inputharga" placeholder="Masukan Harga Satuan" name="harga">
                    </div>
                </div>

                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="kategori">
                   
                        <option value="Bangunan">Bangunan</option>
                        <option value="Kendaraan">Kendaraan</option>
                        <option value="Alat Tulis Kantor">Alat Tulis Kantor</option>
                        <option value="Elektronik">Elektronik</option>
                    </select>
                    <label for="floatingSelect">Kategori</label>
                </div>


                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"  id="flexRadioDefault1" value="Baik" name="status_barang">
                    <label class="form-check-label" for="flexRadioDefault1">Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"  id="flexRadioDefault2" value="Perawatan" name="status_barang" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Perawatan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"  id="flexRadioDefault3" value="Rusak" name="status_barang" checked>
                    <label class="form-check-label" for="flexRadioDefault3">Rusak</label>
                </div>

                

                
                
                <center class="tombol-bawah">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="datainventaris.php">
                    <button type="submit" class="btn btn-primary">Batal</button>
                    </a>
                    <!-- <?php
                        if(isset($_GET['pesan'])){
                            if($_GET['pesan']=="gagal") {
                                echo "Login gagal! Email atau password Anda salah.";
                            }
                        }
                    ?> -->
                </center>
            </form>
            <br>
        </div> 
    </div>
        


        
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
