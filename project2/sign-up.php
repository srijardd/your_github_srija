<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
$password2=$_POST['rpassword'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);
// Selecting Database
//$db = mysql_select_db("company", $connection);
// SQL query to fetch information of registerd users and finds user match.
//$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
//$rows = mysql_num_rows($query);
$rows=1;
$email_a=$_POST['email'];
$rname="Mounika";
$passwd='Allam';

if ( strcmp($password,$password2)!=0) {
//$_SESSION['login_user']=$username; // Initializing Session
//header("location: profile.php"); // Redirecting To Other Page
    $error = "Passwords do not match";
}else if (!filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    $error = "Email is invalid";
}
else {
 // Initializing Session
header("location: thankyou.php"); // Redirecting To Other Page

}
//mysql_close($connection); // Closing Connection
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Sign-Up Form</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
 <div id="profile">
<b id="welcome">Welcome to the Mobile World </b>
<b id="logout"><a href="index.php">Sign in</a></b>
</div>   
    
<h1>Sign-Up Form</h1>
<div id="login">

<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Email :</label>
<input id="name" name="email" placeholder="email" type="text">

<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<label>Reenter Password :</label>
<input id="password" name="rpassword" placeholder="**********" type="password">


<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>