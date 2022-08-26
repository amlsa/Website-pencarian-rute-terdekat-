/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : project-gym-a-star

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 17/01/2021 08:51:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_admin
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin`  (
  `adminID` int(2) NOT NULL AUTO_INCREMENT,
  `adminUsername` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `adminPassword` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `diinsertPada` timestamp(0) NULL DEFAULT NULL,
  `diupdatePada` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`adminID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES (1, 'admin', 'admin', NULL, NULL);

-- ----------------------------
-- Table structure for tb_graf
-- ----------------------------
DROP TABLE IF EXISTS `tb_graf`;
CREATE TABLE `tb_graf`  (
  `graphID` int(11) NOT NULL AUTO_INCREMENT,
  `simpulMulai` int(2) NULL DEFAULT NULL,
  `simpulAkhir` int(2) NULL DEFAULT NULL,
  `jarak` decimal(5, 3) NULL DEFAULT NULL,
  `diinsertPada` timestamp(0) NULL DEFAULT NULL,
  `diupadtePada` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`graphID`) USING BTREE,
  INDEX `simpulMulai`(`simpulMulai`) USING BTREE,
  INDEX `simpulAkhir`(`simpulAkhir`) USING BTREE,
  CONSTRAINT `tb_graf_ibfk_2` FOREIGN KEY (`simpulMulai`) REFERENCES `tb_simpul` (`simpulID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_graf_ibfk_3` FOREIGN KEY (`simpulAkhir`) REFERENCES `tb_simpul` (`simpulID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 91 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_graf
-- ----------------------------
INSERT INTO `tb_graf` VALUES (75, 65, 66, 0.039, NULL, NULL);
INSERT INTO `tb_graf` VALUES (76, 66, 67, 0.037, NULL, NULL);
INSERT INTO `tb_graf` VALUES (77, 67, 62, 0.004, NULL, NULL);
INSERT INTO `tb_graf` VALUES (78, 67, 68, 0.007, NULL, NULL);
INSERT INTO `tb_graf` VALUES (79, 68, 69, 0.007, NULL, NULL);
INSERT INTO `tb_graf` VALUES (80, 69, 70, 0.011, NULL, NULL);
INSERT INTO `tb_graf` VALUES (81, 70, 71, 0.004, NULL, NULL);
INSERT INTO `tb_graf` VALUES (82, 71, 72, 0.006, NULL, NULL);
INSERT INTO `tb_graf` VALUES (83, 72, 73, 0.009, NULL, NULL);
INSERT INTO `tb_graf` VALUES (84, 73, 74, 0.015, NULL, NULL);
INSERT INTO `tb_graf` VALUES (85, 74, 77, 0.016, NULL, NULL);
INSERT INTO `tb_graf` VALUES (86, 77, 78, 0.005, NULL, NULL);
INSERT INTO `tb_graf` VALUES (87, 78, 64, 0.016, NULL, NULL);
INSERT INTO `tb_graf` VALUES (88, 74, 75, 0.013, NULL, NULL);
INSERT INTO `tb_graf` VALUES (89, 75, 76, 0.007, NULL, NULL);
INSERT INTO `tb_graf` VALUES (90, 76, 63, 0.039, NULL, NULL);

-- ----------------------------
-- Table structure for tb_simpul
-- ----------------------------
DROP TABLE IF EXISTS `tb_simpul`;
CREATE TABLE `tb_simpul`  (
  `simpulID` int(2) NOT NULL AUTO_INCREMENT,
  `simpulNama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `simpulType` enum('gym','-') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `simpulAlamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `simpulLat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `simpulLng` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `diinsertPada` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `diupdatePada` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`simpulID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 79 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_simpul
-- ----------------------------
INSERT INTO `tb_simpul` VALUES (62, 'PK1', 'gym', '', '-7.884311537285015', '112.52354669156801', '2021-01-17 08:26:24', NULL);
INSERT INTO `tb_simpul` VALUES (63, 'PK2', 'gym', '', '-7.884674013152008', '112.52422642126044', '2021-01-17 08:26:36', NULL);
INSERT INTO `tb_simpul` VALUES (64, 'PK3', 'gym', '', '-7.884747300210037', '112.52380867928167', '2021-01-17 08:26:59', NULL);
INSERT INTO `tb_simpul` VALUES (65, '1', '-', '', '-7.883614352535716', '112.52369346274457', '2021-01-17 08:27:48', NULL);
INSERT INTO `tb_simpul` VALUES (66, '2', '-', '', '-7.883951992910156', '112.52361432728691', '2021-01-17 08:28:00', NULL);
INSERT INTO `tb_simpul` VALUES (67, '3', '-', '', '-7.884277926494903', '112.52356158275882', '2021-01-17 08:28:22', NULL);
INSERT INTO `tb_simpul` VALUES (68, '4', '-', '', '-7.884274003725466', '112.52362412551736', '2021-01-17 08:28:30', NULL);
INSERT INTO `tb_simpul` VALUES (69, '5', '-', '', '-7.884211281705802', '112.52364326074843', '2021-01-17 08:28:38', NULL);
INSERT INTO `tb_simpul` VALUES (70, '6', '-', '', '-7.884197264607266', '112.52373790954414', '2021-01-17 08:28:46', NULL);
INSERT INTO `tb_simpul` VALUES (71, '7', '-', '', '-7.884230265890565', '112.52373207241487', '2021-01-17 08:28:54', NULL);
INSERT INTO `tb_simpul` VALUES (72, '8', '-', '', '-7.884273984595993', '112.52376800524826', '2021-01-17 08:29:06', NULL);
INSERT INTO `tb_simpul` VALUES (73, '9', '-', '', '-7.884355790740017', '112.52377694204836', '2021-01-17 08:29:16', NULL);
INSERT INTO `tb_simpul` VALUES (74, '10', '-', '', '-7.884428152295456', '112.5238876540966', '2021-01-17 08:30:17', '2021-01-17 08:30:37');
INSERT INTO `tb_simpul` VALUES (75, '11', '-', '', '-7.884364306374465', '112.52398266649891', '2021-01-17 08:30:50', NULL);
INSERT INTO `tb_simpul` VALUES (76, '12', '-', '', '-7.884366974450302', '112.52404884507132', '2021-01-17 08:30:57', NULL);
INSERT INTO `tb_simpul` VALUES (77, '13', '-', '', '-7.884566830241241', '112.5238558885793', '2021-01-17 08:31:07', NULL);
INSERT INTO `tb_simpul` VALUES (78, '14', '-', '', '-7.884600449589982', '112.52382219286028', '2021-01-17 08:31:15', NULL);

SET FOREIGN_KEY_CHECKS = 1;
