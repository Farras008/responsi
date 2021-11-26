<?php
    session_start();
    
    include "config.php";
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $tgl_datang = $_POST['tgl_datang'];
    $kategori = $_POST['kategori'];
    $status_barang = $_POST['status_barang'];
    $harga = $_POST['harga'];

    $query = mysqli_query($connection, "UPDATE inventaris SET kode_barang='$kode_barang', nama_barang='$nama_barang',jumlah='$jumlah', satuan= '$satuan',tgl_datang='$tgl_datang', kategori='$kategori', status_barang='$status_barang', harga='$harga' WHERE kode_barang='$kode_barang' or nama_barang='$nama_barang'") or die (mysqli_error($connection));
    // $query = mysqli_query($connection, "UPDATE account SET nama='$nama', nohp='$nohp', email='$email', password='$password' WHERE nim='$nim'");
    // $cek = mysqli_num_rows($query);

    if($query){
        echo "
            <script>
                alert('Perubahan Berhasil');
                document.location.href = 'datainventaris.php';
            </script>
        ";

        }
    else {
            echo "proses gagal";
        }
?>