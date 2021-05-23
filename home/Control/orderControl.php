<?php 
	class orderControl extends Control
	{
		function index()
		{
			include 'View/order/index.html';
		}

		function order()
		{
			include 'View/order/order.html';
		}

		function obligation()
		{
			include 'View/order/obligation.html';
		}

		function stock()
		{
			include 'View/order/stock.html';
		}

		function distribution()
		{
			include 'View/order/distribution.html';
		}

		function completed()
		{
			include 'View/order/completed.html';
		}

		function exchanged()
		{
			include 'View/order/exchanged.html';
		}

		function gift()
		{
			include 'View/order/gift.html';
		}

		function collect()
		{
			include 'View/order/collect.html';
		}

		function comment()
		{
			include 'View/order/comment.html';
		}

		function remarked()
		{
			include 'View/order/remarked.html';
		}

		function coupon()
		{
			include 'View/order/coupon.html';
		}
	}

 ?>