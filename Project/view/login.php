<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
    html {
height: 100%;
}
body {
background-image: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}
</style>

    <title>Login</title>
<?php
include "header.php";
include  "../control/LoginAction.php";                
?>
 </head>
<body>

<form method="post" action= "../view/CustomerLogin.php"> 
<input type="submit" value="Customer">
</form>
<form method="post" action= "../view/StaffLogin.php"> 
<input type="submit" value="Staff">
</form>
<form method="post" action= "../view/AdminLogin.php"> 
<input type="submit" value="Admin">
</form>
<form method="post" action= "../view/ServiceProviderLogin.php"> 
<input type="submit" value="Service Provider">
</form>
<h2><a href="../view/registation.php">New Here? Create a free account.</a></h2>
<h3><a href="../view/Jobs.php">Looking for a Job? Check this out.</a></h3>

<br><br>
	<a href="../view/home.php"> Back </a>
    
<?php
include "footer.php";                
?>
</body>
</html>