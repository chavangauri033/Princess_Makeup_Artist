
<!DOCTYPE html>
<html>
<?php
?>
<br><br>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background-image:url('images/back.jpg');
  background-repeat:no-repeat;
  background-position:top center;
  background-attachment:scroll;
  background-size:100% 100%;
}

.navbar {
  overflow: hidden;
  background-color: black;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: center;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.navbar2 {
  overflow: hidden;
 
  font-family: Arial, Helvetica, sans-serif;
}

.navbar2 a {
  float: center;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: uderline;
}



.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:black;
}



.dropdown-content .header {
  background: red;
  padding: 16px;
  color: white;
}




}
</style>

<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
	
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

.logo
{
	float:left;
	text-decoration:none;
}

</style>
<style>
	.menu
	{
		list-style-type:none;
		float:right;
		
		
	}
	.menu li
			{
				float:left;
			}
	.menu li a
			{
				background-color:black;
				color:white;
				text-decoration:none;
				display:block;
				padding:10px;
				text-transformation:uppercase;
			}
			.menu li a:hover
			{
				background-color:grey;
				text-decoration:underline;
			}
			.menu li ul
			{
				display:none;
			}
			.menu li ul li
			{
				float:none;
				display:block;
			}
			.menu li:hover ul
			{
				
				position:absolute;
				display:block;
				padding:0px;
				z-index:2;
				width:150px;
			}
</style>
</head>
<body link alink="white" vlink="white">
<!--==============================header=================================-->
<div class="navbar" style="padding:20px">
		
				<div class="logo">
					<center><a href=alogin.php><font size="4" face="Harlow Solid"><h1 style="color:white" float="right">Princess <font color="#c71585 ">Makeup Artist</font></h1></font></a></center>

				</div>
				

			<ul class=menu> 
			<table cellspacing=10px>
			<tr>
				
					<th><li><a id="currentpage" href="index1.php">Home</a></li></th>
					<th><li><a href="abou1.php">About Us</a></li></th>
					<th><li><a href="Usergallery1.php">Gallery</a></li></th>
					<th><li><a href="services1.php">Services</a></li></th>
					<th><li><a href="staff1.php">Our Staff</a></li></th>
 					<th><li><a href="product1.php">Products</a></th>
					<th><li><a href="courses1.php">Courses</a>
						<ul>
							<li><a href="stugallery1.php">View makeup</a></li>
							
						</ul>
 					</li></th>
					
					<th><li><a href="login.php">Login</a></li></th>
					<th><li><a href="registration.php">Registration</a></li></th>
		 </tr>
		</table>
		</ul>  


	</div><br><br><br>


<!--==============================Content=================================-->

	<div class="slideshow-container">

		<div class="mySlides fade">
  			<div class="numbertext">1 / 3</div>
  			<img src="images\hair1.jpg" width=1000px height=400px>
  			<div class="text">Caption Text</div>
		</div>

		<div class="mySlides fade">
  			<div class="numbertext">2 / 3</div>
  			<img src="images\hair2.jpg" width=1000px height=400px>
  			<div class="text">Caption Two</div>
		</div>

		<div class="mySlides fade">
 			 <div class="numbertext">3 / 3</div>
  			 <img src="images\bn.jpg"  width=1000px height=400px>
  			 <div class="text">Caption Three</div>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

	</div>
	<br>

	<div style="text-align:center">
  		<span class="dot" onclick="currentSlide(1)"></span> 
  		<span class="dot" onclick="currentSlide(2)"></span> 
  		<span class="dot" onclick="currentSlide(3)"></span> 
	</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<br><br>




<!--==============================Todays Offers=================================-->
	<div class="offers">
		<center> <a href="offers1.php"><font color="white" face="Harlow Solid" size="6">Click Here For Todays Offers</font></a></center>
	</div>
	<br><br><br>

	<center> 	</center>





<!--==============================services=================================-->

<div class="services" style="background-color:white;">

<br><br>
<center><img src="images/ser.jpg "width=300 height=200></center>

<table align=center cellspacing=15px>
	<tr>
		<td><img src="images\makeup1.jpg" width=300 height=300 border=4px style="border-radius:20px"><br><br><b>Bridal Makeup ServicesMakeup</td>
		<td><img src="images\makeup5.jpg" width=300 height=300 border=4px style="border-radius:20px"><Br><br><center><b>Facial Services</center</td>
		<td><img src="images\makeup2.jpg" width=300 height=300 border=4px style="border-radius:20px"><br><br><center><b>Wedding Makeup Services</center</td>
		<td><img src="images\makeup4.jpg" width=300 height=300 border=4px style="border-radius:20px"><br><br><center><b>Nail Care Service</center></td>
		
	</tr>
</table>
<br><br>
</div>

<!--==============================Footer=================================-->
<div id=bottom style="background-color:black;height=20%">
	<center>
		<table cellspasing=15px>
			<tr>
				<td><font color=white><h3 align=center>copywrite@princessmakeupartist.com</h3><br></font></td>
				<td>   </td><td>    </td><td>   </td><td>   </td><td>   </td><td>   </td>
				<td><a href="http://www.facebook.com"><img src="images/7.jpg" width="70px" height="50px"></a></td>
				<td><a href="http://www.instgram.com"><img src="images/insta.jpg" width="150px" height="80px" ></a></td>
				<td><a href="http://www.twiter.com"><img src="images/twit.jpg" width="50px" height="50px"></a></td>
				
				
			</tr>
		</table>
			</center>
	<table align=center  class="navbar2">
		<tr>
			<td> <a href="index1.php">Home</a></td>
			<td> <a href="abou1.php">About Us</a></td>
			<td> <a href="Usergallery1.php">Gallery</a></td>
			<td> <a href="services1.php">Services</a></td>
			<td> <a href="staff1.php">Our Staff</a></td>
			<td> <a href="product1.php">Product</a></td>
			<td> <a href="courses1.php">Cources</a></td>		
			<td> <a href="registration.php">Registration</a></td>
			<td> <a href="login.php">Login</a></td>
			
			
		</tr>
	</table>
	
<br><br>	
</div>


</body>

</html>
