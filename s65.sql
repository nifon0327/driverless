-- 用户表
create table if not exists `user`(
	`id` 	int 	auto_increment  	primary key,
	`tel` 	char(11) unique not null comment '电话',
	`pwd`   char(32) not null comment '密码',
	`nickname` varchar(30) comment '昵称', 
	`address`  varchar(255) comment '住址',
	`icon` 	   varchar(255) comment '头像',
	`sex` 	   tinyint(1) unsigned  default 1 comment '性别  1-男  2-女',
	`birthday` date  comment '生日',
	`status`   tinyint(1) default 1 comment '状态  1-激活  2-禁用',
	`regtime`  int 	not null comment '注册时间'
)engine=MyISAM default charset=utf8;


-- 管理员表
create table if not exists `admin`(
	`id` 	int 	auto_increment  	primary key,
	`name` varchar(30) comment '管理员账号', 
	`pwd`   char(32) not null comment '密码'
)engine=MyISAM default charset=utf8;

-- 顾客名单
create table if not exists `customer`(
	`id` 	int 	auto_increment  	primary key,
	`tel` 	char(11) unique not null comment '电话',
	`pwd`   char(32) not null comment '密码',
	`address`  varchar(255) comment '住址',
	`sex` 	   tinyint(1) unsigned  default 1 comment '性别  1-男  2-女',
	`birthday` date  comment '生日',
	`regtime`  int 	not null comment '注册时间'
)engine=MyISAM default charset=utf8;
