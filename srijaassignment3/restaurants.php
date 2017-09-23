<html>
<head>
<title>Restaurants</title>
<style>

table {

	margin-left:auto;
	margin-right:auto;
	border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
}
</style>

<?php

        $restaurants= array("Chamcha Gaucha","Aviva By Kameel","Bone's Restaurant","Umi Sushi Buckhead","Fandangles","Capital Grille","Canoe","One Flew South","Fox Bros. BBQ","South City Kitchen Midtown" );

 $avgcosts= array("Chamcha Gaucha"=>"40.50","Aviva By Kameel"=>"15.00","Bone's Restaurant"=>"65.00","Umi Sushi Buckhead"=>"40.50","Fandangles"=>"30.00","Capital Grille"=>"60.50","Canoe"=>"35.50","One Flew South"=>"21.00","Fox Bros. BBQ"=>"15.00","South City Kitchen Midtown"=>"29.00" );	
	echo"<h1>Restaurants</h1>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Average Cost</th>";
	echo "</tr>";
	for($i=0;$i<count($restaurants);$i++)
	{
		echo "<tr>";
		echo "<td>$restaurants[$i]</td>";
		
		echo "<td>".$avgcosts[$restaurants[$i]]."</td>";
		echo "</tr>";
	}
	echo "</table>";

	echo "<br><br><br>";       
	sort($restaurants);
	echo"<h1>Restaurants sorted according to Name</h1>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Average Cost</th>";
	echo "</tr>";
	for($i=0;$i<count($restaurants);$i++)
	{
		echo "<tr>";
		echo "<td>$restaurants[$i]</td>";
		$store=$restaurants[$i];
		echo "<td>".$avgcosts[$store]."</td>";
		echo "</tr>";
	}
	echo "</table>";

	echo "<br><br><br>";       
	asort($avgcosts);
	echo"<h1>Restaurants sorted according to Rate</h1>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Average Cost</th>";
	echo "</tr>";
foreach($avgcosts as $x => $x_value) 
	{
		echo "<tr>";
		echo "<td>$x</td>";
		echo "<td>$x_value</td>";
		echo "</tr>";;
}
	
	echo "</table>";

?>
</head>
</html>