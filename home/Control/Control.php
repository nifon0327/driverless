<?php 

	// 所有控制器的 基类
	class Control
	{
		public  function __construct()
		{
			

			if( $_COOKIE['tel'] && $_COOKIE['pwd'] ){
				$_SESSION['customer']['tel'] = $_COOKIE['tel'];
			}elseif( empty($_SESSION['customer']) ){
				// 判断是否已经登录
				notice('您尚未登录, 请先登录...', 'index.php?c=login');
			}
		}
	}

 ?>