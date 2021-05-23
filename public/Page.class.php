<?php 
	class Page
	{
		// 当前页码
		private $page;
		// 当前的总页数
		private $count;
		// 当前的总条数
		private $sum;

		// 分页html 代码
		public function show()
		{
			// 获取当前文件的地址
			$scriptName = $_SERVER['SCRIPT_NAME'];

			// 拼接原有的网址参数
			$param = '';
			foreach ($_GET as $k => $v) {
				if($k == 'page'){
					continue;
				}
				$param .= '&'.$k.'='.$v;
			}

			// 动态生成数字页码
			$numList = '';
			for ($i = 1; $i <= $this->count; $i++) { 
				$numList .= ' <a href="'.$scriptName.'?page='.($i).$param.'">  '.$i.'  </a> ';
			}

			// 凑分页html代码
			$html = '共 '.$this->sum.' 条数据, 当前 '.$this->page.'/'.$this->count.' 页';
			$html .= '<a href="'.$scriptName.'?page=1'.$param.'"> 首页 </a>';
			$html .= '<a href="'.$scriptName.'?page='.($this->page-1).$param.'"> 上一页 </a>';
			$html .= $numList;
			$html .= '<a href="'.$scriptName.'?page='.($this->page+1).$param.'"> 下一页 </a>';
			$html .= '<a href="'.$scriptName.'?page='.$this->count.$param.'"> 尾页 </a>';

			return $html;
		}


		// 获取分页的 起始行数
		// $sum = 总条数
		// $num = 每页显示多少条
		public function limit($sum, $num = 3)
		{
			$this->sum = $sum;
			// 1. 接收当前的页码
			$this->page = isset($_GET['page'])? $_GET['page']: '1';

			// 计算总页数
			$this->count = ceil($sum/$num);

			// 判断页码范围
			$this->page = max($this->page, 1);
			$this->page = min($this->page, $this->count);

			// 偏移量
			$offset = ($this->page-1)*$num;

			$limit = 'limit '.$offset.','.$num;
			return $limit;
		}






	}




 ?>