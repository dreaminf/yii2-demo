/*
Navicat MySQL Data Transfer

Source Server         : zhldb
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : yiidemo

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2018-03-23 18:45:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for addressbook
-- ----------------------------
DROP TABLE IF EXISTS `addressbook`;
CREATE TABLE `addressbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '姓名',
  `age` varchar(32) DEFAULT NULL COMMENT '年龄',
  `sex` varchar(255) DEFAULT NULL COMMENT '性别',
  `birthday` varchar(255) DEFAULT NULL COMMENT '生日',
  `holly` varchar(20) DEFAULT '' COMMENT '爱好',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `address` varchar(500) DEFAULT '' COMMENT '地址',
  `phone` varchar(11) NOT NULL DEFAULT '0' COMMENT '手机',
  `qq` int(20) DEFAULT '0' COMMENT 'qq号码',
  `adddatetime` int(11) DEFAULT NULL COMMENT '添加时间',
  `updatetime` int(11) DEFAULT NULL COMMENT '更新时间',
  `info` text COMMENT '其他信息',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of addressbook
-- ----------------------------
INSERT INTO `addressbook` VALUES ('1', '郑红亮', '20', '1', '1990.01.23', '1', 'zhl1126@126.com', '0919', '18392133525', '784440822', '1521793613', '1521795935', '我的信息问题');
INSERT INTO `addressbook` VALUES ('2', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('3', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('4', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('5', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('6', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('7', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('8', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('9', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('10', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('11', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('12', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('13', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('14', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('15', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('16', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('17', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('18', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('19', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('20', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('21', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('22', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('23', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('24', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('25', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('26', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('27', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('28', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('29', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('30', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('31', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('32', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('33', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('34', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('35', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('36', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('37', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('38', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('39', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('40', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('41', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('42', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('43', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');
INSERT INTO `addressbook` VALUES ('44', 'ceahio', '78', '1', '1990', '2', 'afasdf@kk.com', '029', '15214810495', '131646465', '1521793613', '1521793614', 'aFAA');

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1521770798');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1521770805');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'zhl', 'TQ8ozzAp-U-EZ5CTREpqJ9BzYxvZGVw7', '$2y$13$etWU6t7ZBCGE0x0kpTwdhuIWhs.Re3Avv/vym8bJE93ZoInwZMlu6', null, 'zhenghl1126@126.com', '10', '1521776833', '1521776833');
