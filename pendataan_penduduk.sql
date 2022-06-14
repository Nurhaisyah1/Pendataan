# Host: localhost  (Version 5.5.5-10.4.11-MariaDB)
# Date: 2022-06-14 10:55:50
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'aisyah','123');

#
# Structure for table "anggota"
#

DROP TABLE IF EXISTS `anggota`;
CREATE TABLE `anggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nik` int(11) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# Data for table "anggota"
#

INSERT INTO `anggota` VALUES (2,'SUPADI',323234234,'Desa bulu apoh\n'),(3,'DENAN',2147483647,'desa bulu apoh'),(4,'REHAN',2147483647,'Jl. Tanjung Kleng No.87 Jakarta'),(5,'MUHAMMAD SAMSUL',2147483647,'Jl. Ule Kareeng no.87 Jakarta'),(6,'ISHAK',2147483647,'Jl. Sempeda No.384 Jakarta'),(7,'REZA',2147483647,'Jl. Merpati Merah No.87 Jakarta'),(8,'RAHMAD',1771234433,'Jl. Hang tuah No 23');

#
# Structure for table "data lain-lain"
#

DROP TABLE IF EXISTS `data lain-lain`;
CREATE TABLE `data lain-lain` (
  `judul` varchar(25) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(25) DEFAULT NULL,
  `status tinggal` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "data lain-lain"
#


#
# Structure for table "data_alamat"
#

DROP TABLE IF EXISTS `data_alamat`;
CREATE TABLE `data_alamat` (
  `alamat_ktp` int(11) NOT NULL AUTO_INCREMENT,
  `alamat` varchar(25) DEFAULT NULL,
  `desa/kelurahan` varchar(20) DEFAULT NULL,
  `kecamatan` varchar(23) DEFAULT NULL,
  `kabupaten` varchar(25) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL,
  `negara` varchar(20) DEFAULT NULL,
  `RT` varchar(20) DEFAULT NULL,
  `RW` varchar(18) DEFAULT NULL,
  PRIMARY KEY (`alamat_ktp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "data_alamat"
#


#
# Structure for table "data_warga"
#

DROP TABLE IF EXISTS `data_warga`;
CREATE TABLE `data_warga` (
  `A.DATA_PRIBADI` int(11) NOT NULL AUTO_INCREMENT,
  `NIK` varchar(25) DEFAULT NULL,
  `Nama_warga` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` varchar(25) DEFAULT NULL,
  `jenis_kelamin` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`A.DATA_PRIBADI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "data_warga"
#


#
# Structure for table "petugas"
#

DROP TABLE IF EXISTS `petugas`;
CREATE TABLE `petugas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "petugas"
#

INSERT INTO `petugas` VALUES (2,'rabbaim','baim','570c396b3fc856eceb8aa7357f32af1a'),(3,'jill fathan','jill','202cb962ac59075b964b07152d234b70');
