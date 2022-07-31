/*
 Navicat Premium Data Transfer

 Source Server         : MYSQLKuliah
 Source Server Type    : MySQL
 Source Server Version : 100420
 Source Host           : localhost:3306
 Source Schema         : login_app

 Target Server Type    : MySQL
 Target Server Version : 100420
 File Encoding         : 65001

 Date: 01/08/2022 00:45:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for role_tbl
-- ----------------------------
DROP TABLE IF EXISTS `role_tbl`;
CREATE TABLE `role_tbl`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_tbl
-- ----------------------------
INSERT INTO `role_tbl` VALUES (1, 'Admin');
INSERT INTO `role_tbl` VALUES (2, 'Member');

-- ----------------------------
-- Table structure for user_tbl
-- ----------------------------
DROP TABLE IF EXISTS `user_tbl`;
CREATE TABLE `user_tbl`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `PhoneNumber` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Role` int(11) NULL DEFAULT NULL,
  `DateCreated` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`Id`) USING BTREE,
  INDEX `FK_RoleId`(`Role`) USING BTREE,
  CONSTRAINT `FK_RoleId` FOREIGN KEY (`Role`) REFERENCES `role_tbl` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_tbl
-- ----------------------------
INSERT INTO `user_tbl` VALUES (4, 'dewa@gmail.com', '$2y$10$yDhEK8yT73c/BiuzmS2bE.Ui.Ct5C1rSykGV2bw94z0xKjOxT.Qy6', 'dewa', '082242313124', 1, '2022-07-30 16:37:03');
INSERT INTO `user_tbl` VALUES (6, 'pandu@gmail.com', '$2y$10$a/2VfzdL3NEuRavVkdZYc.NrHiLuC2OWMEGmUst78NGSkKixqyuJu', 'Pandu', '0815123523', 2, '2022-08-01 00:45:42');

SET FOREIGN_KEY_CHECKS = 1;
