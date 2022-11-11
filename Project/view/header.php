<html>
<head>

    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <style type="text/css">
    	.header
    	{
    		width: 100%;
    		height: 10%;
    		background-color: lightgrey;
    	}
		.footer
		{
    		width: 100%;
    		height: 10%;
    		background-color: lightgrey;
    		position: bottom;
    		bottom: 0%;
    	}

</style>
<style>
body {	
  
  background-color: white;
  color: black;
  font-size: 25px;
}

.dark-mode {
	
  background-color: rgb(60, 60, 60);
  color: white;
}
    </style>

</head>
<body>
<div class="header">
<div class="navbar">
  <a href="../view/home.php">Home</a>
  <a href="../view/Service.php">Services</a>
  <a href="#news">News</a>
  <a href="../view/contact.php">Contact</a>
  <a href="../view/login.php">SignIn</a>
  <a href="../view/Jobs.php">Jobs</a>


  <button onclick="myFunction()">Toggle</button>
<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}

</script>
</div>
</div>
<?php                 
include "navbar.php";                
?>
</body>