<?php 
	
	class UserControl extends Control
	{
		private $user;

		public function __construct()
		{
			// include 'Model/user.class.php';
			$this->user = new user;
		}

		// 加载 用户列表
		public function index()
		{
			// include '../public/Page.class.php';
			$page = new Page;

			// 获取搜索选项
			$search = '';
			if( !empty($_GET['search']) ){
				$search = 'where nickname like "%'.$_GET['search'].'%"';
			}

			// 获取用户总条数
			$sum = $this->user->getUserCount($search);

			// 计算 limit 
			$limit = $page->limit($sum);

			// 查询用户数据
			$data = $this->user->getUserList($limit);

			include 'View/user/index.html';
		}

		// 加载 新增页面
		public function add()
		{
			// 加载新增用户页面	
			include 'View/user/add.html';
		}


		// 执行 新增方法
		public function doAdd()
		{
			// 加载用户类
			// include 'Model/user.class.php';
			// $this->user = new user;

			// 调用添加用户的方法
			$data = $this->user->addUser();

			// 根据不同的结果提示并跳转
			if($data){
				notice('成功添加用户', 'index.php?c=user');
			}

			notice('添加用户失败');

		}

		// 加载 编辑用户
		public  function edit()
		{
			// 根据id 查询相关数据
			$data = $this->user->findOne();

			// 加载 编辑界面
			include 'View/user/edit.html';
		}

		// 执行 编辑用户
		public function doEdit()
		{
			// 调用 编辑用方法
			$data = $this->user->editUser();


			// 根据结果跳转不同页面
			if($data){
				notice('成功更新用户', 'index.php?c=user');
			}

			notice('更新用户失败');
		}

		// 删除用户
		public function del()
		{
			// 调用 删除方法
			$data = $this->user->delUser();

			// 根据结果跳转不同页面
				if($data){
					notice('成功删除用户', 'index.php?c=user');
				}
				notice('删除用户失败');
		}


		// 修改状态
		public function status()
		{
			// 调用 状态方法
			$data = $this->user->status();
			header('location: '.$_SERVER['HTTP_REFERER']);
		}


		// 加载 详情页面
		public function detail()
		{
			// 根据id 查询相关数据
			$data = $this->user->findOne();

			include 'View/user/detail.html';
		}


	}



 ?>