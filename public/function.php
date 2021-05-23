<?php 

	/**
	 * [notice 提示并跳转]
	 * @param  string  $msg  [提示信息]
	 * @param  string  $url  [要跳转到哪里去]
	 * @param  integer $time [几秒后跳转]
	 */
	function notice($msg, $url = '', $time = 2){
		// 1. 显示弹窗
		echo '<div class="back" style="width: 100%; height: 100%; background-color: rgba(0,0,0,0.3); position:fixed; left:0; top:0"></div>
			  <div class="info" style="width: 500px; height: 200px; background-color: #fff; z-index:9999; position:fixed; left: 30%;top: 30%; text-align: center; line-height:200px;">'.$msg.'</div>';

		// 2. 判断$url 是否为空,  为空 设定默认值 上一级来源地址
			if($url  == ''){
				$url = $_SERVER['HTTP_REFERER'];
			}

		// 3. 跳转到指定页面
		echo '<meta http-equiv="refresh" content="'.$time.'; url='.$url.'">';
		exit;
	}

	/**
	 * [notice 提示并跳转]
	 * @param  string  $msg  [提示信息]
	 * @param  string  $url  [要跳转到哪里去]
	 * @param  integer $time [几秒后跳转]
	 */
	function noticeframe($msg, $url = '', $time = 2){
		// 1. 显示弹窗
		echo '<div class="back" style="width: 100%; height: 100%; background-color: rgba(0,0,0,0.3); position:fixed; left:0; top:0"></div>
			  <div class="info" style="width: 500px; height: 200px; background-color: #fff; z-index:9999; position:fixed; left: 20%;top: 30%; text-align: center; line-height:200px;">'.$msg.'</div>';

		// 2. 判断$url 是否为空,  为空 设定默认值 上一级来源地址
			if($url  == '')
			{
				$url = $_SERVER['HTTP_REFERER'];
			}

		// 3. 跳转到指定页面
		echo '<meta http-equiv="refresh" content="'.$time.'; url='.$url.'">';
		exit;
	}


	/**
	 * [imgUrl 专门获取图片的完整网址路径]
	 * @param  string $filename [图片名]
	 * @return string $path     [完整的网址路径]
	 */
	function imgUrl($filename)
	{
		// filename =  20170601592fd991aee22.jpg

		// /public/uploads/2017/06/01/ xxxxxxxxxxxx.jpg
		$path = '/public/uploads/';

		$path .= substr($filename, 0, 4).'/';
		$path .= substr($filename, 4, 2).'/';
		$path .= substr($filename, 6, 2).'/';
		$path .= $filename;

		return $path;
	}

