-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `universitas` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `tahun` int(4) NOT NULL,
  `proker1` varchar(256) NOT NULL,
  `proker2` varchar(256) NOT NULL,
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `mahasiswa` (`id_mhs`, `nama`, `universitas`, `fakultas`, `jurusan`, `tahun`, `proker1`, `proker2`) VALUES
(12,	'Raja ikram',	'UI',	'kucing',	'if',	2021,	'memelihara kucing',	'menyapu posko');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(1,	'Lurah Jabungan',	'lurah-jabungan',	'202cb962ac59075b964b07152d234b70'),
(2,	'William',	'wil',	'202cb962ac59075b964b07152d234b70');

-- 2021-01-26 09:35:39
