<?php 
	// 一个类文件, 一般只放类
	class DB
	{
		// 数据库连接
		private $link;

		// 数据库表名
		private $table;

		private $condition = array(
						'where' => '',
						'order' => '',
						'group' => '',
						'field' => '*',
						'limit' => ''
						);

		public function __construct($table)
		{
			// 连接数据库 connect   link
			$this->connect();

			// 选择数据表
			$this->table = $table;
		}

		public function connect()
		{
			$this->link = new PDO(DSN, USER, PWD);
		}

		/**
		 * [find 查询一条数据]
		 * @return array    	  [查询到的一维数组]
		 */
		public function find()
		{	
			$sql = 'select '.$this->condition['field'].' from '.$this->table.' '.$this->condition['where'];
			// echo $sql;die;
			$result = $this->link->query($sql);

			return $result->fetch(PDO::FETCH_ASSOC);
			
		}


		/**
		 * [select 查询所有数据]
		 * @return array    [查询到的二维数组]
		 */
		public function select()
		{
			$sql = 'select '.$this->condition['field'].' from `'.$this->table.'` '.$this->condition['where'].$this->condition['order'].$this->condition['group'].$this->condition['limit'];
			$result = $this->link->query($sql);
			return $result->fetchAll(PDO::FETCH_ASSOC);
		}

		/**
		 * [delete 删除数据]
		 * @param  int  	$id   [主键id号]
		 * @return int            [0: 失败  >=1: 成功]
		 */
		public function delete($id)
		{
			$sql = 'delete from `'.$this->table.'` where `id` = "'.$id.'"';
			return $this->link->exec($sql);

		}

		/**
		 * [insert 新增数据]
		 * @param  array  	$data [新增的数据]
		 * @return int            [0: 失败  >=1: 成功]
		 */
		public function insert($data = array())
		{
			// 判断是否传值
			if(empty($data)){
				$data = $_POST;
			}

			// 拼接sql语句
			$field = '';
			$value = '';
			foreach ($data as $k => $v) {
				$field .= '`'.$k.'`,';
				$value .= '"'.$v.'",';
			}

			$field = rtrim($field, ',');
			$value = rtrim($value, ',');

			$sql = 'insert into `'.$this->table.'` ('.$field.') values ('.$value.')';
			// echo $sql; die;
			return $this->link->exec($sql);
		}

		/**
		 * [update 更新数据]
		 * @param  int  	$id   [主键id号]
		 * @param  array  	$data [更新的数据]
		 * @return int            [0: 失败  >=1: 成功]
		 */
		public function update($id, $data = array())
		{
			// 判断数据是否存在
			if(empty($data)){
				$data = $_POST;
			}

			// 拼接sql 语句
			$field = '';
			foreach ($data as $k => $v) {
				$field .= '`'.$k.'`="'.$v.'",';
			}

			$field = rtrim($field, ',');

			$sql = 'update '.$this->table.' set '.$field.' where id = '.$id;

			return $this->link->exec($sql);
		}

		public function count()
		{
			$sql = 'select count(`id`) as sum from `'.$this->table.'` '.$this->condition['where'];
			// echo $sql;die;
			$result = $this->link->query($sql);
			$result = $result->fetch(PDO::FETCH_ASSOC);
			return $result;
		}


		public function __call($method, $value)
		{	
			$this->condition[$method] = $value[0];
			return $this;
		}


	}





 ?>