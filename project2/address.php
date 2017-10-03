<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
</head>

<body>

<?php
echo "<h2>Your Address:</h2>";
echo ($_POST['name']);
echo "<br>";
echo ($_POST['add1']);
echo "<br>";
echo ($_POST['add2']);
echo "<br>";
echo ($_POST['city']);
echo "<br>";
echo ($_POST['state']);
echo "<br>";
echo ($_POST['zip']);
echo "<br>";
echo ($_POST['phone']);

?>
<form action="thankyou1.php" method="post">
<input name="Button" type="submit" value="Submit">
</form>
</body>
</html>