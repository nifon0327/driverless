<?php 
	class category
	{
		private $link;
		private $table = 'category';

		public  function __construct()
		{
			// include '../public/DB.class.php';
			$this->link = new DB($this->table);
		}


		// 执行添加用户
		public function addcategory()
		{
			// 1. 判断数据
			

			// 3. 执行DB类insert
				$data =	$this->link->insert();

			// 4. 返回 影响行数
				return $data;
		}

		public function getCategorySubclass($id='')
		{
			$data = $this->link->where($id)->select();
			if($data==null)
			{
				notice('该类无子类','index.php?c=category');
			}
			return $data;
		}


		// 查询所有用户
		public function getCategoryList($id=0)
		{
			$data = $this->link->where(' where `pid` = "'.$id.'"')->select();
			return $data;
		}

		//
		public function getFather($id=0)
		{
			$data = $this->link->where($id)->select();
			
			return $data;
		}
		

		// 查询一条数据
		public function findOne()
		{
			// 获取 关键字 
			$id = $_GET['id'];

			return $this->link->where('where id = '.$id)->find();
		}


		// 编辑 用户
		public function editcategory()
		{
			// 1. 判断数据
			
						

			// 2. 完善数据
					$id = $_POST['id'];

			// 3. 执行更新操作
					return $this->link->update($id);
		}


		// 删除用户
		public function delCategory()
		{
			// 获取用户id
			// var_dump($_GET['id']);die;
			$id = $_GET['id'];
			$id = 'where `path` like "%,'.$id.',%"';
			$result = $this->link->where($id)->select();
			if($result)
			{
				notice('请先删除子类');
			}

			
				return $this->link->delete($_GET['id']);
			
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

