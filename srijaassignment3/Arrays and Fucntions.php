<html>
<head>
<title>displaying months</title>
<?php

         $month= array("January" , "February" , "March" , "April" , "May" , "June" , "July" , "August" , "September" , "October" , "November" , "December" );
	
	echo "<b>Printing using the for loop</b>";
	echo "<br>";
	
	for($i=0;$i<12;$i++)
	{
		echo "$month[$i]";
		echo "<br>";
	}
	
	echo "<br>";
	echo "<b>Sorting in alphabetical order using for</b>";
	echo "<br>";
	
	sort($month);
	for($i=0;$i<12;$i++)
	{
		echo "$month[$i]";
		echo "<br>";
	}
	
	echo "<br>";
	
	
	echo "<b>Printing using the for-each loop</b>";
	echo "<br>";
	
	
	foreach($month as $value)
	{
		echo "$value";
		echo "<br>";
	}
	
	
	echo "<br>";
	echo "<b>Sorting in alphabetical order using for each loop</b>";
	echo "<br>";
	foreach($month as $value)
	{
		echo "$value";
		echo "<br>";
	}
?>
</head>
</html>