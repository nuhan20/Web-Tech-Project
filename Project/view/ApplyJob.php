<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
  
  html {
height: 100%;
}
body {
background-image: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}

.error {color: #FF0000;}
</style>
	
	<title>Apply</title>
<?php
include "header.php";   
require "../control/RegistrationAction.php";              
?>
</head>
<body>
	<center><h1>Apply For A Job</h1></center>
<form method="post" action= "../control/PostApplyAction.php"> 
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Preferred Job: <input type="text" name="pfrjb" value="<?php echo $pfrjb;?>">
  <span class="error">* <?php echo $pfrjbErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Username: <input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
    <label for="psw">Password: </label>
    <input type="password" id="psw" name="psw" value="<?php echo $psw;?>"
	 title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
	<span class="error">* <?php echo $passErr;?></span>
<?php include "../control/PasswordAction.php";?>
<br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Mobile Number: <input type="number" name="phno" value="<?php echo $phno;?>">
  <br><br>
  National ID Number: <input type="number" name="nid" value="<?php echo $nid;?>">

  <br><br>
  Social Media Link: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Skill and Experiences: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  References [if any]: <textarea name="comment" rows="1" cols="50"><?php echo $rfr;?></textarea>
  <br><br>

  <p><span class="error">* required field</span></p>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
	

	<?php
include "footer.php";                
?>
</body>
	
</html>