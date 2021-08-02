-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 08:37 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpwl_supermarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `kode_makanan` varchar(100) NOT NULL,
  `merk_makanan` varchar(100) NOT NULL,
  `jenis_makanan` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`kode_makanan`, `merk_makanan`, `jenis_makanan`, `stok`, `harga`) VALUES
('A-001', 'Mie Sedap', 'Mie Instan', '10', '12000'),
('A-002', 'Taro', 'Snack', '11', '4000'),
('A-003', 'Sari Roti', 'Roti', '24', '4500'),
('A-004', 'Sukro', 'Kacang', '13', '2000'),
('A-005', 'Silverqueen', 'Coklat', '16', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `minuman`
--

CREATE TABLE `minuman` (
  `kode_minuman` varchar(100) NOT NULL,
  `merk_minuman` varchar(100) NOT NULL,
  `jenis_minuman` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minuman`
--

INSERT INTO `minuman` (`kode_minuman`, `merk_minuman`, `jenis_minuman`, `stok`, `harga`) VALUES
('B-001', 'Teh Gelas', 'Teh', '10', '1000'),
('B-002', 'Coca cola', 'Alkohol', '12', '4500'),
('B-003', 'Nescafe', 'Kopi', '11', '9000'),
('B-004', 'Frestea', 'Teh', '14', '3000'),
('B-005', 'Sprite', 'Alkohol', '50', '3500');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kode_obat` varchar(100) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `jenis_obat` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jenis_obat`, `stok`, `harga`) VALUES
('C-001', 'Siladex', 'Ringan', '100', '12000'),
('C-002', 'Promag', 'Ringan', '1000', '6000'),
('C-003', 'Amoxicilin', 'Obat Keras', '13', '33000'),
('C-004', 'OBH', 'Obat Ringan', '43', '12000'),
('C-005', 'Gunaceta', 'Obat Keras', '14', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_transaksi` varchar(100) NOT NULL,
  `kode_makanan` varchar(100) NOT NULL,
  `kode_minuman` varchar(100) NOT NULL,
  `kode_obat` varchar(100) NOT NULL,
  `jml_transaksi` varchar(100) NOT NULL,
  `tanggal_transaksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kode_transaksi`, `kode_makanan`, `kode_minuman`, `kode_obat`, `jml_transaksi`, `tanggal_transaksi`) VALUES
('D-001', 'A-004', 'B-002', 'C-002', '12', '2021-07-22'),
('D-002', 'A-001', 'B-002', 'C-002', '10', '2021-07-19'),
('D-003', 'A-003', 'B-002', 'C-004', '11', '2021-07-16'),
('D-004', 'A-005', 'B-003', 'C-002', '8', '2021-07-15'),
('D-005', 'A-002', 'B-002', 'C-004', '5', '2021-07-14'),
('D-006', 'A-003', 'B-001', 'C-002', '1', '2021-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'ningsih', 'ningsih29', '12345', 'admin'),
(2, 'boby', 'boby29', '12345', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`kode_makanan`);

--
-- Indexes for table `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`kode_minuman`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD KEY `fk_kode_makanan` (`kode_makanan`),
  ADD KEY `fk_kode_minuman` (`kode_minuman`),
  ADD KEY `fk_kode_obat` (`kode_obat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_kode_makanan` FOREIGN KEY (`kode_makanan`) REFERENCES `makanan` (`kode_makanan`),
  ADD CONSTRAINT `fk_kode_minuman` FOREIGN KEY (`kode_minuman`) REFERENCES `minuman` (`kode_minuman`),
  ADD CONSTRAINT `fk_kode_obat` FOREIGN KEY (`kode_obat`) REFERENCES `obat` (`kode_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
