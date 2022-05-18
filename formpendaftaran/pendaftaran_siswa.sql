-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 05:03 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_siswa`
--

CREATE TABLE `pendaftaran_siswa` (
  `jenis_pendaftaran` enum('Siswa baru','Pindahan') NOT NULL,
  `tanggal_ms` date NOT NULL,
  `NIS` varchar(20) NOT NULL,
  `no_peserta` varchar(20) NOT NULL,
  `paud` enum('ya','tidak') NOT NULL,
  `tk` enum('ya','tidak') NOT NULL,
  `SKHUN` varchar(20) NOT NULL,
  `IJAZAH` varchar(20) NOT NULL,
  `hobi` enum('Olahraga','Kesenian','Membaca','Menulis','Traveling','Lainnya') NOT NULL,
  `cita` enum('PNS','TNI/POLRI','Guru/Dosen','Dokter','Politikus','Wiraswasta','Seni/Lukis/Artis/Sejenis','Lainnya') NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `NISN` varchar(20) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `Tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `Agama` enum('Islam','Kristen/Protestan','Katholik','Hindu','Budha','Kong Hu Chu','Lainnya') NOT NULL,
  `Berkebutuhan_1` enum('Tidak','Netra','Rungu','Grahita Ringan','Grahita Sedang','Daksa Ringan','Daksa Sedang','Laras','Wicara','Tuna Ganda','Hiperaktif','Cerdas Istimewa','Bakat Istimewa','Kesulitan Belajar','Narkoba','Indigo','Down Sindrome','Autis') NOT NULL,
  `Alamat` text NOT NULL,
  `RT` varchar(10) NOT NULL,
  `RW` varchar(10) NOT NULL,
  `Dusun` varchar(20) NOT NULL,
  `Kelurahan` varchar(20) NOT NULL,
  `Kecamatan` varchar(20) NOT NULL,
  `Kode Pos` varchar(10) NOT NULL,
  `Tinggal` enum('Bersama Orang Tua','Wali','Kos','Asrama','Panti Asuhan','Lainnya') NOT NULL,
  `Moda` enum('Jalan Kaki','Kendaraan Pribadi','Kendaraan Umum','Jemputan Sekolah','Kereta Api','Ojek','Anding/Becak','Perahu','Lainnya') NOT NULL,
  `HP` varchar(15) NOT NULL,
  `Telepon` varchar(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `KPS` enum('Ya','Tidak') NOT NULL,
  `No_KPS` int(15) NOT NULL,
  `Kewarganegaraan` enum('WNI','WNA') NOT NULL,
  `Nama_ayah` varchar(50) NOT NULL,
  `Tahunlahir_ayah` varchar(10) NOT NULL,
  `pendidikan_ayah` enum('Tidak Sekolah','Putus SD','SD Sederajat','SMP Sederajat','SMA Sederajat','D1','D2','D3','D4/S1','S2','S3') NOT NULL,
  `pekerjaan_ayah` enum('Tidak Bekerja','Nelayan','Petani','Peternak','PNS/TNI/POLRI','Karawan Swasta','Pedagang Kecil','Pedagang Besar','Wiraswasta','Wirausaha','Buruh','Pensiunan','Lain-lain') NOT NULL,
  `penghasilan_ayah` enum('Kurang Dari 500.000','500.000 - 999.999','1.000.000 - 1.999.999','2.000.000 - 4.999.999','5.000.000 - 20.000.000','Lebih Dari 20.000.000') NOT NULL,
  `Berkebutuhan_2` enum('Tidak','Netra','Rungu','Grahita Ringan','Grahita Sedang','Daksa Ringan','Daksa Sedang','Laras','Wicara','Tuna Ganda','Hiperaktif','Cerdas Istimewa','Bakat Istimewa','Kesulitan Belajar','Narkoba','Indigo','Down Sindrome','Autis') NOT NULL,
  `Nama_ibu` varchar(50) NOT NULL,
  `Tahunlahir_ibu` varchar(10) NOT NULL,
  `pendidikan_ibu` enum('Tidak Sekolah','Putus SD','SD Sederajat','SMP Sederajat','SMA Sederajat','D1','D2','D3','D4/S1','S2','S3') NOT NULL,
  `pekerjaan_ibu` enum('Tidak Bekerja','Nelayan','Petani','Peternak','PNS/TNI/POLRI','Karawan Swasta','Pedagang Kecil','Pedagang Besar','Wiraswasta','Wirausaha','Buruh','Pensiunan','Lain-lain') NOT NULL,
  `penghasilan_ibu` enum('Kurang Dari 500.000','500.000 - 999.999','1.000.000 - 1.999.999','2.000.000 - 4.999.999','5.000.000 - 20.000.000','Lebih Dari 20.000.000') NOT NULL,
  `Berkebutuhan_3` enum('Tidak','Netra','Rungu','Grahita Ringan','Grahita Sedang','Daksa Ringan','Daksa Sedang','Laras','Wicara','Tuna Ganda','Hiperaktif','Cerdas Istimewa','Bakat Istimewa','Kesulitan Belajar','Narkoba','Indigo','Down Sindrome','Autis') NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran_siswa`
--
ALTER TABLE `pendaftaran_siswa`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
