<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页-Gap中国官网</title>
	<link rel="icon" href="首页 - Gap中国官网_files/www.ico.la_5579b930862f6ab7cddca1127eee0503_40X40.ico">
	<link rel="stylesheet" href="clearfix.css">
	<link rel="stylesheet" href="order of goods.css">	
	
</head>
<body>
	<!-- 头部 -->
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
						<a href="order of goods.php"><?= $_SESSION['userName']?></a> | 
						<a href="logout.php"> 退出 </a>
					<?php else: ?>
						<a href="register.php">注册</a> | <a href="login.php">登录</a>
						
						<?php endif ?> 
					</div>
					<hr width=90px align=center color=#ccc >
					<ul>
						<a href="order of goods.php"><li>我的订单</li></a>
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
	<!-- 主干 -->
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
		<!-- 商品页 -->
		<div class='mainContainer clearfix'>
			<div class='goodsTitle clearfix'>
				<a href="index.php" class='ls'>首页</a>
				<a href="" class='pl ml ls'>我的账户</a>
				<a href="" class='pl ml ls'>我的订单</a>
			</div>
			<div class='goodsLeft clearfix'>
				<div class='myAdmin'>我的账户</div>
				<div class='goodsLeftInner'>
					<ul>
						<li class='InnerTypeOne'><a href="Order/orderOne.php" class='cl' target='goodsRightFrame'>我的订单</a></li>
						<li class='InnerTypeTwo'><a href="Order/orderTwo.php" class='cl' target='goodsRightFrame'>待付款订单</a></li>
						<li class='InnerTypeTwo'><a href="Order/orderThree.php" class='cl' target='goodsRightFrame'>备货中订单</a></li>
						<li class='InnerTypeTwo'><a href="Order/orderFour.php" class='cl' target='goodsRightFrame'>配送中订单</a></li>
						<li class='InnerTypeTwo'><a href="Order/orderFive.php" class='cl' target='goodsRightFrame'>已完成订单</a></li>
						<li class='InnerTypeTwo'><a href="Order/orderSix.php" class='cl' target='goodsRightFrame'>退换货订单</a></li>
						<li class='InnerTypeTwo'><a href="Order/orderSeven.php" class='clo' target='goodsRightFrame'>礼品卡订单</a></li>
					</ul>
					<ul>
						<li class='InnerTypeThree'><a href="Order/orderEight.php" class='cl' target='goodsRightFrame'>我的收藏</a></li>
						<li class='InnerTypeTwo'><a href="Order/orderEight.php" class='cl' target='goodsRightFrame'>我收藏的商品</a></li>
					</ul>
					<ul>
						<li class='InnerTypeThree'><a href="Order/orderNight.php" class='cl' target='goodsRightFrame'>我的评论</a></li>
						<li class='InnerTypeTwo'><a href="Order/orderNight.php" class='cl' target='goodsRightFrame'>待评论商品</a></li>
						<li class='InnerTypeTwo'><a href="Order/orderTen.php" class='cl' target='goodsRightFrame'>已评论商品</a></li>
					</ul>
					<ul>
						<li class='InnerTypeThree'><a href="Order/orderElevn.php" class='cl' target='goodsRightFrame'>积分和优惠券</a></li>
						<li class='InnerTypeTwo'><a href="Order/orderElevn.php" class='cl' target='goodsRightFrame'>我的优惠券</a></li>
					</ul>
					<ul>
						<li class='InnerTypeThree'><a href="Customer Center/customerCenterOne.php" class='cl' target='goodsRightFrame'>会员专区</a></li>
						<li class='InnerTypeTwo'><a href="Customer Center/customerCenterTwo.php" class='cl' target='goodsRightFrame'>修改账户信息</a></li>
						<li class='InnerTypeTwo'><a href="Customer Center/customerCenterThree.php" class='cl' target='goodsRightFrame'>修改密码</a></li>
						<li class='InnerTypeTwo'><a href="Customer Center/customerCenterFour.php" class='cl' target='goodsRightFrame'>修改邮箱</a></li>
						<li class='InnerTypeTwo'><a href="Customer Center/customerCenterFive.php" class='cl' target='goodsRightFrame'>管理收货地址</a></li>
					</ul>
				</div>
				<div class='myAdmin'></div>
			</div>
			<div class='goodsRight'>
				<iframe src="Customer Center/customerCenterOne.php" frameborder="0" name='goodsRightFrame' noresize scrolling=no></iframe>
			</div>
			
		</div>		

	<!-- 底部 -->
	<center>
		<div style='margin: 0 auto;'><img src="Gap男装经典纯棉侧开衩抽绳短裤 - Gap中国官网_files/footer"></div>
	</center>
	<div class='footer'>© 2017 Gap Inc.</div>
</body>
</html>