<?php 
	// 后台的入口文件
	include '../public/config.php';
	include '../public/function.php';

	// 获取控制器名
		$c = isset($_GET['c'])? $_GET['c'] : 'index';
		$c .= 'Control';

	// 获取方法名
		$m = isset($_GET['m'])? $_GET['m'] : 'index';

	// 自动加载
	function __autoload($className)
	{	
		if( file_exists('Control/'.$className.'.php') ){
			require 'Control/'.$className.'.php';
		}elseif( file_exists('Model/'.$className.'.class.php')  ){
			require 'Model/'.$className.'.class.php';
		}elseif(file_exists('../public/'.$className.'.class.php')){
			require '../public/'.$className.'.class.php';
		}
	}

	// 加载 相关控制器
		// include 'Control/'.$c.'.php';

	// 实例化控制器
		$control = new $c;
	// 调用方法
		$control->$m();

 ?>