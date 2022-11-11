<!doctype html>
<html lang="en">
<head>
    <style type="text/css">
    html {
height: 100%;
}
body {
background-image: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}
</style>
<title>Staff Panel</title>
<?php                 
include "header.php";                
?>
      
    <h1 style="color:green;">
    Welcome Staff </h1>

        <form method="post">
        <input type="submit" name="button1"
                value="View Registard Customers"/>

                <input type="submit" name="button3"
                value="View Service Providers Database"/>

                <input type="submit" name="button4"
                value="View Applied Users Database"/>
</form>

  
    <?php
      
        if(isset($_POST['button1'])) {
            $myfile = fopen("../data/RegUsersDatabase.txt", "r") or die("Unable to open file!");
            while(!feof($myfile)) {
             echo fgets($myfile) . "<br>"; }
            fclose($myfile);
        }
    
        if(isset($_POST['button3'])) {
            $myfile = fopen("../data/ServiceProvidersDatabase.txt", "r") or die("Unable to open file!");
            while(!feof($myfile)) {
             echo fgets($myfile) . "<br>"; }
            fclose($myfile);
        }

        if(isset($_POST['button4'])) {
            $myfile = fopen("../data/AppliedUsersDatabase.txt", "r") or die("Unable to open file!");
            while(!feof($myfile)) {
             echo fgets($myfile) . "<br>"; }
            fclose($myfile);
        }

        if(isset($_POST['buttonX'])) {
            setcookie("username", "", time() - 3600);
            setcookie("password", "", time() - 3600);
     }
    ?>   
</head>
<body>
    
<form action="../view/home.php" method="post">
    <br><br>
                <input type="submit" name="buttonX"
                value="Logout"/>
<?php
include "footer.php";                
?>
</body>
</html>
