# Host: localhost  (Version 5.5.5-10.4.22-MariaDB)
# Date: 2022-06-22 16:25:39
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "data_penduduk"
#

DROP TABLE IF EXISTS `data_penduduk`;
CREATE TABLE `data_penduduk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` bigint(20) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

#
# Data for table "data_penduduk"
#

INSERT INTO `data_penduduk` VALUES (1,2147483647,'Iqbal Sonata','Pria','Single','2003-04-26','Gang Nangka'),(2,14030924040300010,'Raga Setia Wibawa','Pria','Menikah','2003-04-26','Jalan Harapan Baru'),(3,1403096302000007,'Nurhaisyah','Wanita','Menikah','2000-02-12','Jalan Desa Bulu Apo'),(4,1403092404030005,'Pitri Muliani','Wanita','Menikah','2002-12-12','jalan desa bulu apo'),(5,14030924040300012,'Fery Ricardo','Pria','Single','2000-02-22','Jl.Obor 2');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `konfirmasipassword` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'iqbal sonata','IQBALSONATA2@GMAIL.COM','$2y$10$oFkgd9rbHFK44UBNZ/7GGelGI/jFpluBwhedmC8Z1nTp9nYvd.yxy','$2y$10$ECwzKisL0Onjl2zAQ8ZZYO377xRkW.ojc107l5SQbRmMh7J55rVO6');
