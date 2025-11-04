/*
 Navicat Premium Dump SQL

 Source Server         : localphp
 Source Server Type    : MySQL
 Source Server Version : 80043 (8.0.43)
 Source Host           : localhost:3306
 Source Schema         : db_70

 Target Server Type    : MySQL
 Target Server Version : 80043 (8.0.43)
 File Encoding         : 65001

 Date: 04/11/2025 23:43:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tabel_murid
-- ----------------------------
DROP TABLE IF EXISTS `tabel_murid`;
CREATE TABLE `tabel_murid`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_murid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tabel_murid
-- ----------------------------
INSERT INTO `tabel_murid` VALUES (1, 'Budi', '1b');
INSERT INTO `tabel_murid` VALUES (2, 'Dewi', '1a');
INSERT INTO `tabel_murid` VALUES (3, 'Agus', '1c');
INSERT INTO `tabel_murid` VALUES (4, 'Siti', '3a');
INSERT INTO `tabel_murid` VALUES (5, 'Eko', '4d');

-- ----------------------------
-- Table structure for tabel_rafli
-- ----------------------------
DROP TABLE IF EXISTS `tabel_rafli`;
CREATE TABLE `tabel_rafli`  (
  `kode_jenis` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_jenis` DESC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tabel_rafli
-- ----------------------------
INSERT INTO `tabel_rafli` VALUES ('05', 'Keramik');
INSERT INTO `tabel_rafli` VALUES ('04', 'Baut');
INSERT INTO `tabel_rafli` VALUES ('03', 'Paku');
INSERT INTO `tabel_rafli` VALUES ('02', 'Tanah');
INSERT INTO `tabel_rafli` VALUES ('01', 'batu');

SET FOREIGN_KEY_CHECKS = 1;
