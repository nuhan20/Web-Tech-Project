<!doctype html>
<html lang="en">
<head>
<title>Success</title>
<?php                 
include "../view/header.php";
require "../control/RegistrationAction.php";

$myfile = fopen("../data/RegUsersDatabase.txt", "a") or die("Unable to open file!");
$txt = "Name: ".$name . "\nEmail: ". $email. "\nUsername: ". $username. "\nGender: ".
$gender . "\nMobile Number: ". $phno. "\nNID: ". $nid. "\n\n";
fwrite($myfile, $txt);
fclose($myfile); 

$myfile = fopen("../data/userpass.txt", "a") or die("Unable to open file!");
$txt = $username. ":".$psw."\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("../data/RegDone.txt", "w") or die("Unable to open file!");
$txt = "Name: ".$name . "\nEmail: ". $email. "\nUsername: ". $username. "\nGender: ".
$gender . "\nMobile Number: ". $phno. "\nNID: ". $nid. "\n\n";
fwrite($myfile, $txt);
fclose($myfile); 
?>

<h2>Account Created Successfully</h2>
</head>
<body>

<div class="acc_info">
        <h3>Account Information</h3>
<?php
$myfile = fopen("../data/RegDone.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>"; }
fclose($myfile);
?>
    </div>
    <br>
   <h2><a href="../view/login.php">You May Log In Now</a></h2> 
    <br>

<?php
include "../view/footer.php";                
?>
</body>
</html>
