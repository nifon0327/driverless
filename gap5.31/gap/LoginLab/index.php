<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页-Gap中国官网</title>
	<link rel="icon" href="首页 - Gap中国官网_files/www.ico.la_5579b930862f6ab7cddca1127eee0503_40X40.ico">
	<link rel="stylesheet" href="clearfix.css">
	<link rel="stylesheet" href="GapIndex.css">	
</head>
<body>
	<div class='header clearfix'>
		<div class='headerMain clearfix'>
			<div class='icoGap fl'></div>
			<div class='icoON fl'></div>
			<div class='shoppingList fr mlb mrs'>&#xe60a;</div>
			<div class='headerLogin fr' id='btn3'>    <!-- 注册按钮 -->
			<script>						//弹出下拉框
	            // window.onload=function()
	            // {
	                btn3.onclick=function()
	                {
	                    div3.style.display =
	                        !div3.style.display||div3.style.display=='none' ? 'block':'none';
	                }
	            // }
       		 </script>
				<div class=headerLoginContent id='div3'>     <!-- 注册下拉框 -->
					<div class='headerLoginContentButton'>
						<?php 
						// 使用session之前, 一定先开启session
						session_start();
						// var_dump($_SESSION);
						?>
						<?php if (!empty($_SESSION['userName'])): ?>
						<a href="vip.php"><?= $_SESSION['userName']?></a> | 
						<a href="logout.php"> 退出 </a>
					<?php else: ?>
						<a href="register.php">注册</a> | <a href="login.php">登录</a>
						
						<?php endif ?> 
					</div>
					<hr width=90px align=center color=#ccc >
					<ul>
						<li>我的订单</li>
						<li>帮助中心</li>
						<li>在线客服</li>
						<li>查找门店</li>
					</ul>
				</div>
			</div>
			<span class='headerMiddle fr tdl'> 查看详情</span> <span class='headerMiddle fr'>满RMB199免运费 | 正价商品退换货包邮&ensp; </span>					
		</div>										<!-- 需加个超链接 -->
		<div class='headerNav clearfix' id='btn1'>
			<div class='headerNavPicture clearfix' >
       		 <script>							//蓝条图片改变
				function change_pic()
				{
					var imgObj = document.getElementById("pic1");
					var Flag=(imgObj.getAttribute("src",2)=="首页 - Gap中国官网_files/170504CNopen.jpg")
					imgObj.src=Flag?"首页 - Gap中国官网_files/170504CNclose.jpg":"首页 - Gap中国官网_files/170504CNopen.jpg";
				}
			</script>
				<img src="首页 - Gap中国官网_files/170504CNopen.jpg" id='pic1' onClick="change_pic()">
			</div>
			<script>						//蓝条框点击出现
	            // window.onload=function()
	            // {
	                btn1.onclick=function()
	                {
	                    div1.style.display =
	                        !div1.style.display||div1.style.display=='none' ? 'block':'none';
	                }
	            // }
       		 </script>
			<div class='headerNavPop clearfix' id='div1'></div>
		</div>
	</div>
	<div class='main clearfix'>
		<div class='headerSearch clearfix'>
			<div class='headSearchBorder' id='div2' >
				<form action="">
					<label><div class='headerSearchPic fr'>&#xe603;</div>
					<input type="text" placeholder='请输入关键词' id='test'></label>
				</form>
			</div>
			<script>
	        		document.getElementById('test').onfocus=function() 
	        	{
		            document.getElementById('div2').style.outline='1px solid #A6C8FF';
	        	};
	        	document.getElementById('test').onblur=function() 
	        	{
		            document.getElementById('div2').style.outline='none';
	        	};
   			</script>

		</div>
		<div class='mainNav clearfix'>
			<div class='mainNavLogo clearfix'></div>
			<div class='mainNavBorder fl clearfix'>
				<ul>
					<li>首页</li>
					<li>|</li>
					<li>新品</li>
					<li>|</li>
					<li>女装</li>
					<li>|</li>
					<li>孕妇装</li>
					<li>|</li>
					<li>男装</li>
					<li>|</li>
					<li>女孩</li>
					<li>|</li>
					<li>男孩</li>
					<li>|</li>
					<li>幼儿</li>
					<li>|</li>
					<li>婴儿</li>
					<li>|</li>
					<li>GapFit</li>
					<li>|</li>
					<li>Sale</li>
				</ul>
			</div>
		</div>
		<div class='mainborder'>
			<div class='mainBannerOne mt'></div>
			<div class='mainBannerTwo mt'></div>
			<div class='mainBannerThree mt'></div>
			<div class='mainBannerFour mt'></div>
			<div class='mainBannerFive mt'></div>
			<div class='mainBannerSix mt'></div>
			<div class='mainBannerSeven mt'></div>
			<div class='mainBannerEight mt'></div>
			<div class='mainBannerNight mt'>
				
			</div>
		</div>
	</div>
	<div class='footer'></div>
</body>
</html>