
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">!!!!....Welcome to womens fashion ....!!!! </b>
<b id="logout"><a href="logout.php">Log Out</a></b>
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
    
    
    <form action="dynamic.php" method="post">
        <link rel="stylesheet" type="text/css" href="items.css">
<div class="items">
<input type="checkbox" name="1" ><img  class="imgsize" src="1.jpg"></input>
<input type="checkbox" name="2" ><img  class="imgsize" src="2.jpg"></input>
<input type="checkbox" name="3" ><img class="imgsize" src="3.jpg"></input>
<br/>
<div class="names">
<span class="item"><br/>$75</span>

<span class="item"><br/>$50</span>

<span class="item"><br/>$65</span>

</div>
<br/> <br/> <br/> <br/> <br/>
<input type="checkbox" name="4" ><img  class="imgsize"src="4.jpg"></input>
<input type="checkbox" name="5" ><img class="imgsize" src="5.jpg"></input>
<input type="checkbox" name="6" ><img class="imgsize" src="6.jpg"></input>
<br/>
<div class="names">
<span class="item"><br/>$99</span>

<span class="item"><br/>$99</span>

<span class="item"><br/>$44</span>

</div>

<br/> <br/> <br/> <br/> <br/>
<input type="checkbox" name="7" ><img  class="imgsize"src="7.jpg"></input>
<input type="checkbox" name="8" ><img class="imgsize" src="8.jpg"></input>
<input type="checkbox" name="9" ><img class="imgsize" src="9.jpg"></input>
<br/>
<div class="names">
<span class="item"><br/>$99</span>

<span class="item"><br/>$90</span>

<span class="item"><br/>$99</span>

</div>

</div>
<div class="cart">
<br/><br/> <br/> <br/> <br/> <br/><br/> <br/> <br/> <br/> <br/>
<img class="cart1" src="cart.jpg">
<br/>
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
<input type="submit" value="Add To Cart"align="center" >
</div>
</form>
    
    
    
    
    
</body>
</html>