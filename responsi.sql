-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 07:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `tgl_datang` date NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `status_barang` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`kode_barang`, `nama_barang`, `jumlah`, `satuan`, `tgl_datang`, `kategori`, `status_barang`, `harga`) VALUES
('BDB01', 'Rumah Istana', 2, 'Unit', '2021-03-15', 'Bangunan', 'Baik', 500000000),
('BDB02', 'Tanah Pertanian', 1000, 'm²', '2021-03-04', 'Bangunan', 'Baik', 2500000),
('BDB03', 'Tanah Perkebunan', 2000, 'm²', '2021-02-19', 'Bangunan', 'Baik', 1300000),
('ELK01', 'LAPTOP ROG', 70, 'Unit', '2021-09-15', 'Elektronik', 'Baik', 15000000),
('ELK02', 'LAPTOP ASUS TUF', 84, 'Unit', '2021-09-30', 'Elektronik', 'Perawatan', 12000000),
('ELK03', 'Router', 40, 'Unit', '2021-10-13', 'Elektronik', 'Rusak', 40000),
('ELK04', 'Mouse', 20, 'Unit', '2021-11-09', 'Elektronik', 'Rusak', 30000),
('MOB01', 'Mobil Mobilio 2017', 15, 'Unit', '2021-09-20', 'Kendaraan', 'Baik', 200000000),
('MOB02', 'Mobil Pajero', 7, 'Unit', '2021-07-10', 'Kendaraan', 'Baik', 450000000),
('MOB03', 'Mobil Avanza 2020', 25, 'Unit', '2021-07-17', 'Kendaraan', 'Baik', 150000000),
('MOB04', 'Mobil Brio 2018', 11, 'Unit', '2021-01-07', 'Kendaraan', 'Rusak', 100000000),
('PRT01', 'Kursi Kerja', 95, 'Unit', '2021-05-11', 'Alat Tulis Kantor', 'Baik', 150000),
('PRT02', 'Meja Meeting', 10, 'Unit', '2021-04-09', 'Alat Tulis Kantor', 'Baik', 1800000),
('PRT03', 'Pulpen', 1000, 'Unit', '2021-07-19', 'Alat Tulis Kantor', 'Baik', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`username`, `password`, `nama_lengkap`, `email`, `no_tlp`) VALUES
('farras008', '1', 'Farras Alam Majid', 'farras.alam08@gmail.com', '085229794835'),
('petugas1', '1', 'Soekarno', 'petugas1@gmail.com', '087811111111'),
('petugas2', '2', 'Soeharto', 'petugas2@gmail.com', '087822222222'),
('petugas3', '3', 'Soekarno', 'petugas3@gmail.com', '087833333333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
