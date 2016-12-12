<?php 
 session_start();

if(isset($_SESSION["user"])){
  if($_SESSION["user"]!=null)
  {
    header("location:lister_pers.php");
  }
}
?>




<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div class="container">
<h1>Login</h1>
	<div class="signin">
     	<form action="login.php" method="post">
	      	<input type="text" name="username" class="user" value="Usernam" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required/>
	      	<input type="password" name="password" class="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required />
	      	
          	<input type="submit" name="submit" value="LOGIN" />
	 	</form>
	 	<center><a href="inscription.html" style='color:#eee;font-size:30px;margin-top:40px;'>Inscription</a></center>
	</div>
</div>

</body>
</html>