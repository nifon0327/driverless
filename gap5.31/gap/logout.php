<?php
	session_start();

	unset($_SESSION['userName']);
	notice('退出成功','index.php');
	

function notice($msg,$url='',$time = 2)
{
	echo '<div class="back" style="width: 100%;height: 100%;background-color: rgba(0,0,0,0.3);position:fixed;left:-5px top:-5px"> <div class="notice" style="width: 500px;height: 200px;background-color: white;position: fixed;z-index:100;left: 30%;top: 30%;text-align: center;line-height: 200px;vertical-align:middle">'.$msg.'</div></div>'; 
	if($url=='')
	{
		$url = $_SERVER['HTTP_REFERER'];
	}

	echo '<meta http-equiv="refresh" content="'.$time.'; url='.$url.'">';
	exit;
}

?>