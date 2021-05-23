<?php 
	class IndexControl extends Control
	{
		public function index()
		{
			// echo 'indexControll下的方法index';
			include 'View/index/index.html';
		}

		public function top()
		{
			include 'View/index/top.html';
		}

		public function left()
		{
			include 'View/index/left.html';
		}

		public function swich()
		{
			include 'View/index/swich.html';
		}

		public function main()
		{
			include 'View/index/main.html';
		}

		public function bottom()
		{
			include 'View/index/bottom.html';
		}

	}


 ?>