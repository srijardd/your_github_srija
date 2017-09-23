<html>
<head>
<title>Charlie-php problem</title>
<h3>Charlie ate  my Lunch or not </h3>
</head>
<body>
<?php

function isBitten()
{


return rand(0,1);


}



$val=isBitten();


if ($val==0)
	echo "Charlie did not eat my lunch!";
else 
	echo "Charlie ate my lunch!";

?>
</body>
</html>