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
		 a{
			text-decoration: none;
			color:red;
		 }
		 label{
			 color:white;
		 }
		form{
			position: center;
		}
	</style>
	<script type="text/javascript">
		
		function validate(){
		var username= document.getElementById("uname");
		var password= document.getElementById("pass");
		var confirm = document.getElementById("confirm");
		var birthday= document.getElementById("birthday");

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
		else if(confirm.value.trim() =="" ){
			confirm.style.border="Solid 1px red";
			alert("Blank confirm password");
			return false;
		}
		else if(confirm.value.trim() != password.value.trim() ){
			confirm.style.border="Solid 1px red";
			alert("Password donot match");
			return false;
		}
		else if(birthday.value =="" ){
			password.style.border="Solid 1px red";
			alert("Enter brithday");
			return false;
		}

		else{
			return true;
		}
		}

	</script>
</head>
<body>
<div><h1>Register Here</h1></div>

<form onsubmit="return validate()" action="feed.php" method="POST">

	<input id="uname" type="name" name="username" placeholder="Username" class="field" onclick="hide" >
	<label id="lbl1" style="color:red;visibility:hidden">Enter your username</label>
	<br><br>
 	<input id="pass" type="password"  placeholder="Password" class="field">
	<br><br>
	<input type="password" placeholder="Confirm-Password" id="confirm" class="field" >
	<br><br>
 	<label>Brithday:</label> <br><br><input type="date" class="field" id="birthday"></label><br><br>
 	<label>Gender:</label><br><br>
	<input type="radio" name="gender" id="gender"><label>Male</label>
	<input type="radio" name="gender" id="gender"><label>Female</label><br><br>
	<button type="submit"  >Sign Up</button>
	<br>
	<label>Already have an account?</label>
	<a href="login.php" >Log In</a>

</form>
</body>
</html>                  