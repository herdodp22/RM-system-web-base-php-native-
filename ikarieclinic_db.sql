-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 12:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikarieclinic_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `usernameadmin` varchar(255) NOT NULL,
  `passwordadmin` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `usernameadmin`, `passwordadmin`, `time`) VALUES
(3, 'admin123', '0192023a7bbd73250516f069df18b500', '2022-06-02 07:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `usernamedokter` varchar(255) NOT NULL,
  `passworddokter` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `usernamedokter`, `passworddokter`, `time`) VALUES
(2, 'herlin123', '088faeda7792ddc6fd96df02d16b2105', '2022-05-31 20:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `informasipasien`
--

CREATE TABLE `informasipasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jeniskelamin_pasien` varchar(25) NOT NULL,
  `alamat_pasien` varchar(255) NOT NULL,
  `umur_pasien` varchar(25) NOT NULL,
  `tempatlahir_pasien` varchar(255) NOT NULL,
  `tanggallahir_pasien` varchar(25) NOT NULL,
  `bulanlahir_pasien` varchar(25) NOT NULL,
  `tahunlahir_pasien` varchar(25) NOT NULL,
  `kewarganegaraan_pasien` varchar(255) NOT NULL,
  `agama_pasien` varchar(25) NOT NULL,
  `pekerjaan_pasien` varchar(25) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasipasien`
--

INSERT INTO `informasipasien` (`id_pasien`, `nama_pasien`, `jeniskelamin_pasien`, `alamat_pasien`, `umur_pasien`, `tempatlahir_pasien`, `tanggallahir_pasien`, `bulanlahir_pasien`, `tahunlahir_pasien`, `kewarganegaraan_pasien`, `agama_pasien`, `pekerjaan_pasien`, `time`) VALUES
(1, 'herdo', 'laki - laki', 'puri legenda', '27', 'bangka belitung', '22', 'juni', '1993', 'indonesia', 'islam', 'software engineer', '2022-06-02 09:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `namapasien` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `alamatpasien` varchar(255) NOT NULL,
  `nomorRM` varchar(255) NOT NULL,
  `timeRM` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `namapasien`, `tanggal`, `bulan`, `tahun`, `umur`, `nohp`, `alamatpasien`, `nomorRM`, `timeRM`) VALUES
(1, 'herdo', '22', 'juni', '1993', '27', '082298022695', 'puri legenda', '0001', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rm_db`
--

CREATE TABLE `rm_db` (
  `id_rekammedis` int(11) NOT NULL,
  `id_pasiendb` varchar(255) NOT NULL,
  `namapasien` text NOT NULL,
  `dokterpelaksana` varchar(255) NOT NULL,
  `kesadaran` varchar(255) NOT NULL,
  `sistole` varchar(255) NOT NULL,
  `diastole` varchar(255) NOT NULL,
  `nafas` varchar(255) NOT NULL,
  `suhu` varchar(255) NOT NULL,
  `sistempernafasan` varchar(255) NOT NULL,
  `sistemkardiovaskular` varchar(255) NOT NULL,
  `sistempencernaan` varchar(255) NOT NULL,
  `sistemmuskuloskeletal` varchar(255) NOT NULL,
  `sistempersyarafan` varchar(255) NOT NULL,
  `sistemintegumen` varchar(255) NOT NULL,
  `sistemperkemihan` varchar(255) NOT NULL,
  `time_rm` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rm_db`
--

INSERT INTO `rm_db` (`id_rekammedis`, `id_pasiendb`, `namapasien`, `dokterpelaksana`, `kesadaran`, `sistole`, `diastole`, `nafas`, `suhu`, `sistempernafasan`, `sistemkardiovaskular`, `sistempencernaan`, `sistemmuskuloskeletal`, `sistempersyarafan`, `sistemintegumen`, `sistemperkemihan`, `time_rm`) VALUES
(1, '1', 'herdo', 'dr.Herlin Ramadhanti', 'oyu', '100', '70', '60', '34', 'fdge', 'regreg', 'reger', 'sfag', 'safdaga', 'sffWF', 'EFWFFWEF', '2022-06-02 10:25:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `informasipasien`
--
ALTER TABLE `informasipasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `rm_db`
--
ALTER TABLE `rm_db`
  ADD PRIMARY KEY (`id_rekammedis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `informasipasien`
--
ALTER TABLE `informasipasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rm_db`
--
ALTER TABLE `rm_db`
  MODIFY `id_rekammedis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
