-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 12:57 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storeid`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(11) NOT NULL,
  `NamaBarang` varchar(255) NOT NULL,
  `JumlahBarang` int(11) NOT NULL,
  `HargaBarang` int(11) NOT NULL,
  `idKategori` int(11) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBarang`, `NamaBarang`, `JumlahBarang`, `HargaBarang`, `idKategori`, `supplier`, `foto`) VALUES
(14, 'Better', 100, 1500, 1, 'Billa', 'better.jpg'),
(15, 'Es Teh', 36, 2000, 3, 'Anggota USMA', 'esteh.jpg'),
(17, 'Seragam HMTI', 17, 150000, 4, 'bila', 'hmti.jpg'),
(19, 'Leo', 11, 3000, 1, 'sardo', 'leo.jpg'),
(20, 'COCA COLA 380ML', 100, 4500, 3, 'PT. Coca Cola', 'cocacola380ml.jpg'),
(21, 'COCA COLA 250ML', 100, 3500, 3, 'PT. Coca Cola', 'cocacola250ml.png'),
(22, 'PILUS', 100, 500, 1, 'PERSADA', 'pilus.jpg'),
(23, 'CHOCOLATOS', 100, 1000, 1, 'PERSADA', 'chocolatos.jpg'),
(24, 'NABATI 8G', 100, 500, 1, 'PERSADA', 'nabati.jpg'),
(25, 'BISKUT SELIMUT', 100, 500, 1, 'PERSADA', 'selimut.jpg'),
(26, 'MAKARONI', 98, 500, 1, 'FITA', 'makaroni.jpg'),
(27, 'TANGO', 100, 1000, 1, 'PERSADA', 'tango.jpg'),
(28, 'GARUDA ROSTA', 100, 1000, 1, 'PERSADA', 'rosta.jpg'),
(29, 'KRIS BEE', 100, 1000, 1, 'PERSADA', 'krisbee.jpg'),
(30, 'LEO', 100, 1000, 1, 'PERSADA', 'leo.jpg'),
(31, 'TIC TAC', 100, 1000, 1, 'PERSADA', 'tictac.jpg'),
(32, 'JETZ', 100, 1000, 1, 'PERSADA', 'jetz.jpg'),
(33, 'BENGBENG', 100, 1500, 1, 'PERSADA', 'bengbeng.jpg'),
(34, 'WALLENS', 100, 1500, 1, 'PERSADA', 'wallens.jpg'),
(35, 'FULLO', 100, 2000, 1, 'PERSADA', 'fullo.jpg'),
(36, 'NABATI ROLLS', 100, 2000, 1, 'PERSADA', 'nabatorolls.jpg'),
(37, 'ROMA SARI GANDUM', 100, 2000, 1, 'PERSADA', 'sarigandum.jpg'),
(38, 'NABATI 50G', 100, 2500, 1, 'PERSADA', 'nabati50.jpg'),
(39, 'MINUTE MAID', 100, 5500, 3, 'PERSADA', 'pulpy.png'),
(40, 'NUTRIFORCE', 100, 2500, 3, 'PERSADA', 'nutriforce.png'),
(41, 'TEH PUCUK', 100, 3000, 3, 'PERSADA', 'tehpucuk.jpg'),
(42, 'MINERAL', 99, 2500, 3, 'PERSADA', 'mineral.jpg'),
(43, 'FANTA 250ML', 100, 3500, 3, 'PT. Coca Cola', 'fanta250.jpg'),
(44, 'NUTRIBOOST', 100, 6000, 3, 'PERSADA', 'nutriboost.jpg'),
(45, 'KOPI', 100, 3000, 3, 'PERSADA', 'kopi.jpg'),
(46, 'SOSIS GORENG', 0, 3000, 2, 'FROZEN FOOD', 'sosisgoreng.png'),
(47, 'KRUPUK SAMBAL', 99, 3000, 2, 'PAK SAI', 'krupuksambal.jpg'),
(48, 'TAHU KRES', 100, 3000, 2, 'PASAR', 'tahukres.jpg'),
(49, 'TELA-TELA', 100, 3000, 2, 'PASAR', 'telatela.jpg'),
(50, 'INDOMIE GORENG', 100, 5000, 2, 'PERSADA', 'indomie.jpg'),
(51, 'POP MIE', 100, 5000, 2, 'PERSADA', 'pop.jpg'),
(52, 'SARIMIE DUO', 100, 6000, 2, 'PERSADA', 'sarimieduo.jpg'),
(53, 'ALMAMATER POLINEMA', 100, 190000, 4, 'DIVISI TENDER', 'almet.png'),
(54, 'SERAGAM HMA', 100, 150000, 4, 'DIVISI TENDER', 'hma.jpg'),
(55, 'SERAGAM HME', 100, 150000, 4, 'DIVISI TENDER', 'hme.png'),
(56, 'SERAGAM HMM', 100, 150000, 4, 'DIVISI TENDER', 'hmm.jpg'),
(57, 'SERAGAM HMS', 100, 150000, 4, 'DIVISI TENDER', 'hms.png'),
(58, 'HOODIE POLINEMA WHITE', 100, 150000, 4, 'DIVISI TENDER', 'jaketPutih.PNG'),
(59, 'HOODIE POLINEMA NAVY', 98, 200000, 4, 'DIVISI TENDER', 'jaketBiru.PNG'),
(60, 'rice bowl', 10, 10000, 2, 'sinta', '2019-08-30 09.39.20 1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `idPesanan` int(11) NOT NULL,
  `idKonsumen` int(11) NOT NULL,
  `idBarang` int(11) NOT NULL,
  `jmlPesanan` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `deliverto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`idPesanan`, `idKonsumen`, `idBarang`, `jmlPesanan`, `status`, `deliverto`) VALUES
(16, 3, 11, 5, 'Done', 'Sekret Rispol'),
(18, 7, 14, 1, 'Done', 'Sekret Rispol'),
(18, 7, 15, 1, 'Done', 'Sekret Rispol'),
(18, 7, 18, 1, 'Done', 'Sekret Rispol'),
(19, 9, 15, 1, 'Done', 'Sekret Kompen'),
(19, 9, 19, 3, 'Done', 'Sekret Kompen'),
(20, 9, 14, 2, 'Done', 'Sekret Usma'),
(20, 9, 19, 1, 'Done', 'Sekret Usma'),
(20, 9, 19, 2, 'Done', 'Sekret Usma'),
(21, 9, 15, 2, 'Done', 'Sekret Usma'),
(22, 9, 17, 1, 'Done', 'Sekret HMTI'),
(23, 3, 19, 2, 'Done', 'Sekret Kompen'),
(24, 10, 15, 2, 'Done', 'Sekret Usma'),
(24, 10, 18, 2, 'Done', 'Sekret Usma'),
(25, 5, 14, 5, 'Done', 'Sekret Usma'),
(26, 5, 18, 2, 'Done', 'Sekret Usma'),
(27, 5, 15, 4, 'Done', 'Sekret PP'),
(28, 9, 14, 1, 'Done', 'Sekret SENI'),
(28, 9, 15, 2, 'Done', 'Sekret SENI'),
(28, 9, 19, 1, 'Done', 'Sekret SENI'),
(29, 9, 17, 1, 'Process', 'Sekret HMTI'),
(30, 5, 59, 2, 'Done', 'Sekret HMM'),
(31, 11, 46, 100, 'Done', 'Sekret HMTK'),
(32, 12, 26, 2, 'Done', 'Sekret PASTI'),
(32, 12, 42, 1, 'Done', 'Sekret PASTI'),
(32, 12, 47, 1, 'Done', 'Sekret PASTI');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idKategori` int(11) NOT NULL,
  `Kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idKategori`, `Kategori`) VALUES
(1, 'Snack'),
(2, 'Meals'),
(3, 'Drinks'),
(4, 'Konveksi');

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `idKonsumen` int(10) NOT NULL,
  `NamaKonsumen` varchar(255) NOT NULL,
  `NoTelpKonsumen` int(25) NOT NULL,
  `EmailKonsumen` varchar(255) NOT NULL,
  `idLogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`idKonsumen`, `NamaKonsumen`, `NoTelpKonsumen`, `EmailKonsumen`, `idLogin`) VALUES
(1, 'milla', 897645532, 'milla@gmail.com', 2),
(2, 'afi', 887802, 'afi@gmail.com', 3),
(3, 'bila', 889083, 'bila@gmail.com', 4),
(4, 'dini', 86790885, 'dini@gmail.com', 5),
(5, 'fita', 887809, 'fita@gmail.com', 6),
(6, 'linda', 998730, 'linda@gmail.com', 7),
(7, 'iren', 98222, 'iren@gmail.com', 8),
(8, 'serli', 8890223, 'serli@gmail.com', 9),
(9, 'itik', 0, 'itik@gmail.com', 10),
(10, 'david', 880093, 'david@gmail.com', 11),
(11, 'Ahaha', 2147483647, 'ahaha@gmail.com', 12),
(12, 'sinta', 8878098, 'sinta@gmail.com', 13);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `idLogin` int(10) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `loginLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`idLogin`, `Username`, `Password`, `loginLevel`) VALUES
(1, 'admin', 'admin', 1),
(2, 'milla', 'milla', 2),
(3, 'afi', 'afi', 2),
(4, 'bila', 'bila', 2),
(5, 'dini', 'dini', 2),
(6, 'fita', 'fita', 2),
(7, 'linda', 'linda', 2),
(8, 'iren', 'iren', 2),
(9, 'serli', 'serli', 2),
(10, 'itik', 'itik', 2),
(11, 'david', 'david', 2),
(12, 'ahaha', 'ahaha', 2),
(13, 'sinta', 'sinta', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `idPesanan` int(11) NOT NULL,
  `TanggalJam` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`idPesanan`, `TanggalJam`) VALUES
(3, '2019-11-18 11:00:00'),
(4, '2019-11-18 20:36:03'),
(5, '2019-11-18 20:38:12'),
(6, '2019-11-18 20:55:45'),
(7, '2019-11-18 20:57:38'),
(8, '2019-11-18 21:02:36'),
(9, '2019-11-18 21:04:14'),
(10, '2019-11-18 21:12:04'),
(11, '2019-11-18 21:14:00'),
(14, '2019-11-19 15:07:22'),
(15, '2019-11-19 15:08:22'),
(16, '2019-11-19 15:09:10'),
(17, '2019-11-19 15:55:19'),
(18, '2019-11-20 13:47:31'),
(19, '2019-11-20 17:16:57'),
(20, '2019-11-20 17:25:49'),
(21, '2019-11-20 17:26:31'),
(22, '2019-11-20 17:53:45'),
(23, '2019-11-20 18:08:51'),
(24, '2019-11-24 18:44:39'),
(25, '2019-11-25 00:15:29'),
(26, '2019-11-25 00:17:23'),
(27, '2019-11-25 00:20:19'),
(28, '2019-11-25 00:22:24'),
(29, '2019-11-25 00:25:55'),
(30, '2019-11-25 14:15:12'),
(31, '2019-11-29 16:17:14'),
(32, '2019-12-02 11:19:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`idPesanan`,`idKonsumen`,`idBarang`,`jmlPesanan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`idKonsumen`),
  ADD KEY `fk_login_konsumen` (`idLogin`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idPesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `idKonsumen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idPesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD CONSTRAINT `fk_login_konsumen` FOREIGN KEY (`idLogin`) REFERENCES `login` (`idLogin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
