<?php 
	
	class LoginControl 
	{
		public function index()
		{
			include 'View/login/index.html';
		}

		public function login()
		{
			$login = new login;

			// 调用 登录方法
			$data = $login->dologin();

			notice('登录成功....', 'index.php');
		}

		public function logout()
		{
			unset($_SESSION['customer']);
			setcookie('name', '', time()-1);
			setcookie('pwd', '', time()-1);
			notice('退出成功', 'index.php');
		}
		

	}



 ?>