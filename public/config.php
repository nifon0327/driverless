<?php 
	// 开启session
	session_start();

	// 时区
	date_default_timezone_set('PRC');

	// 错误级别
	error_reporting(E_ALL ^E_NOTICE);

	// 设置字符集
	header('content-type: text/html; charset=utf-8');
	
	// DSN
	define('DSN', 'mysql:dbname=s65; charset=utf8; host=www.lamp.com');
	// USER
	define('USER', 'root');
	// PWD
	define('PWD','');

	// 前台css路径
	define('HOME_CSS', '/home/include/css/');
	// 前台js路径
	define('HOME_JS', '/home/include/js/');
	// 前台image路径
	define('HOME_IMG', '/home/include/images/');
	// 前台font路径
	define('HOME_FONT', '/home/include/font/');


	// 后台css路径
	define('ADMIN_CSS', '/admin/include/css/');
	// 后台js路径
	define('ADMIN_JS', '/admin/include/js/');
	// 后台image路径
	define('ADMIN_IMG', '/admin/include/images/');


