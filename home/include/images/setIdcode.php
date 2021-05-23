<?php 
	function setIdcode($w=100,$h=40,$num=4,$fontfamily='')
	{
		session_start();
		// 1. 创建一个画布
		$img = imagecreatetruecolor( $w, $h );

		// 2. 分配颜色
		$back = imagecolorallocate( $img, mt_rand( 200, 255 ), mt_rand( 200, 255 ), mt_rand( 200, 255 ) );
		$red = imagecolorallocate($img, 255, 0, 0 );

		// 3. 绘画
			// 3.1 填充背景
			imagefill($img, 0, 0, $back);
			imagerectangle( $img, 0, 0, $w-1, $h-1, $red );

		// 画字 
		$str = 'abcdefghijkmnpqrstuvwxyzABCDEFGHIJKMNPQRSTUVWXY3456789';
		$len = '';
		$fontcolor = imagecolorallocate($img,mt_rand( 0 ,100 ),mt_rand( 0 ,100 ),mt_rand( 0 ,100 ) );

			for ($i=0; $i < $num; $i++) 
			{ 
				$len .= $str{mt_rand( 0, strlen($str)-1 )};

				$x = $w/$num*$i + mt_rand( 2, 10 );

				$y = mt_rand( 5 ,$h*3/8 );
				if ( $fontfamily=='' ) 
				{
					imagechar($img ,mt_rand( $h/3, $h/2) ,$x ,$y ,$len{$i},$fontcolor);
				}else
				{
					imagefttext( $img, mt_rand( $h/3, $h/2), mt_rand( 0, 30 ), $x, $y, $fontcolor, $fontfamily, $len{$i});
				}
				$_SESSION['idCode'] = $len;
			}
			
			// 制作干扰线
			for ($i=0; $i < 6; $i++) 
			{ 
				// 制作线的颜色
				$lineColor = imagecolorallocate( $img ,mt_rand( 100 ,150 ),mt_rand( 100 ,150 ),mt_rand( 100 ,150 ) );

				imageline( $img, mt_rand( 2, $w-2 ), mt_rand( 2, $h-2 ), mt_rand( 2, $w-2 ), mt_rand( 2, $h-2 ), $lineColor );
			}

			// 制作干扰点
			for ($i=0; $i < 300 ; $i++) 
			{ 
				// 制作点的颜色
				$Color = imagecolorallocate( $img, mt_rand( 150, 200 ), mt_rand( 150, 200 ), mt_rand( 150, 200 ) );
				imagesetpixel( $img, mt_rand( 2, $w-2 ), mt_rand( 2, $h-2 ),$Color );

			}

		// 4. 告诉浏览器图片相关信息
		header( 'content-type:image/jpeg' );

		// 5. 将图片放到浏览器上
		imagejpeg( $img );

		// 6. 释放资源
		imagedestroy( $img );
	}

	setIdcode(140,30,6);	
 ?>