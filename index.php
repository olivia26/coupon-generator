	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>My First PHP Program</title>
			<link href="style.css" rel="stylesheet" type="text/css">

			</head>
			<body>



				<div id="main">

				<h1>PHP Coupon Generator</h1>

				<p>
				<?php
if(isset($_GET['cp']))
{
	$code=$_GET['cp'];
	if($code=="30%")
	{
		echo "Your 30% coupon:".rand();

	}
	if($code=="40%")
	{
		echo "Your 40% coupon:".rand();

	}
	

}


				 ?></p>


  <p>  <button class="button" ><a href="index.php?cp=30%">30% Coupon</button></p>

	<p>	<button class="button" ><a href="index.php?cp=40%">40% Coupon</button></p>


			    </div>

			</body>
			</html>
