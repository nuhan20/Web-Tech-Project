<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $passErr = $usernameErr = $phnoErr = $pfrjbErr = "";
$name = $email = $gender = $comment = $website = $psw = $username = $phno = $nid = $rfr = $pfrjb ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["pfrjb"])) {
    $pfrjbErr = "Required";
  } else {
    $pfrjb = test_input($_POST["pfrjb"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$pfrjb)) {
      $pfrjbErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["username"])) {
    $usernameErr = "Username is null";
  } else {
    $username = test_input($_POST["username"]);
  }

  if (empty($_POST["psw"])) {
    $passErr = "Password is required";
  } else {
    $psw = test_input($_POST["psw"]);
    if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/",$psw)) {
      $passErr = "Invalid Password";      
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["phno"])) {
    $phno = "";
  } else {
    $phno = test_input($_POST["phno"]);
  }

  if (empty($_POST["nid"])) {
    $nid = "";
  } else {
    $nid = test_input($_POST["nid"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["rfr"])) {
    $rfr = "";
  } else {
    $rfr = test_input($_POST["rfr"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</body>
</html>