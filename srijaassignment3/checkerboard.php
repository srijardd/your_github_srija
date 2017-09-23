<html>
<head>
<title>Checker-board problem</title>
<style>
table 
{
	cellpadding: 1px;
	cellspacing: 1px;
	border: 1px;
	width: 350px;
	height: 350px;

}
td{
	width: 35px;
	height: 35px;
}
</style>

<?php

 echo '<table>'; 
for($i=0;$i<16;$i++){ 
echo '<tr>'; 
for($j=0;$j<16;$j++){ 
$c = ($i+$j)%2 ? 'red' : 'black'; 
echo '<td bgcolor="'.$c.'"/>'; 
} 
echo '</tr>'; 
} 
echo '</table>';
?>
</head>
</html>