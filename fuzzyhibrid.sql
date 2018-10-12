/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : fuzzyhibrid

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-01-31 18:06:33
*/
DROP DATABASE IF EXISTS `fuzzyhibrid`;
CREATE DATABASE IF NOT EXISTS `fuzzyhibrid` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `fuzzyhibrid`;

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `bobot_profile`
-- ----------------------------
DROP TABLE IF EXISTS `bobot_profile`;
CREATE TABLE `bobot_profile` (
  `id_bobot` tinyint(4) NOT NULL AUTO_INCREMENT,
  `selisih` tinyint(4) NOT NULL,
  `bobot` float NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bobot_profile
-- ----------------------------
INSERT INTO bobot_profile VALUES ('1', '0', '4', 'Tidak Selisih (Kompetensi Sesuai Dengan Kebutuhan)', null);
INSERT INTO bobot_profile VALUES ('2', '1', '4.5', 'Kompetensi Individu Kelebihan 1 Level/Tingkat', null);
INSERT INTO bobot_profile VALUES ('3', '2', '5', 'Kompetensi Individu Kelebihan 2 Level/Tingkat', null);
INSERT INTO bobot_profile VALUES ('4', '3', '5.5', 'Kompetensi Individu Kelebihan 3 Level/Tingkat', null);
INSERT INTO bobot_profile VALUES ('5', '4', '6', 'Kompetensi Individu Kelebihan 4 Level/Tingkat', null);
INSERT INTO bobot_profile VALUES ('6', '-1', '3.5', 'Kompetensi Individu Kekurangan 1 Level/Tingkat', null);
INSERT INTO bobot_profile VALUES ('7', '-2', '3', 'Kompetensi Individu Kekurangan 2 Level/Tingkat', null);
INSERT INTO bobot_profile VALUES ('8', '-3', '2.5', 'Kompetensi Individu Kekurangan 3 Level/Tingkat', null);
INSERT INTO bobot_profile VALUES ('9', '-4', '2', 'Kompetensi Individu Kekurangan 4 Level/Tingkat', null);

-- ----------------------------
-- Table structure for `nilai`
-- ----------------------------
DROP TABLE IF EXISTS `nilai`;
CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(11) NOT NULL,
  `nilai_tpa` float DEFAULT NULL,
  `nilai_un` float DEFAULT NULL,
  `nun_ipa` float DEFAULT NULL,
  `nun_ips` float DEFAULT NULL,
  `nun_bing` float DEFAULT NULL,
  `nun_mat` float DEFAULT NULL,
  `nun_bind` float DEFAULT NULL,
  `ipa1` float DEFAULT NULL,
  `ipa2` float DEFAULT NULL,
  `ipa3` float DEFAULT NULL,
  `ipa4` float DEFAULT NULL,
  `ipa5` float DEFAULT NULL,
  `ips1` float DEFAULT NULL,
  `ips2` float DEFAULT NULL,
  `ips3` float DEFAULT NULL,
  `ips4` float DEFAULT NULL,
  `ips5` float DEFAULT NULL,
  `mat1` float DEFAULT NULL,
  `mat2` float DEFAULT NULL,
  `mat3` float DEFAULT NULL,
  `mat4` float DEFAULT NULL,
  `mat5` float DEFAULT NULL,
  `bind1` float DEFAULT NULL,
  `bind2` float DEFAULT NULL,
  `bind3` float DEFAULT NULL,
  `bind4` float DEFAULT NULL,
  `bind5` float DEFAULT NULL,
  `bing1` float DEFAULT NULL,
  `bing2` float DEFAULT NULL,
  `bing3` float DEFAULT NULL,
  `bing4` float DEFAULT NULL,
  `bing5` float DEFAULT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_nilai`,`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nilai
-- ----------------------------
INSERT INTO nilai VALUES ('6', '5', '80', '43', null, '0', null, null, null, '50', '60', '67', '68', '69', '79', '74', '73', '76', '75', null, null, null, null, null, '78', '56', '87', '89', '45', null, null, null, null, null, '2015-01-31 09:58:04');
INSERT INTO nilai VALUES ('8', '8', '70', '60', '0', '0', null, null, '0', '34', '43', '45', '45', '32', '36', '64', '87', '65', '36', '65', '45', null, null, null, '65', '78', '67', '45', '87', null, null, null, null, null, '2015-01-30 07:17:26');
INSERT INTO nilai VALUES ('9', '6', '80', '50', null, null, null, null, null, '50', '67', '86', '56', '76', '87', '70', '79', '68', '74', null, null, null, null, null, '83', '78', '88', '36', '67', null, null, null, null, null, '2015-01-30 07:17:52');
INSERT INTO nilai VALUES ('12', '15', '60', '60', '0', '0', null, null, '0', '66', '69', '78', '80', '85', '75', '76', '78', '79', '77', null, null, null, null, null, '99', '99', '85', '56', '78', null, null, null, null, null, '2015-01-30 07:16:42');
INSERT INTO nilai VALUES ('16', '18', '60', '55', null, null, null, null, null, '0', '60', '60', '60', '60', '45', '34', '78', '87', '54', null, null, null, null, null, '45', '56', '67', '76', '65', null, null, null, null, null, '2015-01-30 18:24:40');
INSERT INTO nilai VALUES ('17', '9', '80', '45', null, null, null, null, null, '60', '69', '69', '0', '0', '69', '69', '69', '0', '0', null, null, null, null, null, '69', '69', '80', '0', '0', null, null, null, null, null, '2015-01-31 09:45:01');
INSERT INTO nilai VALUES ('18', '16', '70', '50', null, null, null, null, null, '88', '0', '0', '0', '0', '88', '0', '0', '0', '0', null, null, null, null, null, '88', '0', '0', '0', '0', null, null, null, null, null, '2015-01-31 09:46:44');
INSERT INTO nilai VALUES ('19', '20', '66', '50', null, null, null, null, null, '70', '70', '70', '70', '70', '60', '60', '60', '60', '60', null, null, null, null, null, '80', '80', '80', '88', '88', null, null, null, null, null, '2015-01-31 09:58:53');
INSERT INTO nilai VALUES ('20', '23', '60', '45', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '2015-01-31 09:56:40');
INSERT INTO nilai VALUES ('21', '24', '45', '45', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '2015-01-31 09:57:02');

-- ----------------------------
-- Table structure for `ppdb`
-- ----------------------------
DROP TABLE IF EXISTS `ppdb`;
CREATE TABLE `ppdb` (
  `id_ppdb` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(12) DEFAULT NULL,
  `tpa` float(10,2) DEFAULT NULL,
  `nilai` float(10,2) DEFAULT NULL,
  `jalur` float(10,2) DEFAULT NULL,
  `id_daftar` varchar(20) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `id_tes` varchar(20) DEFAULT NULL,
  `tgl_tes` datetime DEFAULT NULL,
  `pilihan1` varchar(50) DEFAULT NULL,
  `pilihan2` varchar(50) DEFAULT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id_ppdb`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ppdb
-- ----------------------------
INSERT INTO ppdb VALUES ('7', '5', '80.00', '43.00', '33.30', null, '2015-01-20', null, null, '', '', '0000-00-00 00:00:00');
INSERT INTO ppdb VALUES ('8', '8', '70.00', '60.00', '100.00', null, '2015-02-12', null, null, '', '', '0000-00-00 00:00:00');
INSERT INTO ppdb VALUES ('9', '6', '80.00', '50.00', '33.30', null, '2015-01-01', null, null, '', '', '0000-00-00 00:00:00');
INSERT INTO ppdb VALUES ('10', '15', '60.00', '60.00', '100.00', null, '2015-01-20', null, null, '', '', '0000-00-00 00:00:00');
INSERT INTO ppdb VALUES ('11', '18', '60.00', '55.00', '100.00', null, '2015-01-20', null, null, '', '', '0000-00-00 00:00:00');
INSERT INTO ppdb VALUES ('12', '9', '80.00', '45.00', '100.00', null, '2015-01-20', null, null, '', '', '0000-00-00 00:00:00');
INSERT INTO ppdb VALUES ('13', '16', '70.00', '50.00', '66.60', null, '2015-01-01', null, null, '', '', '0000-00-00 00:00:00');
INSERT INTO ppdb VALUES ('14', '20', '66.00', '50.00', '66.60', null, '2015-01-01', null, null, '', '', '0000-00-00 00:00:00');
INSERT INTO ppdb VALUES ('15', '23', '60.00', '45.00', '66.60', null, '2015-01-01', null, null, '', '', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `rules`
-- ----------------------------
DROP TABLE IF EXISTS `rules`;
CREATE TABLE `rules` (
  `rule_id` int(11) NOT NULL AUTO_INCREMENT,
  `rulename` varchar(50) NOT NULL DEFAULT '0',
  `tpa` varchar(50) NOT NULL DEFAULT '0',
  `jalur` varchar(50) NOT NULL DEFAULT '0',
  `nilai` varchar(100) NOT NULL DEFAULT '0',
  `fuzzy_output` varchar(100) NOT NULL DEFAULT '0',
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`rule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rules
-- ----------------------------
INSERT INTO rules VALUES ('1', 'R1', 'Sedikit', 'Miskin', 'Buruk', 'Tidak Layak', '2015-01-19 12:46:47');
INSERT INTO rules VALUES ('2', 'R2', 'Sedikit', 'Miskin', 'Cukup', 'Tidak Layak', '2015-01-19 12:46:47');
INSERT INTO rules VALUES ('3', 'R3', 'Sedikit', 'Miskin', 'Baik', 'Tidak Layak', '2015-01-19 12:46:47');
INSERT INTO rules VALUES ('4', 'R4', 'Sedikit', 'Reguler', 'Buruk', 'Tidak Layak', '2015-01-19 12:46:47');
INSERT INTO rules VALUES ('5', 'R5', 'Sedikit', 'Reguler', 'Cukup', 'Tidak Layak', '2015-01-19 12:46:47');
INSERT INTO rules VALUES ('6', 'R6', 'Sedikit', 'Reguler', 'Baik', 'Tidak Layak', '2015-01-19 12:46:47');
INSERT INTO rules VALUES ('7', 'R7', 'Sedikit', 'Prestasi', 'Buruk', 'Tidak Layak', '2015-01-19 12:46:47');
INSERT INTO rules VALUES ('8', 'R8', 'Sedikit', 'Prestasi', 'Cukup', 'Layak', '2015-01-19 12:51:36');
INSERT INTO rules VALUES ('9', 'R9', 'Sedikit', 'Prestasi', 'Baik', 'Layak', '2015-01-19 12:51:39');
INSERT INTO rules VALUES ('10', 'R10', 'Sedang', 'Miskin', 'Buruk', 'Tidak Layak', '2015-01-19 12:48:20');
INSERT INTO rules VALUES ('11', 'R11', 'Sedang', 'Miskin', 'Cukup', 'Tidak Layak', '2015-01-19 12:51:47');
INSERT INTO rules VALUES ('12', 'R12', 'Sedang', 'Miskin', 'Baik', 'Layak', '2015-01-19 12:50:33');
INSERT INTO rules VALUES ('13', 'R13', 'Sedang', 'Reguler', 'Buruk', 'Tidak Layak', '2015-01-19 12:48:20');
INSERT INTO rules VALUES ('14', 'R14', 'Sedang', 'Reguler', 'Cukup', 'Layak', '2015-01-19 12:50:33');
INSERT INTO rules VALUES ('15', 'R15', 'Sedang', 'Reguler', 'Baik', 'Layak', '2015-01-19 12:50:33');
INSERT INTO rules VALUES ('16', 'R16', 'Sedang', 'Prestasi', 'Buruk', 'Tidak Layak', '2015-01-19 12:48:20');
INSERT INTO rules VALUES ('17', 'R17', 'Sedang', 'Prestasi', 'Cukup', 'Layak', '2015-01-19 12:50:33');
INSERT INTO rules VALUES ('18', 'R18', 'Sedang', 'Prestasi', 'Baik', 'Layak', '2015-01-19 12:50:33');
INSERT INTO rules VALUES ('19', 'R19', 'Banyak', 'Miskin', 'Buruk', 'Tidak Layak', '2015-01-19 12:48:20');
INSERT INTO rules VALUES ('20', 'R20', 'Banyak', 'Miskin', 'Cukup', 'Layak', '2015-01-19 12:50:33');
INSERT INTO rules VALUES ('21', 'R21', 'Banyak', 'Miskin', 'Baik', 'Layak', '2015-01-19 12:50:33');
INSERT INTO rules VALUES ('22', 'R22', 'Banyak', 'Reguler', 'Buruk', 'Tidak Layak', '2015-01-19 12:48:20');
INSERT INTO rules VALUES ('23', 'R23', 'Banyak', 'Reguler', 'Cukup', 'Layak', '2015-01-19 12:50:33');
INSERT INTO rules VALUES ('24', 'R24', 'Banyak', 'Reguler', 'Baik', 'Layak', '2015-01-19 12:50:33');
INSERT INTO rules VALUES ('25', 'R25', 'Banyak', 'Prestasi', 'Buruk', 'Tidak Layak', '2015-01-19 12:48:20');
INSERT INTO rules VALUES ('26', 'R26', 'Banyak', 'Prestasi', 'Cukup', 'Layak', '2015-01-19 12:50:33');
INSERT INTO rules VALUES ('27', 'R27', 'Banyak', 'Prestasi', 'Baik', 'Layak', '2015-01-19 12:50:33');

-- ----------------------------
-- Table structure for `siswa`
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `asal_sekolah` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `tmp_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `j_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_siswa`,`asal_sekolah`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO siswa VALUES ('5', 'SMP Negeri 1 Sorong,Papua', 'Achmad Adib Romadhani', 'Malang', '1998-11-02', 'L', '', '', '2015-01-28 14:44:48');
INSERT INTO siswa VALUES ('6', 'SMP Negeri 1 Singosari', 'Achmad Zainuri', 'Malang', null, 'L', null, null, '2015-01-28 14:44:40');
INSERT INTO siswa VALUES ('7', 'SMP Sabilillah Malang', 'Adelia Safitri', 'Semarang', null, 'P', null, null, '2015-01-28 14:45:57');
INSERT INTO siswa VALUES ('8', 'SMP Muhammadiyah 3', 'Afifah Hasna', 'Malang', null, 'P', null, null, '2015-01-28 14:45:55');
INSERT INTO siswa VALUES ('9', 'SMP Negeri 5 Malang', 'Agastian Purba Kusuma', 'Malang', null, 'L', null, null, '2015-01-28 14:44:49');
INSERT INTO siswa VALUES ('10', 'SMP Bina Bangsa Malang', 'Ageng Setya Budiman', 'Surabaya', null, 'L', null, null, '2015-01-28 14:45:00');
INSERT INTO siswa VALUES ('11', 'SMP Negeri 1 Singosari', 'Ahmad Arif Andriansyah', 'Malang', null, 'L', null, null, '2015-01-28 14:44:44');
INSERT INTO siswa VALUES ('12', 'SMP Negeri 5 Malang', 'Ahmad Fanani', 'Denpasar', null, 'L', null, null, '2015-01-28 14:45:24');
INSERT INTO siswa VALUES ('13', 'SMP Negeri 1 Singosari', 'Ahmad Luqman Hakim', 'Malang', null, 'L', null, null, '2015-01-28 14:44:45');
INSERT INTO siswa VALUES ('14', 'SMP Lab Malang', 'Ahmad Wildan Imaini', 'Palangkaraya', null, 'L', null, null, '2015-01-28 14:45:04');
INSERT INTO siswa VALUES ('15', 'MTs Negeri 1 Malang', 'Ainun Lila Hibatuloh', 'Malang', null, 'P', null, null, '2015-01-28 14:45:45');
INSERT INTO siswa VALUES ('16', 'SMP Negeri 1 Singosari', 'Akhmad Mughnil Labib', 'Bandung', null, 'L', null, null, '2015-01-28 14:45:06');
INSERT INTO siswa VALUES ('17', 'MTs Negeri 1 Malang', 'Alfiani Nurlaili', 'Malang', null, 'L', null, null, '2015-01-28 14:44:52');
INSERT INTO siswa VALUES ('18', 'SMP Lab Malang', 'Alfin Murtadho', 'Malang', null, 'L', null, null, '2015-01-28 14:44:52');
INSERT INTO siswa VALUES ('19', 'SMP Negeri 1 Batu', 'Amelia Siyanti', 'Jakarta', null, 'L', null, null, '2015-01-28 14:45:11');
INSERT INTO siswa VALUES ('20', 'SMP Muhammadiyah 3', 'Ana Noor Fauziyah', 'Surabaya', null, 'P', null, null, '2015-01-28 14:45:41');
INSERT INTO siswa VALUES ('21', 'SMP Negeri 5 Malang', 'Anggit Esa Mahardika', 'Malang', null, 'L', null, null, '2015-01-28 14:44:47');
INSERT INTO siswa VALUES ('22', 'SMP Negeri 1 Malang', 'Aniefvia Putri Mahardika Agustin', 'Bandung', null, 'L', null, null, '2015-01-28 14:45:14');
INSERT INTO siswa VALUES ('23', 'SMP Negeri 1 Singosari', 'Anik Tri Wahyuni', 'Banjarnegara', null, 'P', null, null, '2015-01-28 14:45:37');
INSERT INTO siswa VALUES ('24', 'MTs Negeri Malang', 'Anisa Dyah Pramesti', 'Malang', null, 'P', null, null, '2015-01-28 14:46:08');

-- ----------------------------
-- Table structure for `standard_gap`
-- ----------------------------
DROP TABLE IF EXISTS `standard_gap`;
CREATE TABLE `standard_gap` (
  `id_gap` int(11) NOT NULL AUTO_INCREMENT,
  `minat` varchar(50) NOT NULL,
  `a_nun` tinyint(4) NOT NULL,
  `b_rapor` tinyint(4) NOT NULL,
  `c_tpa` tinyint(4) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id_gap`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of standard_gap
-- ----------------------------
INSERT INTO standard_gap VALUES ('1', 'IPA', '4', '4', '5', '0000-00-00 00:00:00');
INSERT INTO standard_gap VALUES ('2', 'IPS', '4', '4', '5', '0000-00-00 00:00:00');
INSERT INTO standard_gap VALUES ('3', 'Bahasa', '4', '4', '5', '0000-00-00 00:00:00');

-- ----------------------------
-- View structure for `01-view-himpunan-jalur`
-- ----------------------------
DROP VIEW IF EXISTS `01-view-himpunan-jalur`;
CREATE VIEW `01-view-himpunan-jalur` AS select `a`.`id_ppdb` AS `id`,`a`.`jalur` AS `jalur`,if((`a`.`jalur` = 33.3),1,if(((`a`.`jalur` >= 0) and (`a`.`jalur` <= 66.5)),1,0)) AS `jalur_min`,if((`a`.`jalur` = 66.6),1,if(((`a`.`jalur` > 33.3) and (`a`.`jalur` < 100)),1,0)) AS `jalur_mid`,if((`a`.`jalur` = 100),1,if((`a`.`jalur` between 66.6 and 100),1,0)) AS `jalur_max` from `ppdb` `a`;

-- ----------------------------
-- View structure for `01-view-himpunan-nilai`
-- ----------------------------
DROP VIEW IF EXISTS `01-view-himpunan-nilai`;
CREATE VIEW `01-view-himpunan-nilai` AS select `a`.`id_ppdb` AS `id`,`a`.`nilai` AS `nilai`,if((`a`.`nilai` = 33.3),1,if(((`a`.`nilai` >= 0) and (`a`.`nilai` < 66.6)),1,0)) AS `nilai_min`,if((`a`.`nilai` = 66.6),1,if(((`a`.`nilai` > 33.3) and (`a`.`nilai` < 100)),1,0)) AS `nilai_mid`,if((`a`.`nilai` = 100),1,if((`a`.`nilai` between 66.6 and 100),1,0)) AS `nilai_max` from `ppdb` `a`;

-- ----------------------------
-- View structure for `01-view-himpunan-tpa`
-- ----------------------------
DROP VIEW IF EXISTS `01-view-himpunan-tpa`;
CREATE VIEW `01-view-himpunan-tpa` AS select `a`.`id_ppdb` AS `id`,`a`.`tpa` AS `tpa`,if((`a`.`tpa` = 33.3),1,if(((`a`.`tpa` >= 0) and (`a`.`tpa` < 66.6)),1,0)) AS `tpa_min`,if((`a`.`tpa` = 66.6),1,if(((`a`.`tpa` > 33.3) and (`a`.`tpa` < 100)),1,0)) AS `tpa_mid`,if((`a`.`tpa` = 100),1,if((`a`.`tpa` between 66.6 and 100),1,0)) AS `tpa_max` from `ppdb` `a`;

-- ----------------------------
-- View structure for `01-view-ppdb`
-- ----------------------------
DROP VIEW IF EXISTS `01-view-ppdb`;
CREATE VIEW `01-view-ppdb` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`b`.`nama_siswa` AS `nama_siswa`,`b`.`asal_sekolah` AS `asal_sekolah`,`a`.`tpa` AS `tpa`,`a`.`nilai` AS `nilai`,`a`.`jalur` AS `jalur` from (`ppdb` `a` left join `siswa` `b` on((`b`.`id_siswa` = `a`.`id_siswa`)));

-- ----------------------------
-- View structure for `02-view-himpunan`
-- ----------------------------
DROP VIEW IF EXISTS `02-view-himpunan`;
CREATE VIEW `02-view-himpunan` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`tpa` AS `tpa`,`a`.`jalur` AS `jalur`,`a`.`nilai` AS `nilai`,`c`.`tpa_min` AS `tpa_min`,`c`.`tpa_mid` AS `tpa_mid`,`c`.`tpa_max` AS `tpa_max`,`d`.`jalur_min` AS `jalur_min`,`d`.`jalur_mid` AS `jalur_mid`,`d`.`jalur_max` AS `jalur_max`,`b`.`nilai_min` AS `nilai_min`,`b`.`nilai_mid` AS `nilai_mid`,`b`.`nilai_max` AS `nilai_max` from (((`01-view-ppdb` `a` left join `01-view-himpunan-nilai` `b` on((`b`.`id` = `a`.`id_ppdb`))) left join `01-view-himpunan-tpa` `c` on((`c`.`id` = `a`.`id_ppdb`))) left join `01-view-himpunan-jalur` `d` on((`d`.`id` = `a`.`id_ppdb`)));

-- ----------------------------
-- View structure for `02-view-rules`
-- ----------------------------
DROP VIEW IF EXISTS `02-view-rules`;
CREATE VIEW `02-view-rules` AS select `rules`.`rule_id` AS `rule_id`,`rules`.`rulename` AS `rulename`,`rules`.`tpa` AS `tpa`,`rules`.`jalur` AS `jalur`,`rules`.`nilai` AS `nilai`,`rules`.`fuzzy_output` AS `fuzzy_output` from `rules`;

-- ----------------------------
-- View structure for `03-view-fuzzyfikasi`
-- ----------------------------
DROP VIEW IF EXISTS `03-view-fuzzyfikasi`;
CREATE VIEW `03-view-fuzzyfikasi` AS select `mx`.`id_ppdb` AS `id_ppdb`,`mx`.`id_siswa` AS `id_siswa`,`mx`.`tpa` AS `tpa`,`mx`.`jalur` AS `jalur`,`mx`.`nilai` AS `nilai`,if((`a`.`tpa_min` = 1),round((`mx`.`tpa` / 33.3),2),0) AS `tpamin`,if((`a`.`tpa_mid` = 1),round(((100 - `mx`.`tpa`) / 33.3),2),0) AS `tpamid`,if((`a`.`tpa_max` = 1),round(((`mx`.`tpa` - 66.6) / 33.3),2),0) AS `tpamax`,if((`b`.`jalur_min` = 1),round((`mx`.`jalur` / 33.3),2),0) AS `jalur_min`,if((`b`.`jalur_mid` = 1),round(((100 - `mx`.`jalur`) / 33.3),2),0) AS `jalur_mid`,if((`b`.`jalur_max` = 1),round(((`mx`.`jalur` - 66.6) / 33.3),2),0) AS `jalur_max`,if((`c`.`nilai_min` = 1),round((`mx`.`nilai` / 33.3),2),0) AS `nilai_min`,if((`c`.`nilai_mid` = 1),round(((100 - `mx`.`nilai`) / 33.3),2),0) AS `nilai_mid`,if((`c`.`nilai_max` = 1),round(((`mx`.`nilai` - 66.6) / 33.3),2),0) AS `nilai_max` from (((`01-view-ppdb` `mx` left join `01-view-himpunan-tpa` `a` on((`a`.`id` = `mx`.`id_ppdb`))) left join `01-view-himpunan-jalur` `b` on((`b`.`id` = `mx`.`id_ppdb`))) left join `01-view-himpunan-nilai` `c` on((`c`.`id` = `mx`.`id_ppdb`)));

-- ----------------------------
-- View structure for `03-view-rulebase`
-- ----------------------------
DROP VIEW IF EXISTS `03-view-rulebase`;
CREATE VIEW `03-view-rulebase` AS select `b`.`id_ppdb` AS `id_ppdb`,`b`.`tpa` AS `tpa`,`b`.`jalur` AS `jalur`,`b`.`nilai` AS `nilai`,`a`.`rule_id` AS `rule_id`,`a`.`rulename` AS `rulename`,`a`.`tpa` AS `rule_tpa`,`a`.`jalur` AS `rule_jalur`,`a`.`nilai` AS `rule_nilai`,`a`.`fuzzy_output` AS `fuzzy_output` from (`02-view-rules` `a` join `02-view-himpunan` `b`) where ((if((`b`.`tpa_max` = 1),(`a`.`tpa` = 'Banyak'),'') or if((`b`.`tpa_mid` = 1),(`a`.`tpa` = 'Sedang'),'') or if((`b`.`tpa_min` = 1),(`a`.`tpa` = 'Sedikit'),'')) and (if((`b`.`jalur_max` = 1),(`a`.`jalur` = 'Prestasi'),'') or if((`b`.`jalur_mid` = 1),(`a`.`jalur` = 'Reguler'),'') or if((`b`.`jalur_min` = 1),(`a`.`jalur` = 'Miskin'),'')) and (if((`b`.`nilai_max` = 1),(`a`.`nilai` = 'Baik'),'') or if((`b`.`nilai_mid` = 1),(`a`.`nilai` = 'Cukup'),'') or if((`b`.`nilai_min` = 1),(`a`.`nilai` = 'Buruk'),''))) order by `b`.`id_ppdb`,`a`.`rule_id`;

-- ----------------------------
-- View structure for `04-view-fuzzy-rulebase`
-- ----------------------------
DROP VIEW IF EXISTS `04-view-fuzzy-rulebase`;
CREATE VIEW `04-view-fuzzy-rulebase` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`tpa` AS `tpa`,`a`.`jalur` AS `jalur`,`a`.`nilai` AS `nilai`,`a`.`rule_id` AS `rule_id`,`a`.`rulename` AS `rulename`,`a`.`rule_tpa` AS `tpa_rule`,`a`.`rule_jalur` AS `jalur_rule`,`a`.`rule_nilai` AS `nilai_rule`,if((`a`.`rule_tpa` = 'Banyak'),`b`.`tpamax`,if((`a`.`rule_tpa` = 'Sedang'),`b`.`tpamid`,`b`.`tpamin`)) AS `fuzz_tpa`,if((`a`.`rule_jalur` = 'Prestasi'),`b`.`jalur_max`,if((`a`.`rule_jalur` = 'Reguler'),`b`.`jalur_mid`,`b`.`jalur_min`)) AS `fuzz_jalur`,if((`a`.`rule_nilai` = 'Baik'),`b`.`nilai_max`,if((`a`.`rule_nilai` = 'Cukup'),`b`.`nilai_mid`,`b`.`nilai_min`)) AS `fuzz_nilai`,`a`.`fuzzy_output` AS `fuzzy_output` from (`03-view-rulebase` `a` left join `03-view-fuzzyfikasi` `b` on((`b`.`id_ppdb` = `a`.`id_ppdb`)));

-- ----------------------------
-- View structure for `04-view-minalphapredikat`
-- ----------------------------
DROP VIEW IF EXISTS `04-view-minalphapredikat`;
CREATE VIEW `04-view-minalphapredikat` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`rule_id` AS `rule_id`,`a`.`rulename` AS `rulename`,`a`.`fuzzy_output` AS `fuzzy_output`,`a`.`fuzz_tpa` AS `fuzz_tpa`,`a`.`fuzz_jalur` AS `fuzz_jalur`,`a`.`fuzz_nilai` AS `fuzz_nilai`,least(`a`.`fuzz_tpa`,`a`.`fuzz_jalur`,`a`.`fuzz_nilai`) AS `min_alpha` from `04-view-fuzzy-rulebase` `a`;

-- ----------------------------
-- View structure for `05-view-diagram-z`
-- ----------------------------
DROP VIEW IF EXISTS `05-view-diagram-z`;
CREATE VIEW `05-view-diagram-z` AS select `a`.`id_ppdb` AS `id_ppdb`,`b`.`nama_siswa` AS `nama_siswa`,`b`.`tpa` AS `tpa`,`b`.`nilai` AS `nilai`,`b`.`jalur` AS `jalur`,`a`.`rule_id` AS `rule_id`,`a`.`rulename` AS `rulename`,`a`.`fuzzy_output` AS `fuzzy_output`,`a`.`min_alpha` AS `min_alpha`,if((`a`.`fuzzy_output` = 'Tidak Layak'),60,100) AS `z`,(`a`.`min_alpha` * if((`a`.`fuzzy_output` = 'Tidak Layak'),60,100)) AS `alpha_z` from (`04-view-minalphapredikat` `a` join `01-view-ppdb` `b` on((`b`.`id_ppdb` = `a`.`id_ppdb`)));

-- ----------------------------
-- View structure for `06-view-weighted-average`
-- ----------------------------
DROP VIEW IF EXISTS `06-view-weighted-average`;
CREATE VIEW `06-view-weighted-average` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`nama_siswa` AS `nama_siswa`,`a`.`min_alpha` AS `min_alpha`,`a`.`z` AS `z`,`a`.`alpha_z` AS `alpha_z`,sum(`a`.`min_alpha`) AS `sum_apredikat`,sum(`a`.`alpha_z`) AS `sum_apredikat_z` from `05-view-diagram-z` `a` group by `a`.`id_ppdb`;

-- ----------------------------
-- View structure for `07-view-fuzzy-output`
-- ----------------------------
DROP VIEW IF EXISTS `07-view-fuzzy-output`;
CREATE VIEW `07-view-fuzzy-output` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`nama_siswa` AS `nama_siswa`,`a`.`min_alpha` AS `min_alpha`,`a`.`z` AS `z`,`a`.`alpha_z` AS `alpha_z`,`a`.`sum_apredikat` AS `sum_apredikat`,`a`.`sum_apredikat_z` AS `sum_apredikat_z`,round((`a`.`sum_apredikat_z` / `a`.`sum_apredikat`),2) AS `defuzzy` from `06-view-weighted-average` `a`;

-- ----------------------------
-- View structure for `08-view-fuzzy-sugeno`
-- ----------------------------
DROP VIEW IF EXISTS `08-view-fuzzy-sugeno`;
CREATE VIEW `08-view-fuzzy-sugeno` AS select `b`.`id_ppdb` AS `id_ppdb`,`b`.`id_siswa` AS `id_siswa`,`b`.`nama_siswa` AS `nama_siswa`,`b`.`asal_sekolah` AS `asal_sekolah`,`b`.`tpa` AS `tpa`,`b`.`nilai` AS `nilai`,`b`.`jalur` AS `jalur`,`a`.`z` AS `z`,`a`.`alpha_z` AS `alpha_z`,`a`.`sum_apredikat` AS `sum_apredikat`,`a`.`sum_apredikat_z` AS `sum_apredikat_z`,`a`.`defuzzy` AS `defuzzy`,if((`a`.`defuzzy` between 0 and 60),'Tidak Layak',if((`a`.`defuzzy` between 60 and 100),'Layak',0)) AS `fuzzy_output` from (`07-view-fuzzy-output` `a` left join `01-view-ppdb` `b` on((`a`.`id_ppdb` = `b`.`id_ppdb`))) order by `a`.`defuzzy` desc,`b`.`tpa` desc,`b`.`nilai` desc,`b`.`jalur` desc;

-- ----------------------------
-- View structure for `09_next_to_profilematching`
-- ----------------------------
DROP VIEW IF EXISTS `09_next_to_profilematching`;
CREATE VIEW `09_next_to_profilematching` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`a`.`tpa` AS `tpa`,`a`.`nilai` AS `nilai`,`a`.`jalur` AS `jalur`,`a`.`defuzzy` AS `defuzzy`,`a`.`fuzzy_output` AS `fuzzy_output` from `08-view-fuzzy-sugeno` `a` where ((`a`.`defuzzy` > 60) and (`a`.`fuzzy_output` = 'Layak'));

-- ----------------------------
-- View structure for `10-nilai-bindrata`
-- ----------------------------
DROP VIEW IF EXISTS `10-nilai-bindrata`;
CREATE VIEW `10-nilai-bindrata` AS select `nilai`.`id_nilai` AS `id_nilai`,`nilai`.`id_siswa` AS `id_siswa`,(((((`nilai`.`bind1` + `nilai`.`bind2`) + `nilai`.`bind3`) + `nilai`.`bind4`) + `nilai`.`bind5`) / 5) AS `nbindrata` from `nilai`;

-- ----------------------------
-- View structure for `10-nilai-iparata`
-- ----------------------------
DROP VIEW IF EXISTS `10-nilai-iparata`;
CREATE VIEW `10-nilai-iparata` AS select `nilai`.`id_nilai` AS `id_nilai`,`nilai`.`id_siswa` AS `id_siswa`,(((((`nilai`.`ipa1` + `nilai`.`ipa2`) + `nilai`.`ipa3`) + `nilai`.`ipa4`) + `nilai`.`ipa5`) / 5) AS `niparata` from `nilai`;

-- ----------------------------
-- View structure for `10-nilai-ipsrata`
-- ----------------------------
DROP VIEW IF EXISTS `10-nilai-ipsrata`;
CREATE VIEW `10-nilai-ipsrata` AS select `nilai`.`id_nilai` AS `id_nilai`,`nilai`.`id_siswa` AS `id_siswa`,(((((`nilai`.`ips1` + `nilai`.`ips2`) + `nilai`.`ips3`) + `nilai`.`ips4`) + `nilai`.`ips5`) / 5) AS `nipsrata` from `nilai`;

-- ----------------------------
-- View structure for `11-nrata`
-- ----------------------------
DROP VIEW IF EXISTS `11-nrata`;
CREATE VIEW `11-nrata` AS select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`c`.`niparata` AS `niparata`,`d`.`nipsrata` AS `nipsrata`,`b`.`nbindrata` AS `nbindrata` from (((`nilai` `a` left join `10-nilai-bindrata` `b` on((`b`.`id_nilai` = `a`.`id_nilai`))) left join `10-nilai-iparata` `c` on((`c`.`id_nilai` = `a`.`id_nilai`))) left join `10-nilai-ipsrata` `d` on((`d`.`id_nilai` = `a`.`id_nilai`)));

-- ----------------------------
-- View structure for `12_1_sub_raporipa`
-- ----------------------------
DROP VIEW IF EXISTS `12_1_sub_raporipa`;
CREATE VIEW `12_1_sub_raporipa` AS select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`niparata` AS `niparata`,if(((`a`.`niparata` >= 0) and (`a`.`niparata` < 21)),'Sangat Rendah',if(((`a`.`niparata` >= 21) and (`a`.`niparata` < 60)),'Rendah',if(((`a`.`niparata` >= 60) and (`a`.`niparata` < 71)),'Sedang',if(((`a`.`niparata` >= 71) and (`a`.`niparata` < 81)),'Tinggi',if(((`a`.`niparata` >= 81) and (`a`.`niparata` <= 100)),'Sangat Tinggi',''))))) AS `subnilai`,if(((`a`.`niparata` >= 0) and (`a`.`niparata` < 21)),1,if(((`a`.`niparata` >= 21) and (`a`.`niparata` < 60)),2,if(((`a`.`niparata` >= 60) and (`a`.`niparata` < 71)),3,if(((`a`.`niparata` >= 71) and (`a`.`niparata` < 81)),4,if(((`a`.`niparata` >= 81) and (`a`.`niparata` <= 100)),5,0))))) AS `subbobot` from `10-nilai-iparata` `a`;

-- ----------------------------
-- View structure for `12_2_sub_raporips`
-- ----------------------------
DROP VIEW IF EXISTS `12_2_sub_raporips`;
CREATE VIEW `12_2_sub_raporips` AS select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nipsrata` AS `nipsrata`,if(((`a`.`nipsrata` >= 0) and (`a`.`nipsrata` < 21)),'Sangat Rendah',if(((`a`.`nipsrata` >= 21) and (`a`.`nipsrata` < 60)),'Rendah',if(((`a`.`nipsrata` >= 60) and (`a`.`nipsrata` < 71)),'Sedang',if(((`a`.`nipsrata` >= 71) and (`a`.`nipsrata` < 81)),'Tinggi',if(((`a`.`nipsrata` >= 81) and (`a`.`nipsrata` <= 100)),'Sangat Tinggi',''))))) AS `subnilai`,if(((`a`.`nipsrata` >= 0) and (`a`.`nipsrata` < 21)),1,if(((`a`.`nipsrata` >= 21) and (`a`.`nipsrata` < 60)),2,if(((`a`.`nipsrata` >= 60) and (`a`.`nipsrata` < 71)),3,if(((`a`.`nipsrata` >= 71) and (`a`.`nipsrata` < 81)),4,if(((`a`.`nipsrata` >= 81) and (`a`.`nipsrata` <= 100)),5,0))))) AS `subbobot` from `10-nilai-ipsrata` `a`;

-- ----------------------------
-- View structure for `12_3_sub_raporbind`
-- ----------------------------
DROP VIEW IF EXISTS `12_3_sub_raporbind`;
CREATE VIEW `12_3_sub_raporbind` AS select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nbindrata` AS `nbindrata`,if(((`a`.`nbindrata` >= 0) and (`a`.`nbindrata` < 21)),'Sangat Rendah',if(((`a`.`nbindrata` >= 21) and (`a`.`nbindrata` < 60)),'Rendah',if(((`a`.`nbindrata` >= 60) and (`a`.`nbindrata` < 71)),'Sedang',if(((`a`.`nbindrata` >= 71) and (`a`.`nbindrata` < 81)),'Tinggi',if(((`a`.`nbindrata` >= 81) and (`a`.`nbindrata` <= 100)),'Sangat Tinggi',''))))) AS `subnilai`,if(((`a`.`nbindrata` >= 0) and (`a`.`nbindrata` < 21)),1,if(((`a`.`nbindrata` >= 21) and (`a`.`nbindrata` < 60)),2,if(((`a`.`nbindrata` >= 60) and (`a`.`nbindrata` < 71)),3,if(((`a`.`nbindrata` >= 71) and (`a`.`nbindrata` < 81)),4,if(((`a`.`nbindrata` >= 81) and (`a`.`nbindrata` <= 100)),5,0))))) AS `subbobot` from `10-nilai-bindrata` `a`;

-- ----------------------------
-- View structure for `12_3_sub_raporbind_copy`
-- ----------------------------
DROP VIEW IF EXISTS `12_3_sub_raporbind_copy`;
CREATE VIEW `12_3_sub_raporbind_copy` AS select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nbindrata` AS `nbindrata`,if(((`a`.`nbindrata` >= 0) and (`a`.`nbindrata` < 21)),'Sangat Rendah',if(((`a`.`nbindrata` >= 21) and (`a`.`nbindrata` < 60)),'Rendah',if(((`a`.`nbindrata` >= 60) and (`a`.`nbindrata` < 71)),'Sedang',if(((`a`.`nbindrata` >= 71) and (`a`.`nbindrata` < 81)),'Tinggi',if(((`a`.`nbindrata` >= 81) and (`a`.`nbindrata` <= 100)),'Sangat Tinggi',''))))) AS `subnilai`,if(((`a`.`nbindrata` >= 0) and (`a`.`nbindrata` < 21)),1,if(((`a`.`nbindrata` >= 21) and (`a`.`nbindrata` < 60)),2,if(((`a`.`nbindrata` >= 60) and (`a`.`nbindrata` < 71)),3,if(((`a`.`nbindrata` >= 71) and (`a`.`nbindrata` < 81)),4,if(((`a`.`nbindrata` >= 81) and (`a`.`nbindrata` <= 100)),5,0))))) AS `subbobot` from `10-nilai-bindrata` `a`;

-- ----------------------------
-- View structure for `12_4_sub_nun_all`
-- ----------------------------
DROP VIEW IF EXISTS `12_4_sub_nun_all`;
CREATE VIEW `12_4_sub_nun_all` AS select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nilai_un` AS `nilai_un`,if(((`a`.`nilai_un` >= 0) and (`a`.`nilai_un` < 21)),'Sangat Rendah',if(((`a`.`nilai_un` >= 21) and (`a`.`nilai_un` < 60)),'Rendah',if(((`a`.`nilai_un` >= 60) and (`a`.`nilai_un` < 71)),'Sedang',if(((`a`.`nilai_un` >= 71) and (`a`.`nilai_un` < 81)),'Tinggi',if(((`a`.`nilai_un` >= 81) and (`a`.`nilai_un` <= 100)),'Sangat Tinggi',''))))) AS `subnilai`,if(((`a`.`nilai_un` >= 0) and (`a`.`nilai_un` < 21)),1,if(((`a`.`nilai_un` >= 21) and (`a`.`nilai_un` < 60)),2,if(((`a`.`nilai_un` >= 60) and (`a`.`nilai_un` < 71)),3,if(((`a`.`nilai_un` >= 71) and (`a`.`nilai_un` < 81)),4,if(((`a`.`nilai_un` >= 81) and (`a`.`nilai_un` <= 100)),5,0))))) AS `subbobot` from `nilai` `a`;

-- ----------------------------
-- View structure for `12_5_sub_tpa_all`
-- ----------------------------
DROP VIEW IF EXISTS `12_5_sub_tpa_all`;
CREATE VIEW `12_5_sub_tpa_all` AS select `a`.`id_nilai` AS `id_nilai`,`a`.`id_siswa` AS `id_siswa`,`a`.`nilai_tpa` AS `nilai_tpa`,if(((`a`.`nilai_tpa` >= 0) and (`a`.`nilai_tpa` < 21)),'Sangat Rendah',if(((`a`.`nilai_tpa` >= 21) and (`a`.`nilai_tpa` < 60)),'Rendah',if(((`a`.`nilai_tpa` >= 60) and (`a`.`nilai_tpa` < 71)),'Sedang',if(((`a`.`nilai_tpa` >= 71) and (`a`.`nilai_tpa` < 81)),'Tinggi',if(((`a`.`nilai_tpa` >= 81) and (`a`.`nilai_tpa` <= 100)),'Sangat Tinggi',''))))) AS `subnilai`,if(((`a`.`nilai_tpa` >= 0) and (`a`.`nilai_tpa` < 21)),1,if(((`a`.`nilai_tpa` >= 21) and (`a`.`nilai_tpa` < 60)),2,if(((`a`.`nilai_tpa` >= 60) and (`a`.`nilai_tpa` < 71)),3,if(((`a`.`nilai_tpa` >= 71) and (`a`.`nilai_tpa` < 81)),4,if(((`a`.`nilai_tpa` >= 81) and (`a`.`nilai_tpa` <= 100)),5,0))))) AS `subbobot` from `nilai` `a`;

-- ----------------------------
-- View structure for `13_1_matching_bobot_ipa`
-- ----------------------------
DROP VIEW IF EXISTS `13_1_matching_bobot_ipa`;
CREATE VIEW `13_1_matching_bobot_ipa` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`c`.`subbobot` AS `bobot_un`,`b`.`subbobot` AS `bobot_ipa`,`d`.`subbobot` AS `bobot_tpa` from (((`09_next_to_profilematching` `a` left join `12_1_sub_raporipa` `b` on((`b`.`id_siswa` = `a`.`id_siswa`))) left join `12_4_sub_nun_all` `c` on((`c`.`id_siswa` = `a`.`id_siswa`))) left join `12_5_sub_tpa_all` `d` on((`d`.`id_siswa` = `a`.`id_siswa`)));

-- ----------------------------
-- View structure for `13_2_matching_bobot_ips`
-- ----------------------------
DROP VIEW IF EXISTS `13_2_matching_bobot_ips`;
CREATE VIEW `13_2_matching_bobot_ips` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`c`.`subbobot` AS `bobot_un`,`b`.`subbobot` AS `bobot_ips`,`d`.`subbobot` AS `bobot_tpa` from (((`09_next_to_profilematching` `a` left join `12_4_sub_nun_all` `c` on((`c`.`id_siswa` = `a`.`id_siswa`))) left join `12_5_sub_tpa_all` `d` on((`d`.`id_siswa` = `a`.`id_siswa`))) left join `12_2_sub_raporips` `b` on((`b`.`id_siswa` = `a`.`id_siswa`)));

-- ----------------------------
-- View structure for `13_3_matching_bobot_bind`
-- ----------------------------
DROP VIEW IF EXISTS `13_3_matching_bobot_bind`;
CREATE VIEW `13_3_matching_bobot_bind` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`c`.`subbobot` AS `bobot_un`,`b`.`subbobot` AS `bobot_bind`,`d`.`subbobot` AS `bobot_tpa` from (((`09_next_to_profilematching` `a` left join `12_4_sub_nun_all` `c` on((`c`.`id_siswa` = `a`.`id_siswa`))) left join `12_5_sub_tpa_all` `d` on((`d`.`id_siswa` = `a`.`id_siswa`))) left join `12_3_sub_raporbind` `b` on((`b`.`id_siswa` = `a`.`id_siswa`)));

-- ----------------------------
-- View structure for `13_4_matching_bobot_all`
-- ----------------------------
DROP VIEW IF EXISTS `13_4_matching_bobot_all`;
CREATE VIEW `13_4_matching_bobot_all` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`b`.`bobot_un` AS `bobot_un`,`c`.`bobot_ipa` AS `bobot_ipa`,`d`.`bobot_ips` AS `bobot_ips`,`b`.`bobot_bind` AS `bobot_bind`,`c`.`bobot_tpa` AS `bobot_tpa` from (((`09_next_to_profilematching` `a` left join `13_3_matching_bobot_bind` `b` on((`b`.`id_siswa` = `a`.`id_siswa`))) left join `13_1_matching_bobot_ipa` `c` on((`c`.`id_siswa` = `a`.`id_siswa`))) left join `13_2_matching_bobot_ips` `d` on((`d`.`id_siswa` = `a`.`id_siswa`)));

-- ----------------------------
-- View structure for `13_matching_nilai_bind`
-- ----------------------------
DROP VIEW IF EXISTS `13_matching_nilai_bind`;
CREATE VIEW `13_matching_nilai_bind` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`a`.`jalur` AS `jalur`,`d`.`nilai_tpa` AS `tpa`,`d`.`subnilai` AS `subnilai_tpa`,`d`.`subbobot` AS `subbobot_tpa`,`c`.`nilai_un` AS `nun`,`c`.`subnilai` AS `subnilai_un`,`c`.`subbobot` AS `subbobot_un`,`b`.`nbindrata` AS `nbindrata`,`b`.`subnilai` AS `subnilai_bind`,`b`.`subbobot` AS `subbobot_bind` from (((`09_next_to_profilematching` `a` left join `12_4_sub_nun_all` `c` on((`c`.`id_siswa` = `a`.`id_siswa`))) left join `12_5_sub_tpa_all` `d` on((`d`.`id_siswa` = `a`.`id_siswa`))) left join `12_3_sub_raporbind` `b` on((`b`.`id_siswa` = `a`.`id_siswa`)));

-- ----------------------------
-- View structure for `13_matching_nilai_ipa`
-- ----------------------------
DROP VIEW IF EXISTS `13_matching_nilai_ipa`;
CREATE VIEW `13_matching_nilai_ipa` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`a`.`jalur` AS `jalur`,`d`.`nilai_tpa` AS `tpa`,`d`.`subnilai` AS `subnilai_tpa`,`d`.`subbobot` AS `subbobot_tpa`,`c`.`nilai_un` AS `nun`,`c`.`subnilai` AS `subnilai_un`,`c`.`subbobot` AS `subbobot_un`,`b`.`niparata` AS `niparata`,`b`.`subnilai` AS `subnilai_nipa`,`b`.`subbobot` AS `subbobot_nipa` from (((`09_next_to_profilematching` `a` left join `12_1_sub_raporipa` `b` on((`b`.`id_siswa` = `a`.`id_siswa`))) left join `12_4_sub_nun_all` `c` on((`c`.`id_siswa` = `a`.`id_siswa`))) left join `12_5_sub_tpa_all` `d` on((`d`.`id_siswa` = `a`.`id_siswa`)));

-- ----------------------------
-- View structure for `13_matching_nilai_ips`
-- ----------------------------
DROP VIEW IF EXISTS `13_matching_nilai_ips`;
CREATE VIEW `13_matching_nilai_ips` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`a`.`jalur` AS `jalur`,`d`.`nilai_tpa` AS `tpa`,`d`.`subnilai` AS `subnilai_tpa`,`d`.`subbobot` AS `subbobot_tpa`,`c`.`nilai_un` AS `nun`,`c`.`subnilai` AS `subnilai_un`,`c`.`subbobot` AS `subbobot_un`,`b`.`nipsrata` AS `nipsrata`,`b`.`subnilai` AS `subnilai_ips`,`b`.`subbobot` AS `subbobot_ips` from (((`09_next_to_profilematching` `a` left join `12_4_sub_nun_all` `c` on((`c`.`id_siswa` = `a`.`id_siswa`))) left join `12_5_sub_tpa_all` `d` on((`d`.`id_siswa` = `a`.`id_siswa`))) left join `12_2_sub_raporips` `b` on((`b`.`id_siswa` = `a`.`id_siswa`)));

-- ----------------------------
-- View structure for `14-gap-profile-matching`
-- ----------------------------
DROP VIEW IF EXISTS `14-gap-profile-matching`;
CREATE VIEW `14-gap-profile-matching` AS select `b`.`id_ppdb` AS `id_ppdb`,`b`.`id_siswa` AS `id_siswa`,`b`.`bobot_un` AS `bobot_un`,`b`.`bobot_ipa` AS `bobot_ipa`,`b`.`bobot_ips` AS `bobot_ips`,`b`.`bobot_bind` AS `bobot_bind`,`b`.`bobot_tpa` AS `bobot_tpa`,`a`.`a_nun` AS `a_nun`,`a`.`b_rapor` AS `b_rapor`,`a`.`c_tpa` AS `c_tpa`,(`b`.`bobot_un` - `a`.`a_nun`) AS `gap_nun`,(`b`.`bobot_ipa` - `a`.`b_rapor`) AS `gap_nipa`,(`b`.`bobot_ips` - `a`.`b_rapor`) AS `gap_nips`,(`b`.`bobot_bind` - `a`.`b_rapor`) AS `gap_bind`,(`b`.`bobot_tpa` - `a`.`c_tpa`) AS `gap_tpa` from (`standard_gap` `a` join `13_4_matching_bobot_all` `b`) group by `b`.`id_siswa`;

-- ----------------------------
-- View structure for `15_konversi_bobot_bind`
-- ----------------------------
DROP VIEW IF EXISTS `15_konversi_bobot_bind`;
CREATE VIEW `15_konversi_bobot_bind` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`b`.`id_bobot` AS `id_bobot`,`a`.`gap_bind` AS `gap_bind`,`b`.`selisih` AS `selisih`,`b`.`bobot` AS `bobot` from (`14-gap-profile-matching` `a` left join `bobot_profile` `b` on((`b`.`selisih` = `a`.`gap_bind`)));

-- ----------------------------
-- View structure for `15_konversi_bobot_ipa`
-- ----------------------------
DROP VIEW IF EXISTS `15_konversi_bobot_ipa`;
CREATE VIEW `15_konversi_bobot_ipa` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`b`.`id_bobot` AS `id_bobot`,`a`.`gap_nipa` AS `gap_nipa`,`b`.`selisih` AS `selisih`,`b`.`bobot` AS `bobot` from (`14-gap-profile-matching` `a` left join `bobot_profile` `b` on((`b`.`selisih` = `a`.`gap_nipa`)));

-- ----------------------------
-- View structure for `15_konversi_bobot_ips`
-- ----------------------------
DROP VIEW IF EXISTS `15_konversi_bobot_ips`;
CREATE VIEW `15_konversi_bobot_ips` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`b`.`id_bobot` AS `id_bobot`,`a`.`gap_nips` AS `gap_nips`,`b`.`selisih` AS `selisih`,`b`.`bobot` AS `bobot` from (`14-gap-profile-matching` `a` left join `bobot_profile` `b` on((`b`.`selisih` = `a`.`gap_nips`)));

-- ----------------------------
-- View structure for `15_konversi_bobot_nun`
-- ----------------------------
DROP VIEW IF EXISTS `15_konversi_bobot_nun`;
CREATE VIEW `15_konversi_bobot_nun` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`b`.`id_bobot` AS `id_bobot`,`a`.`gap_nun` AS `gap_nun`,`b`.`selisih` AS `selisih`,`b`.`bobot` AS `bobot` from (`14-gap-profile-matching` `a` left join `bobot_profile` `b` on((`b`.`selisih` = `a`.`gap_nun`)));

-- ----------------------------
-- View structure for `15_konversi_bobot_tpa`
-- ----------------------------
DROP VIEW IF EXISTS `15_konversi_bobot_tpa`;
CREATE VIEW `15_konversi_bobot_tpa` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`b`.`id_bobot` AS `id_bobot`,`a`.`gap_tpa` AS `gap_tpa`,`b`.`selisih` AS `selisih`,`b`.`bobot` AS `bobot` from (`14-gap-profile-matching` `a` left join `bobot_profile` `b` on((`b`.`selisih` = `a`.`gap_tpa`)));

-- ----------------------------
-- View structure for `16_thefactors`
-- ----------------------------
DROP VIEW IF EXISTS `16_thefactors`;
CREATE VIEW `16_thefactors` AS select `x`.`id_ppdb` AS `id_ppdb`,`x`.`id_siswa` AS `id_siswa`,`a`.`bobot` AS `a_nun`,`b`.`bobot` AS `b_nrapor`,`c`.`bobot` AS `c_ntpa` from (((`14-gap-profile-matching` `x` left join `15_konversi_bobot_nun` `a` on((`a`.`id_siswa` = `x`.`id_siswa`))) left join `15_konversi_bobot_ipa` `b` on((`b`.`id_siswa` = `x`.`id_siswa`))) left join `15_konversi_bobot_tpa` `c` on((`c`.`id_siswa` = `x`.`id_siswa`)));

-- ----------------------------
-- View structure for `16_the_factors_all`
-- ----------------------------
DROP VIEW IF EXISTS `16_the_factors_all`;
CREATE VIEW `16_the_factors_all` AS select `x`.`id_ppdb` AS `id_ppdb`,`x`.`id_siswa` AS `id_siswa`,`a`.`bobot` AS `a_nun`,`b`.`bobot` AS `b_nrapor_ipa`,`d`.`bobot` AS `b_nrapor_ips`,`e`.`bobot` AS `b_nrapor_bind`,`c`.`bobot` AS `c_ntpa` from (((((`14-gap-profile-matching` `x` left join `15_konversi_bobot_nun` `a` on((`a`.`id_siswa` = `x`.`id_siswa`))) left join `15_konversi_bobot_ipa` `b` on((`b`.`id_siswa` = `x`.`id_siswa`))) left join `15_konversi_bobot_tpa` `c` on((`c`.`id_siswa` = `x`.`id_siswa`))) left join `15_konversi_bobot_ips` `d` on((`d`.`id_siswa` = `x`.`id_siswa`))) left join `15_konversi_bobot_bind` `e` on((`e`.`id_siswa` = `x`.`id_siswa`)));

-- ----------------------------
-- View structure for `17_ncf_scf_bind`
-- ----------------------------
DROP VIEW IF EXISTS `17_ncf_scf_bind`;
CREATE VIEW `17_ncf_scf_bind` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`a`.`a_nun` AS `a_nun`,`a`.`b_nrapor_bind` AS `b_nrapor_bind`,`a`.`c_ntpa` AS `c_ntpa`,((`a`.`b_nrapor_bind` + `a`.`c_ntpa`) / 2) AS `ncf_bind`,(`a`.`a_nun` / 2) AS `scf_bind` from `16_the_factors_all` `a`;

-- ----------------------------
-- View structure for `17_ncf_scf_ipa`
-- ----------------------------
DROP VIEW IF EXISTS `17_ncf_scf_ipa`;
CREATE VIEW `17_ncf_scf_ipa` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`a`.`a_nun` AS `a_nun`,`a`.`b_nrapor_ipa` AS `b_nrapor_ipa`,`a`.`c_ntpa` AS `c_ntpa`,((`a`.`b_nrapor_ipa` + `a`.`c_ntpa`) / 2) AS `ncf_ipa`,(`a`.`a_nun` / 2) AS `scf_ipa` from `16_the_factors_all` `a`;

-- ----------------------------
-- View structure for `17_ncf_scf_ips`
-- ----------------------------
DROP VIEW IF EXISTS `17_ncf_scf_ips`;
CREATE VIEW `17_ncf_scf_ips` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`a`.`a_nun` AS `a_nun`,`a`.`b_nrapor_ips` AS `b_nrapor_ips`,`a`.`c_ntpa` AS `c_ntpa`,((`a`.`b_nrapor_ips` + `a`.`c_ntpa`) / 2) AS `ncf_ips`,(`a`.`a_nun` / 2) AS `scf_ips` from `16_the_factors_all` `a`;

-- ----------------------------
-- View structure for `18_n_rank_bind`
-- ----------------------------
DROP VIEW IF EXISTS `18_n_rank_bind`;
CREATE VIEW `18_n_rank_bind` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`a`.`a_nun` AS `a_nun`,`a`.`b_nrapor_bind` AS `b_nrapor_bind`,`a`.`c_ntpa` AS `c_ntpa`,`a`.`ncf_bind` AS `ncf_bind`,`a`.`scf_bind` AS `scf_bind`,(`a`.`ncf_bind` + `a`.`scf_bind`) AS `nilai_n` from `17_ncf_scf_bind` `a` order by (`a`.`ncf_bind` + `a`.`scf_bind`) desc,`a`.`a_nun` desc,`a`.`c_ntpa` desc,`a`.`b_nrapor_bind` desc;

-- ----------------------------
-- View structure for `18_n_rank_ipa`
-- ----------------------------
DROP VIEW IF EXISTS `18_n_rank_ipa`;
CREATE VIEW `18_n_rank_ipa` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`a`.`a_nun` AS `a_nun`,`a`.`b_nrapor_ipa` AS `b_nrapor_ipa`,`a`.`c_ntpa` AS `c_ntpa`,`a`.`ncf_ipa` AS `ncf_ipa`,`a`.`scf_ipa` AS `scf_ipa`,(`a`.`ncf_ipa` + `a`.`scf_ipa`) AS `nilai_n` from `17_ncf_scf_ipa` `a` order by (`a`.`ncf_ipa` + `a`.`scf_ipa`) desc;

-- ----------------------------
-- View structure for `18_n_rank_ips`
-- ----------------------------
DROP VIEW IF EXISTS `18_n_rank_ips`;
CREATE VIEW `18_n_rank_ips` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`a`.`a_nun` AS `a_nun`,`a`.`b_nrapor_ips` AS `b_nrapor_ips`,`a`.`c_ntpa` AS `c_ntpa`,`a`.`ncf_ips` AS `ncf_ips`,`a`.`scf_ips` AS `scf_ips`,(`a`.`ncf_ips` + `a`.`scf_ips`) AS `nilai_n` from `17_ncf_scf_ips` `a` order by (`a`.`ncf_ips` + `a`.`scf_ips`) desc,`a`.`a_nun` desc,`a`.`c_ntpa` desc,`a`.`b_nrapor_ips` desc;

-- ----------------------------
-- View structure for `19_final_n`
-- ----------------------------
DROP VIEW IF EXISTS `19_final_n`;
CREATE VIEW `19_final_n` AS select `a`.`id_ppdb` AS `id_ppdb`,`a`.`id_siswa` AS `id_siswa`,`a`.`tpa` AS `tpa`,`a`.`nilai` AS `nilai`,`a`.`jalur` AS `jalur`,`a`.`fuzzy_output` AS `fuzzy_output`,`d`.`nilai_n` AS `nipa`,`b`.`nilai_n` AS `nips`,`c`.`nilai_n` AS `nbind` from (((`09_next_to_profilematching` `a` left join `18_n_rank_ipa` `d` on((`d`.`id_siswa` = `a`.`id_siswa`))) left join `18_n_rank_ips` `b` on((`b`.`id_siswa` = `a`.`id_siswa`))) left join `18_n_rank_bind` `c` on((`c`.`id_siswa` = `a`.`id_siswa`))) order by `d`.`nilai_n` desc,`b`.`nilai_n` desc,`c`.`nilai_n` desc;

-- ----------------------------
-- View structure for `20-peminatan-bahasa`
-- ----------------------------
DROP VIEW IF EXISTS `20-peminatan-bahasa`;
CREATE VIEW `20-peminatan-bahasa` AS select `a`.`id_siswa` AS `id_siswa`,`b`.`nama_siswa` AS `nama_siswa`,`b`.`asal_sekolah` AS `asal_sekolah`,`b`.`j_kelamin` AS `j_kelamin`,`a`.`fuzzy_output` AS `fuzzy_output`,`a`.`jalur` AS `jalur`,`a`.`nilai` AS `aspek_a_un`,`x`.`nbindrata` AS `aspek_b_rapor`,`a`.`tpa` AS `aspek_c_tpa`,`c`.`ncf_bind` AS `ncf_bind`,`c`.`scf_bind` AS `scf_bind`,`c`.`nilai_n` AS `nilai_n` from (((`10-nilai-bindrata` `x` join `09_next_to_profilematching` `a` on((`x`.`id_siswa` = `a`.`id_siswa`))) join `siswa` `b` on((`b`.`id_siswa` = `a`.`id_siswa`))) join `18_n_rank_bind` `c` on((`c`.`id_siswa` = `a`.`id_siswa`))) order by `c`.`nilai_n` desc,`a`.`nilai` desc,`x`.`nbindrata` desc,`a`.`tpa` desc;

-- ----------------------------
-- View structure for `20-peminatan-ipa`
-- ----------------------------
DROP VIEW IF EXISTS `20-peminatan-ipa`;
CREATE VIEW `20-peminatan-ipa` AS select `a`.`id_siswa` AS `id_siswa`,`b`.`nama_siswa` AS `nama_siswa`,`b`.`asal_sekolah` AS `asal_sekolah`,`b`.`j_kelamin` AS `j_kelamin`,`a`.`fuzzy_output` AS `fuzzy_output`,`a`.`jalur` AS `jalur`,`a`.`nilai` AS `aspek_a_un`,`x`.`niparata` AS `aspek_b_rapor`,`a`.`tpa` AS `aspek_c_tpa`,`c`.`ncf_ipa` AS `ncf_ipa`,`c`.`scf_ipa` AS `scf_ipa`,`c`.`nilai_n` AS `nilai_n` from (((`10-nilai-iparata` `x` join `09_next_to_profilematching` `a` on((`x`.`id_siswa` = `a`.`id_siswa`))) join `siswa` `b` on((`b`.`id_siswa` = `a`.`id_siswa`))) join `18_n_rank_ipa` `c` on((`c`.`id_siswa` = `a`.`id_siswa`))) order by `c`.`nilai_n` desc,`a`.`nilai` desc,`x`.`niparata` desc,`a`.`tpa` desc;

-- ----------------------------
-- View structure for `20-peminatan-ips`
-- ----------------------------
DROP VIEW IF EXISTS `20-peminatan-ips`;
CREATE VIEW `20-peminatan-ips` AS select `a`.`id_siswa` AS `id_siswa`,`b`.`nama_siswa` AS `nama_siswa`,`b`.`asal_sekolah` AS `asal_sekolah`,`b`.`j_kelamin` AS `j_kelamin`,`a`.`fuzzy_output` AS `fuzzy_output`,`a`.`jalur` AS `jalur`,`a`.`nilai` AS `aspek_a_un`,`x`.`nipsrata` AS `aspek_b_rapor`,`a`.`tpa` AS `aspek_c_tpa`,`c`.`ncf_ips` AS `ncf_ips`,`c`.`scf_ips` AS `scf_ips`,`c`.`nilai_n` AS `nilai_n` from (((`10-nilai-ipsrata` `x` join `09_next_to_profilematching` `a` on((`x`.`id_siswa` = `a`.`id_siswa`))) join `siswa` `b` on((`b`.`id_siswa` = `a`.`id_siswa`))) join `18_n_rank_ips` `c` on((`c`.`id_siswa` = `a`.`id_siswa`))) order by `c`.`nilai_n` desc,`a`.`nilai` desc,`x`.`nipsrata` desc,`a`.`tpa` desc;
