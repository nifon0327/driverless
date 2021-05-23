<?php 
	class Login
	{
		private $link;
		private $table = 'admin';

		public  function __construct()
		{
			$this->link = new DB($this->table);
		}

		public function dologin()
		{
			// 1. 判断数据
				// 1.1 判断账号是否存在
				$data = $this->link->where('where name = "'.$_POST['name'].'"')->find();

				if(empty($data)){
					notice('账号或密码有误');
				}

				// 1.2 判断密码
				if( md5($_POST['pwd']) != $data['pwd'] ){
					notice('账号或密码有误');
				}

			// 2. 保存相关信息 session  cookie
				// 2.1 存session
					$_SESSION['admin']['name'] = $data['name'];
					$_SESSION['admin']['id'] = $data['id'];

				// 2.2 存cookie 
					$status = @$_POST['status'];
					if(!empty($status)){
						setcookie('name', $data['name'], time()+7*24*3600);
						setcookie('pwd', $data['pwd'], time()+7*24*3600);
					}
		}




	}

