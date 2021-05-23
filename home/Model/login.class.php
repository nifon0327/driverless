<?php 
	class Login
	{
		private $link;
		private $table = 'customer';

		public  function __construct()
		{
			$this->link = new DB($this->table);
		}

		public function dologin()
		{
			// 1. 判断数据
				// 1.1 判断账号是否存在
				$data = $this->link->where('where tel = "'.$_POST['tel'].'"')->find();

				if(empty($data)){
					notice('账号或密码有误','index.php?c=login');
				}

				// 1.2 判断密码
				if( md5($_POST['pwd']) != $data['pwd'] ){
					notice('账号或密码有误','index.php?c=login');
				}

			// 2. 保存相关信息 session  cookie
				// 2.1 存session
					$_SESSION['customer']['tel'] = $data['tel'];
					$_SESSION['customer']['id'] = $data['id'];

				// 2.2 存cookie 
					$status = @$_POST['status'];
					if(!empty($status)){
						setcookie('tel', $data['tel'], time()+7*24*3600);
						setcookie('pwd', $data['pwd'], time()+7*24*3600);
					}
		}




	}

