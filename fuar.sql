/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100428 (10.4.28-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : fuar

 Target Server Type    : MySQL
 Target Server Version : 100428 (10.4.28-MariaDB)
 File Encoding         : 65001

 Date: 13/08/2023 23:20:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for basvuru
-- ----------------------------
DROP TABLE IF EXISTS `basvuru`;
CREATE TABLE `basvuru`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `eposta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `telefon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `isletme` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `urunler` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of basvuru
-- ----------------------------

-- ----------------------------
-- Table structure for bilgial
-- ----------------------------
DROP TABLE IF EXISTS `bilgial`;
CREATE TABLE `bilgial`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `adsoyad1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tel1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of bilgial
-- ----------------------------

-- ----------------------------
-- Table structure for bizeulasin
-- ----------------------------
DROP TABLE IF EXISTS `bizeulasin`;
CREATE TABLE `bizeulasin`  (
  `id` int NOT NULL,
  `adsoyad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `eposta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mesaj` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of bizeulasin
-- ----------------------------

-- ----------------------------
-- Table structure for duyurular
-- ----------------------------
DROP TABLE IF EXISTS `duyurular`;
CREATE TABLE `duyurular`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `baslik` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of duyurular
-- ----------------------------
INSERT INTO `duyurular` VALUES (3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra.\r\n');

-- ----------------------------
-- Table structure for etkinlikbilgileri
-- ----------------------------
DROP TABLE IF EXISTS `etkinlikbilgileri`;
CREATE TABLE `etkinlikbilgileri`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `etkinlikadi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `tarih` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of etkinlikbilgileri
-- ----------------------------
INSERT INTO `etkinlikbilgileri` VALUES (1, '<h2><span style=\"color:hsl(0, 75%, 60%);\">FUAR SİTESİNE HOŞGELDİNİZ</span></h2>', '<h3><span style=\"color:hsl(0, 0%, 100%);\"><strong>29.10.2023 - ANKARA</strong></span></h3>');

-- ----------------------------
-- Table structure for galeri
-- ----------------------------
DROP TABLE IF EXISTS `galeri`;
CREATE TABLE `galeri`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `resimaciklama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of galeri
-- ----------------------------
INSERT INTO `galeri` VALUES (15, 'Fuar Görseli 1', 'resim_2023-08-13_225655002.png');
INSERT INTO `galeri` VALUES (16, 'Fuar Görseli 2', 'resim_2023-08-13_225706248.png');
INSERT INTO `galeri` VALUES (17, 'Fuar Görseli 3', 'resim_2023-08-13_225717718.png');
INSERT INTO `galeri` VALUES (18, 'Fuar Görseli 4', 'resim_2023-08-13_225732098.png');
INSERT INTO `galeri` VALUES (19, 'Fuar Görseli 5', 'resim_2023-08-13_225744811.png');
INSERT INTO `galeri` VALUES (20, 'Fuar Görseli 6', 'resim_2023-08-13_225754837.png');

-- ----------------------------
-- Table structure for haberler
-- ----------------------------
DROP TABLE IF EXISTS `haberler`;
CREATE TABLE `haberler`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `foto` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `baslik` char(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ustBaslik` char(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NULL DEFAULT current_timestamp,
  `kategori` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `onecikar` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `gonecikar` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of haberler
-- ----------------------------
INSERT INTO `haberler` VALUES (10, 'resim_2023-08-13_225822298.png', 'Haber Özeti', 'Örnek Haber Başlığı', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra.</p><p>Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra. Duis a arcu convallis, gravida purus eget, mollis diam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra.</p><p>Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra. Duis a arcu convallis, gravida purus eget, mollis diam.</p>', '2023-08-13 22:58:32', NULL, NULL, NULL);
INSERT INTO `haberler` VALUES (11, 'resim_2023-08-13_225854909.png', 'Haber Özeti', 'Örnek Haber Başlığı', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra.</p><p>Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra. Duis a arcu convallis, gravida purus eget, mollis diam.</p>', '2023-08-13 22:58:55', NULL, NULL, NULL);
INSERT INTO `haberler` VALUES (12, 'resim_2023-08-13_225908757.png', 'Haber Özeti', 'Örnek Haber Başlığı', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra.</p><p>Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra. Duis a arcu convallis, gravida purus eget, mollis diam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra.</p><p>Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra. Duis a arcu convallis, gravida purus eget, mollis diam.</p>', '2023-08-13 22:59:14', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for hakkinda
-- ----------------------------
DROP TABLE IF EXISTS `hakkinda`;
CREATE TABLE `hakkinda`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `icerik` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `veri1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `veri2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `veri3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `veri4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `veri5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `veri6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `veri7` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `veri8` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of hakkinda
-- ----------------------------
INSERT INTO `hakkinda` VALUES (1, '<p><span class=\"text-big\"><i>SG-BİLİŞİM OLARAK ÇOK YAKINDA DÜZENLEYECEĞİMİZ FUAR HAKKINDA BİLGİLERE BURADAN ULAŞABİLECEKSİNİZ. BEKLEMEDE KALIN.</i></span></p>', '20 + Konuşmacı', 'Sizler için 20+ konuşmacı fuarımızda yer alacaktır.', '50 + Stant', 'Birbirinden farklı 50 den fazla stanttı sizlerle buluşturuyoruz.', '08.00-22.00', 'Fuar süresince 08.00 - 22.00 arası fuarımızı ziyaret edebilirsiniz.', '500 + Oturma alanı', 'Fuarımızdaki etkinliklere katılacak olan ziyaretçilerimiz için 500 den fazla oturma alanı ayrılmıştır.');

-- ----------------------------
-- Table structure for iletisim
-- ----------------------------
DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE `iletisim`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `adsoyad2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `eposta2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mesaj2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of iletisim
-- ----------------------------

-- ----------------------------
-- Table structure for kayan
-- ----------------------------
DROP TABLE IF EXISTS `kayan`;
CREATE TABLE `kayan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `foto` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ustBaslik` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kayan
-- ----------------------------
INSERT INTO `kayan` VALUES (8, 'resim_2023-08-13_230432637.png', 'KAYAN RESİM');
INSERT INTO `kayan` VALUES (9, 'resim_2023-08-13_230500319.png', 'KAYAN RESİM');

-- ----------------------------
-- Table structure for konusmaci
-- ----------------------------
DROP TABLE IF EXISTS `konusmaci`;
CREATE TABLE `konusmaci`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alani` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `bilgi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of konusmaci
-- ----------------------------
INSERT INTO `konusmaci` VALUES (8, 'Geralt Of Rivia', 'Witcher', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra.</p><p>Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra. Duis a arcu convallis, gravida purus eget, mollis diam.</p><p>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra.</p><p>Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra. Duis a arcu convallis, gravida purus eget, mollis diam.</p>', 'resim_2023-08-13_224940296.png');
INSERT INTO `konusmaci` VALUES (10, 'Ciri', 'Zaman Leydisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra.</p><p>Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra. Duis a arcu convallis, gravida purus eget, mollis diam.</p>', 'resim_2023-08-13_225234384.png');
INSERT INTO `konusmaci` VALUES (11, 'Triss Merigold', 'Büyücü', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra.</p><p>Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra. Duis a arcu convallis, gravida purus eget, mollis diam.</p>', 'resim_2023-08-13_225304905.png');
INSERT INTO `konusmaci` VALUES (12, 'Yennefer of Vengerberg', 'Büyücü', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra.</p><p>Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra. Duis a arcu convallis, gravida purus eget, mollis diam.</p>', 'resim_2023-08-13_225354088.png');

-- ----------------------------
-- Table structure for kullanicilar
-- ----------------------------
DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE `kullanicilar`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `kadi` char(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `parola` char(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `soyad` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of kullanicilar
-- ----------------------------
INSERT INTO `kullanicilar` VALUES (3, 'demo', '31411f16e675560d45d82d1033d6a897', NULL, NULL);

-- ----------------------------
-- Table structure for marka
-- ----------------------------
DROP TABLE IF EXISTS `marka`;
CREATE TABLE `marka`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `markadi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of marka
-- ----------------------------
INSERT INTO `marka` VALUES (9, 'SG Bilişim', 'resim_2023-08-13_225503359.png');
INSERT INTO `marka` VALUES (10, 'SG Bilişim', 'resim_2023-08-13_225553902.png');
INSERT INTO `marka` VALUES (11, 'SG Bilişim', 'resim_2023-08-13_225601046.png');
INSERT INTO `marka` VALUES (12, 'SG Bilişim', 'resim_2023-08-13_225604982.png');
INSERT INTO `marka` VALUES (13, 'SG Bilişim', 'resim_2023-08-13_225609526.png');

SET FOREIGN_KEY_CHECKS = 1;
