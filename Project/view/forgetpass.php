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
	<title>Forgot Password</title>
<?php
include "header.php";                 
?>
</head>
<body>
	
					<h2>Reset Password</h2>
				<div class="fp-form">

					<form action="../control/ForgetPasswordAction.php" method="POST" onsubmit="return(validateForgetPasswordForm(this));">
						<label for="username"><span class="flll">username</span></label><br>
						<input type="text" name="user" id="user" class="finput" autofocus>
						<span id="err1"></span>
						<br><br>
						<label for="password"><span class="flll">New Password</span></label><br>
						<input type="password" name="npassword" id="npassword" class="finput"><br><br>
						<span id="err2"></span>

						<label for="cpassword"><span class="flll">Confirm Password</span></label><br>
						<input type="password" name="cnpassword" id="cnpassword" class="finput"><br><br>

						<span id="err3"></span>
						<br><br><br>
						<input type="submit" value="RESET" class="frsubmit">
					</form>
					
				</div>
			
<?php
include "footer.php";                
?>			
</body>

</html>