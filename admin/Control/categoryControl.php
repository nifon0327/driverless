<?php 
	
	class CategoryControl extends Control
	{
		private $category;

		public function __construct()
		{
			// 先调用继承父类的方法, 再重写方法
			parent::__construct();
			// include 'Model/category.class.php';
			$this->category = new category;
		}

		// 加载 用户列表
		public function index()
		{
			// include '../public/Page.class.php';
			$page = new Page;
			$id =isset($_GET['pid'])?($_GET['pid']):'0';


			// 查询用户数据
			$data = $this->category->getCategoryList($id);

			include 'View/category/index.html';
		}

		public function findFather()
		{
			$page = new Page;
			$id =isset($_GET['id'])?($_GET['id']):0;
			$id = 'where `path` = "'.$id.'"';
			// 查询用户数据
			$data = $this->category->getCategorySubclass($id);

			include 'View/category/index.html';
		}

		public function searchSubclass()
		{
			// include '../public/Page.class.php';
			$page = new Page;
			// var_dump($_GET['id']);die;
			$id =isset($_GET['id'])?($_GET['id']):'0';
			$id = 'where `path` like "%,'.$_GET['id'].',"';
			// var_dump($id);die;
			// 查询用户数据
			$data = $this->category->getCategorySubclass($id);
			

			include 'View/category/index.html';
		}

		

		// 加载 新增页面
		public function add()
		{	
			// 判断 add 的pid 和path
				// pid
			// $_SESSION['LastUrl'] = $_SERVER['HTTP_REFERER'];
			$pid	= isset($_GET['id'])? $_GET['id']:'0';
			$path   = isset($_GET['path'])? $_GET['path'].$_GET['id'].',' :'0,';

			// var_dump($pid,$path);die;
			// 加载新增用户页面
			// 
			// 
			include 'View/category/add.html';
		}


		// 执行 新增方法
		public function doAdd()
		{
			// 加载用户类
			// include 'Model/category.class.php';
			// $this->category = new category;

			
			// 调用添加用户的方法
			$id = $_POST['pid'];
			$data = $this->category->addcategory();
			// 根据不同的结果提示并跳转
			if($data)
			{

				notice('成功添加用户','index.php?c=category&m=searchSubclass&id='.$id);
			}else
			{

				notice('添加用户失败');
			}


		}

		// 加载 编辑用户
		public  function edit()
		{
			// 根据id 查询相关数据
			$data = $this->category->findOne();

			// 加载 编辑界面
			include 'View/category/edit.html';
		}

		// 执行 编辑用户
		public function doEdit()
		{
			// 调用 编辑用方法
			$data = $this->category->editcategory();


			// 根据结果跳转不同页面
			if($data){
				notice('成功更新用户', 'index.php?c=category');
			}

			notice('更新用户失败');
		}

		// 删除用户
		public function del()
		{
			
			// 调用 删除方法
			$data = $this->category->delCategory();

			// 根据结果跳转不同页面
			header('location: '.$_SESSION['LastUrl']);
		
		}

		// 修改状态
		public function status()
		{
			// 调用 状态方法
			$data = $this->category->status();
			header('location: '.$_SERVER['HTTP_REFERER']);
		}


		// 加载 详情页面
		public function detail()
		{
			// 根据id 查询相关数据
			$data = $this->category->findOne();

			include 'View/category/detail.html';
		}


	}



 ?>