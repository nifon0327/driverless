<?php 

	// 所有控制器的 基类
	class Control
	{
		public  function __construct()
		{
			if( $_COOKIE['name'] && $_COOKIE['pwd'] ){
				$_SESSION['admin']['name'] = $_COOKIE['name'];
			}elseif( empty($_SESSION['admin']) ){
				// 判断是否已经登录
				notice('您尚未登录, 请先登录...', 'index.php?c=login');
			}
		}
	}

 ?>