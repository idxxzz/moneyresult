/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50723
Source Host           : localhost:3306
Source Database       : moneyresult

Target Server Type    : MYSQL
Target Server Version : 50723
File Encoding         : 65001

Date: 2019-05-15 16:34:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for inoutlist
-- ----------------------------
DROP TABLE IF EXISTS `inoutlist`;
CREATE TABLE `inoutlist` (
  `id` varchar(200) NOT NULL,
  `actdate` date NOT NULL,
  `pname` varchar(200) NOT NULL,
  `class2` varchar(200) NOT NULL,
  `class1` varchar(200) NOT NULL,
  `account` varchar(200) NOT NULL,
  `inmoney` double NOT NULL,
  `outmoney` double NOT NULL,
  `info` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inoutlist
-- ----------------------------
INSERT INTO `inoutlist` VALUES ('1', '2019-05-15', '建强合一', '工资', '支付王淑芳', '现金', '0', '500', '第一次');
