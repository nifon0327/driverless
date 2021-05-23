<?php 
	class User
	{
		private $link;
		private $table = 'user';

		public  function __construct()
		{
			// include '../public/DB.class.php';
			$this->link = new DB($this->table);
		}


		// 执行添加用户
		public function addUser()
		{
			// 1. 判断数据
			// 		1.1 判断密码
						if( $_POST['pwd'] != $_POST['repwd']){
							notice('两次密码不一致');
						}
			// 		1.2 判断手机, 邮箱, ...

			//  	1.3 判断文件上传
						// include '../public/Upload.class.php';
						$up = new Upload;
						$result = $up->singleFile();

						// 根据结果 判断是否上传成功
						if(is_string($result)){
							notice($result);
						}

			// 2. 完善数据
				unset($_POST['repwd']);	
				$_POST['pwd'] = md5($_POST['pwd']);
				$_POST['regtime'] = time();
				$_POST['icon'] = $result[0];

			// 3. 执行DB类insert
				$data =	$this->link->insert();

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

		// 查询一条数据
		public function findOne()
		{
			// 获取 关键字 
			$id = $_GET['id'];

			return $this->link->where('where id = '.$id)->find();
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



	}

