<?php
	$a='18121132810';
	$b='123456';

	$userName   = $_POST['userName'];
	$passWords  = $_POST['passWords'];

	if ($userName !=$a)
	{
		notice('该用户不存在');
	}
	if ($passWords !=$b)
	{
		notice('密码或账号错误');
	}

	session_start();
	$_SESSION['userName'] = $userName;

	notice('登录成功, 正在拼命加载中...', 'index.php');

function notice($msg,$url='',$time = 2)
{
	echo '<div class="back" style="width: 100%;height: 100%;background-color: rgba(0,0,0,0.3);position:fixed;left:0 top:0"> <div class="notice" style="width: 500px;height: 200px;background-color: white;position: fixed;z-index:100;left: 30%;top: 30%;text-align: center;line-height: 200px;vertical-align:middle">'.$msg.'</div></div>'; 
	if($url=='')
	{
		$url = $_SERVER['HTTP_REFERER'];
	}

	echo '<meta http-equiv="refresh" content="'.$time.'; url='.$url.'">';
	exit;
}

?>







