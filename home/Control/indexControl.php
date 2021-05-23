<?php 
	class IndexControl
	{
		public function __construct()
		{
			if( $_COOKIE['tel'] && $_COOKIE['pwd'] )
			{
				$_SESSION['customer']['tel'] = $_COOKIE['tel'];
			}
			
		}
		public function index()
		{
			include 'View/index/index.html';
		}



	}


 ?>