<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	html {
height: 100%;
}
body {
background-image: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}
</style>
<title>Admin Login</title>
<?php                 
include "header.php";                 



if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	
} else {
	setcookie("username","");
	setcookie("password","");
	
}

?>

</head>
<body>
 
<h2>Admin Login</h2>

<form action="..\view\AdminPanel.php" method="post" style="border: 2px dotted blue; text-align:center; width: 400px;">
	<p>
		Username: <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" class="input-field">
	</p>
		 <p>Password: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field">
	</p>
		<p><input type="checkbox" name="remember" /> Remember me
	</p>
		<p><input type="submit" value="Login"></span></p>
</form>

    <br><br>
	<a href="../view/login.php"> Back </a>
  
</div>

<?php
include "footer.php";                
?>
</body>
</html>
