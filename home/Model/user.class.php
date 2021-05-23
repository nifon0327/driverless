<?php 
	class User
	{
		private $link;
		private $table = 'customer';

		public  function __construct()
		{
			// include '../public/DB.class.php';
			$this->link = new DB($this->table);
		}


		// 执行添加用户
		public function register()
		{
			// 1. 判断数据
			//		1.1 判断手机是否存在
					$preg = '/^1[3|4|5|7|8]\d{9}$/';

					if (!preg_match($preg,$_POST['tel']))
					{
						notice('请输入正确的手机号!');
					}
			// 		1.2 验证码是否正确
			// 			// 验证码是否为空
						if (empty($_POST['code']))
						{
							notice('请输入验证码!');
						}
						// 验证码是否一致
						if(strcasecmp($_POST['code'],$_SESSION['idCode']))
						{
							notice('验证码不正确,请再次输入!');
						}
			// 		1.3 判断密码
						// 密码不能为空
						if (empty($_POST['pwd']))
						{
							notice('密码不能为空!');
						}

						// 确认长度
						$preg2 = '/.{6,14}/';
						if (!preg_match($preg2,$_POST['pwd']))
						{
							notice('密码长度必须在6到14位!');
						}
							if( $_POST['pwd'] != $_POST['repwd'])
							{
								notice('两次密码不一致');
							}
			//      1.4 相关协议
						if(!array_key_exists('agree',$_POST))
						{
							notice('亲,必须同意相关协议!');
						}
			// 2. 完善数据
				unset($_POST['repwd']);	
				unset($_POST['code']);
				unset($_POST['agree']);

				$_POST['pwd'] = md5($_POST['pwd']);
				$_POST['regtime'] = time();

			// 3. 执行DB类insert
				$data =	$this->link->insert();
				// var_dump($data);die;
			// 4. 返回 影响行数
				return $data;
		}


		// 查询所有用户
		public function getUserList($limit)
		{
			$data = $this->link->limit($limit)->select();
			return $data;
		}


		// 查询用户的总条数
		public function getUserCount($search)
		{
			$data = $this->link->where($search)->count();
			return $data['sum'];
		}

		// 查询一条数据 % 按照tel找
		public function findOne()
		{
			// 获取 关键字 
			// $di = $GLOBALS;
			$id = $_SESSION['customer']['tel'];
			// var_dump($id,$di);die;

			return $this->link->where('where tel = '.$id)->find();
		}


		// 编辑 用户
		public function editUser()
		{
			// 1. 判断数据
			// 		1.1 判断是否有新密码
						if(empty($_POST['pwd'])){
							unset($_POST['pwd']);
							unset($_POST['repwd']);
						}elseif( $_POST['pwd'] != $_POST['repwd']){
							notice('两次密码不一致');
						}else{
							unset($_POST['repwd']);
							$_POST['pwd'] = md5($_POST['pwd']);
						}
						
			// 		1.2 判断手机, 邮箱, ...

			//  	1.3 判断文件上传
						// include '../public/Upload.class.php';
						$up = new Upload;

						if( $up->icon() ){
							$result = $up->singleFile();
							// 根据结果 判断是否上传成功
							if(is_string($result)){
								notice($result);
							}
							$_POST['icon'] = $result[0];
						}
						

			// 2. 完善数据
					$id = $_POST['id'];

			// 3. 执行更新操作
					return $this->link->update($id);
		}


		// 删除用户 
		public function delUser()
		{
			// 获取用户id
			$id = $_GET['id'];

			return $this->link->delete($id);
		}

		public function status()
		{
			// 获取 id 
			$id = $_GET['id'];

			// 给当前的状态取反
			$arr['status'] = $_GET['status']==1?2:1;

			return $this->link->update($id, $arr);

		}

		public function editUserInfo()
		{
			// 判断 
				// username
				if (!empty($_POST['username'])) 
				{
					$preg = '/[a-zA-Z0-9]{5,20}/';
					if(!preg_match($preg,$_POST['username']))
					{
						noticeframe('只能包含包括字母和数字,5～20个字符');
					}
				}

				
				// sex
				if(array_key_exists('sex',$_POST))
				{
					if ($_POST['sex'] !=1 && $_POST['sex'] !=2) 
					{
						noticeframe('请输入正确的性别');
						
					}
				}
						
					

				// birthday
				if(!empty($_POST['birthday']))
				{
					list($year,$month,$day) = explode("-",$_POST['birthday']);
	  				if (!checkdate($month,$day,$year))
				  	{
				  		noticeframe('请输入正确的生日日期');
				  	}
				}

			// 完善
				foreach ($_POST as $key => $value) 
				{
					if($value=='')
					{
						unset($_POST[$key]);
						
					}else
					{
						// 去掉html标签
						$_POST[$key]=strip_tags($_POST[$key]);
					}
				}
				
			// 返回
				// return $_POST;
			$result = $this->link->update($_SESSION['customer']['id']);
			return $result;
				

		}



	}

