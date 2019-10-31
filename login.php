
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
		
		h1{	margin: 0px;
			background-color: lightblue;
			color: white;
			padding-top: 20px;
			padding-bottom: 20px;
			

		}
		.field{
			border-width: 0px;
			border-radius: 2px;
			border-color: grey;
			width: 300px;
			height: 30px;
		}
         button{
    	display: block;
    	text-decoration: none;
    	width: 90px;
    	height: 20px;
    	background: #4E9CAF;
    	text-align: center;
    	border-radius: 3px;
    	color: white;
    	font-weight: bold;
     	}
	</style>
	<script type="text/javascript">
		
		function validate(){
		var username= document.getElementById("uname");
		var password= document.getElementById("pass");

		if(username.value.trim() =="" ){
			username.style.border="Solid 1px red";
			alert("Blank username")
			return false;
		}
		else if(password.value.trim() =="" ){
			password.style.border="Solid 1px red";
			alert("Blank password");
			return false;
		}
		else if(password.value.trim().length<=4 ){
			password.style.border="Solid 1px red";
			alert("Password cannot be less than 5 character");
			return false;
		}

		else{
			return true;
		}
		}

	</script>
</head>
<body>
<div><h1>LOG IN</h1></div>
<form onsubmit="return validate()" action="feed.php" method="POST">
	<label> <input  id="uname" type="text" name="username" placeholder="username" class="field"></label><br><br>
	<label> <input  id="pass" type="password" name="password" placeholder="Password"class="field"></label><br><br>
	<button type="submit"  >Log In</button>
</form>

</body>
</html>