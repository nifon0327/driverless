<?php 
	class userControl extends Control
	{

		public function __construct()
		{
			
		}

		public function index()
		{
			include 'View/user/index.html';
		}

		public function register()
		{
			include 'view/user/register.html';
		}

		public function doRegister()
		{
			// var_dump($_POST);
			// var_dump($_SESSION['idCode']);die;
			$user = new user;
			$data = $user->register();
			if($data)
			{
				notice('注册成功', 'index.php');
			}else
			{
				notice('注册失败');
			}
		}
		public function show()
		{
			include 'view/user/show.html';
		}

		public function edit()
		{
			$user = new user;
			$data = $user->findOne();
			// return $data;
			// var_dump($data);die;
			include 'view/user/edit.html';
		}

		public function doedit()
		{
			$user = new user;
			$result = $user->editUserInfo();
			if($result)
			{
				notice('添加成功', $_SERVER['HTTP_REFERER']);
			}else
			{
				notice('添加失败',$_SERVER['HTTP_REFERER']);
			}
		}

		public function password()
		{
			include 'view/user/password.html';
		}
		public function email()
		{
			include 'view/user/email.html';
		}

		public function address()
		{
			include 'view/user/address.html';
		}
	}



 ?>