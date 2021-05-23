<?php 

	class Upload
	{
		// 保存路径
		private $savePath;
		// 允许类型
		private $allowType;

		public function __construct($savePath = '../public/uploads', $allowType = array('image'))
		{
			$this->savePath = $savePath;
			$this->allowType = $allowType;
		}

		// 判断是否有文件上传
		public function icon()
		{
			$key = key($_FILES);

			// 没有 $key 证明上传文件过大 或者 未接收到上传文件
			if( empty($key) || empty($_FILES[$key]['name'])  ){
				return false;
			}
			return true;
		}

		// 单文件上传
		public function singleFile()
		{
			// 1. 判断错误号  error
				$key = key($_FILES);
				// 1.1 判断是否有$_FILES
					if( empty($key) ){
						return  '上传的文件过大';
					}
				// 1.2 判断error号
					if($_FILES[$key]['error'] > 0){
						switch ($_FILES[$key]['error']) {
							case '1': return '上传的文件过大'; break; 
							case '2': return '上传的文件过大'; break; 
							case '3': return '网线被拔了'; break; 
							case '4': return '没上传文件'; break; 
							case '6': return '请联系管理员, 临时目录'; break; 
							case '7': return '请联系管理员, 上传权限'; break; 
						}
					}

			// 2. 判断post协议上传  
					if( !is_uploaded_file($_FILES[$key]['tmp_name']) ){
						return '请走正规渠道';
					}
			// 3. 判断文件类型 
					// 3.1 获取文件的类型
					$type = strstr($_FILES[$key]['type'] ,'/', true);
					
					if( !in_array($type, $this->allowType) ){
						return '类型不符合规范';
					}
					
			// 4. 设置新的文件名  
					// 4.1 获取源文件的扩展名
					$suffix = strrchr($_FILES[$key]['name'],'.');

					// 4.2 设计新的名字
					// 20170516xxxxxxxxx.jpg
					$filename = date('Ymd').uniqid().$suffix;

			// 5. 设置新的存储目录 
					$dir = $this->savePath.'/'.date('Y/m/d/');

			// 6. 判断存储目录
					if( !file_exists($dir)){
						mkdir($dir, 0777, true);
					}

			// 7. 移动文件
					if( move_uploaded_file($_FILES[$key]['tmp_name'], $dir.$filename  ) ){
						$return[] = $filename;
						return $return;
					}else{
						return '上传失败';
					}
		}


		// 多文件上传
		public function MultiFile()
		{

		}


	}


 ?>