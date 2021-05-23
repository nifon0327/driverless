<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页-Gap中国官网</title>
	<link rel="icon" href="首页 - Gap中国官网_files/www.ico.la_5579b930862f6ab7cddca1127eee0503_40X40.ico">
	<link rel="stylesheet" href="clearfix.css">
	<link rel="stylesheet" href="GapIndex.css">	
	<style>
		@import url('./login.css');
	</style>
	
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
						<a href="">注册</a> 
						 / 
						 <a href="login.php">登录</a> 
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
	</div>
	<div class='loginborder'>
			<a href="index.php">首页</a>
			<a href="register.php">注册</a>
		<div class='login'>
			<div class='loginHeader'>已注册用户（Old Navy账户畅通无阻）
			</div>
			
			<form action="action.php" method='post' enctype='multipart/form-data'>
				<ul>
					<li>
						用户名　<input type="text" name='userName'><br>
						　　　　如果您已经在门店注册为会员，请使用手机号进行登录或信息补充。<br>
					</li>
					<li>密　码　<input type="password" name='passWords'> 
					</li>
					<li><input type="checkbox">记住我的密码　　　<a href="">找回密码</a></li>
					<li><input type="submit" value='登录'></li>
				</ul>
				
				
			</form>
		</div>
	</div>	
	</body>
</html>