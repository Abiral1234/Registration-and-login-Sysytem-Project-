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
<span><a href="index.html"><b>Sign UP</b></a></span>
<span><a href="Login.php"><b>Log In</b></a></span>
<br><br>
<?php

	echo "<h1>"."You are now logged out "."</h1>";
	

?>
</nav>
</body>
</html>
