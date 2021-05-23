/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : s65

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-06-06 05:09:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL COMMENT '管理员账号',
  `pwd` char(32) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'xfy', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `admin` VALUES ('2', 'zzz', 'e10adc3949ba59abbe56e057f20f883e');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL COMMENT '分类名',
  `pid` int(11) NOT NULL COMMENT '父级id',
  `path` varchar(255) NOT NULL COMMENT '分类路径',
  `display` tinyint(1) DEFAULT '2' COMMENT '显示/隐藏  1-显示  2-隐藏',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '服装', '0', '0,', '2');
INSERT INTO `category` VALUES ('2', '数码', '0', '0,', '2');
INSERT INTO `category` VALUES ('3', '家电', '0', '0,', '2');
INSERT INTO `category` VALUES ('4', '化妆品', '0', '0,', '2');
INSERT INTO `category` VALUES ('5', '男装', '1', '0,1,', '2');
INSERT INTO `category` VALUES ('6', '女装', '1', '0,1,', '2');
INSERT INTO `category` VALUES ('7', '童装', '1', '0,1,', '2');
INSERT INTO `category` VALUES ('8', '电脑', '2', '0,2,', '2');
INSERT INTO `category` VALUES ('9', '手机', '2', '0,2,', '2');
INSERT INTO `category` VALUES ('10', '三星', '9', '0,2,9,', '2');
INSERT INTO `category` VALUES ('11', '苹果', '10', '0,2,9,10,', '2');
INSERT INTO `category` VALUES ('12', '化妆水', '4', '0,4,', '2');
INSERT INTO `category` VALUES ('13', '冰箱', '3', '0,3,', '2');
INSERT INTO `category` VALUES ('14', '空调', '3', '0,3,', '2');
INSERT INTO `category` VALUES ('15', '西装', '5', '0,1,5,', '2');

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tel` char(11) NOT NULL COMMENT '电话',
  `pwd` char(32) NOT NULL COMMENT '密码',
  `address` varchar(255) DEFAULT NULL COMMENT '住址',
  `sex` tinyint(1) DEFAULT NULL COMMENT '1-男 2-女',
  `birthday` date DEFAULT NULL COMMENT '生日',
  `regtime` int(11) NOT NULL COMMENT '注册时间',
  `username` char(16) DEFAULT NULL COMMENT '用户名',
  PRIMARY KEY (`id`),
  UNIQUE KEY `tel` (`tel`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('1', '18121132810', 'e10adc3949ba59abbe56e057f20f883e', null, '1', '1990-03-27', '1496528733', 'Nifon');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tel` char(11) NOT NULL COMMENT '电话',
  `pwd` char(32) NOT NULL COMMENT '密码',
  `nickname` varchar(30) DEFAULT NULL COMMENT '昵称',
  `address` varchar(255) DEFAULT NULL COMMENT '住址',
  `icon` varchar(255) DEFAULT NULL COMMENT '头像',
  `sex` tinyint(1) unsigned DEFAULT '1' COMMENT '性别  1-男  2-女',
  `birthday` date DEFAULT NULL COMMENT '生日',
  `status` tinyint(1) DEFAULT '1' COMMENT '状态  1-激活  2-禁用',
  `regtime` int(11) NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `tel` (`tel`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '18121132810', 'e10adc3949ba59abbe56e057f20f883e', 'xfy', '上海', '201706045932e2828ab23.jpg', '1', '1990-03-27', '1', '1496507010');
