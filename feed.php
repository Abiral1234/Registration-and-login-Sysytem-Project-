<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css" >
		body{
			margin: 0px;
			background-color: lightgrey;
			padding: 0px;
			background-image:url(img1.png);
		}
		nav{
			margin-top: 0px;
			background-color: lightblue;
			color: white;
			height: 40px;
			padding-top: 20px;
			padding-bottom: 20px;
			
		}
		h1{
			font-size:50px;
			color:green;
			text-transform:capitalize;
		}
		/*a{
		display: inline;
    	text-decoration: none;
    	padding-top: 20px;
		padding-bottom: 20px;
    	width: 800px;
    	color: white;
    	margin: 0px;
		background-color: lightblue;
		color: white;
		
		}*/
		a{	display: inline;
			color: white;
			font-size: 36px;
			text-decoration: none;
			padding: 20px;
			
		}
		a:hover{
				background-color: red;
		}
		h1{
			margin-top: 25px;
			
		}
		span{
			text-decoration: bold;
		}
	</style>
</head>
<body>
<nav>
<span><a href="#"><b>Home</b></a></span>
<span><a href="#"><b>Create</b></a></span>
<span><a href="Logout.php"><b>LogOut</b></a></span>
<br><br>
<?php

	echo "<h1>"."Welcome To The HomePage ", $_POST['username']."</h1>";
	

?>
</nav>
</body>
</html>