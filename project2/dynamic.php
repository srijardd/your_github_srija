<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<link rel='stylesheet' type='text/css' href='items.css'>
<link rel='stylesheet' type='text/css' href='style.css'>    
<link rel='stylesheet' type='text/css' href='menu.css'>      
</head>

<body>
  <div id="profile">
<b id="welcome">Welcome to Womens Fashion</b><br>
<b id="welcome">Selected Items for Purchase </b>
<b id="logout"><a href="shipping.html">Click here for Shipping Address</a></b>
</div>
  
        <div id='cssmenu'>
        <link rel="stylesheet" type="text/css" href="menu.css">
<ul>
   <li><a href='#'><span>Home</span></a></li>
   <li class='active has-sub'><a href='#'><span>Products</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Product 1</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Product 2</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'><span>About</span></a></li>
   <li class='last'><a href='#'><span>Contact</span></a></li>
</ul>
</div>
    

<?php

//Initialize variables
  
 $cost=0;
 $count=0;
 echo "<div class='prin'>";
if(isset($_POST['1']))
{
   $cost=$cost+75;
   $count++;
   
   echo "<div  class='dynamic'> "
   . "<img  class='imgsize' src='1.jpg'><br> <div class='names'>"
           . ""
           . "<span class='item'><br/>$75</span></div></div>";

}
if(isset($_POST['2']))
{
   $cost=$cost+50;
$count++;

   echo "<div  class='dynamic'> "
   . "<img  class='imgsize' src='2.jpg'><br> <div class='names'>"
           . ""
           . "<span class='item'><br/>$50</span></div></div>";

}
if(isset($_POST['3']))
{
   $cost=$cost+65;
$count++;
echo "<div  class='dynamic'> "
   . "<img  class='imgsize' src='3.jpg'><br> <div class='names'>"
           . ""
           . "<span class='item'><br/>$65</span></div></div>";



}
if(isset($_POST['4']))
{
   $cost=$cost+99;
$count++;
echo "<div  class='dynamic'> "
   . "<img  class='imgsize' src='4.jpg'><br> <div class='names'>"
           . ""
           . "<span class='item'><br/>$99</span></div></div>";


}
if(isset($_POST['5']))
{
   $cost=$cost+99;
$count++;

echo "<div  class='dynamic'> "
   . "<img  class='imgsize' src='5.jpg'><br> <div class='names'>"
           . ""
           . "<span class='item'><br/>$99</span></div></div>";


}
if(isset($_POST['6']))
{
   $cost=$cost+90;
$count++;

echo "<div  class='dynamic'> "
   . "<img  class='imgsize' src='6.jpg'><br> <div class='names'>"
           . ""
           . "<span class='item'><br/>$90</span></div></div>";


}
if(isset($_POST['7']))
{
   $cost=$cost+99;
$count++;
echo "<div  class='dynamic'> "
   . "<img  class='imgsize' src='7.jpg'><br> <div class='names'>"
           . ""
           . "<span class='item'><br/>$99</span></div></div>";



}
if(isset($_POST['8']))
{
    echo "<div  class='dynamic'> "
   . "<img  class='imgsize' src='8.jpg'><br> <div class='names'>"
           . ""
           . "<span class='item'><br/>$90</span></div></div>";
   $cost=$cost+90;
$count++;
}
if(isset($_POST['9']))
{
   $cost=$cost+99;
$count++;
echo "<div  class='dynamic'> "
   . "<img  class='imgsize' src='9.jpg'><br> <div class='names'>"
           . ""
           . "<span class='item'><br/>$99</span></div></div>";


}

echo "</div>";
echo"<div class='ans'>";
echo "<br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>  <br/> <br/> <br/> <br/><span class='op'> <b>Total number of items purchased is $count and the cost is $ $cost </b> </span>";

echo"</div>";







?>

</body>