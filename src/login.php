<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<?php
	if(isset($_POST['login'])){
		include 'database.php';
        $query = "SELECT login, password FROM user WHERE id = 1";
        $result = mysql_query($query);
      	$array = mysql_fetch_assoc($result);
        $login = $array['login'];
        $password = $array['password'];

        if($login == $_POST['user'] && $password == $_POST['pass']){
        	echo "<script type=\"text/javascript\"> window.location = \"admin.php\" </script>";
        }
        else{
        	echo "<script>alert(\"Incorrect username or password\")</script>";
        }
    }
?>
	
	<div class="modal-dialog">
	<div class="loginmodal-container">
		<h1>Login to Your Account</h1><br>
	  <form action="login.php" method="post">
		<input type="text" name="user" placeholder="Username">
		<input type="password" name="pass" placeholder="Password">
		<input type="submit" name="login" class="login loginmodal-submit" value="Login">
	  </form>
		
	</div>
	</div>

</body>
</html>
