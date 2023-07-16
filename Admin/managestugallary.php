<!DOCTYPE html>
<html>
<?php
session_start();
?>
<br><br><br>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background-image:url('images/wall1.jpg');
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




.frm
{
	background-color:white;
	margin: 0;
  background-image:url('images/br.JPG');
  background-repeat:no-repeat;
  background-position:top center;
  background-attachment:scroll;
  background-size:100% 100%;
	
}
input[type=reset]
{
	background-color:red;
	padding:10px;
	border-radius:5px;
}
input[type=submit]
{
	padding:10px;
	border-radius:5px;
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
	float:center;
}

</style>
<style>
	.menu
	{
		list-style-type:none;
		float:center;
		
		
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
				width:200px;
			}
</style>
<style>
	.table
	{
		width:500px;
		height:100px;
	}
</style>
</head>
<body link alink="white" vlink="white">
<!--==============================header=================================-->
	<div class="navbar" style="padding:20px">
		
				<div class="logo">
					<center><font size="4" face="Harlow Solid"><h1 style="color:white" float="left">Admin <font color="#c71585">Side</font></h1></font></center>

				</div>
				

			
			<ul class=menu> 
			<center><table cellspacing=15px>
			<tr>
				
					
					<th><li><a href="dashboard.php">Dashboard</a></li></th>
					<th><li><a href="dashboard.php">Forms</a>
						
						<ul>
							<li><a href="addservices.php">Add Services</a></li>
							<li><a href="addproducts.php">Add Products</a></li>
							<li><a href="addgallery.php">Add Gallery</a></li>
							<li><a href="addcourses.php">Add Courses</a></li>
							<li><a href="addbatches.php">Add Batches</a></li>
							<li><a href="addfee.php">Add Fee</a></li>
							<li><a href="addstugallery.php">Add Student Gallery</a></li>
							<li><a href="addstaff.php">Add Staff Gallery</a></li>
							<li><a href="addoffers.php">Add Offers</a></li>
						</ul>
 					</li></th>
					<th><li><a href="#">Manage User Report's</a><ul>
							<li><a href="mgurregistration.php">Manage Registration</a></li>
							<li><a href="manageservice.php">Manage Services</a></li>
							<li><a href="mgappointment.php">Manage Appointment</a></li>
							<li><a href="mgmakeuporder.php">Manage Makeup Order</a></li>
							<li><a href="manageprodut.php">Manage Product Report</a></li>
							<li><a href="manageproductorder.php">Manage Product Order</a></li>
							<li><a href="manageorderpayment.php">Manage Product Payment</a></li>
							<li><a href="manageurgallery.php">Manage Gallery</a></li>
							<li><a href="managefeedback.php">Manage Feedback</a></li>
							<li><a href="manageoffer.php">Manage Offers</a></li>
						</ul>
 					</li></th>
					<th><li><a href="#">Manage Student Report's</a>
						<ul>
							
							<li><a href="managescourses.php">Manage Courses</a></li>
							<li><a href="managebatch.php">Manage Batchs</a></li>
							<li><a href="mgaddmission.php">Manage Addmission</a></li>
							<li><a href="managefee.php">Manage Fee</a></li>
							<li><a href="managestufeedback.php">Manage Feedback</a></li>
							<li><a href="managestugallary.php">Manage Gallery</a></li>
							
						</ul>
 					</li></th>
					<th><li><a href="#">Order Reports</a>
						<ul>
							
							<li><a href="daly.php">Daly</a></li>
							<li><a href="monthly.php">Monthly</a></li>
							<li><a href="yearly.php">Yearly</a></li>
						</ul>

					</li></th>
					<th><li><a href="../alogin.php">Logout</a></li></th>
		 </tr>
		</table></center>
		</ul> 

	</div><br><br><br>



<!--==============================Content=================================-->
<center>

<div class="services" >

<br><br>

<h2><font color=black face="Forte" size="7">Manage Student Gallery</font></h2>

<table align=center class=table border=2px bgcolor=white>
	<thead bgcolor=black>
	<tr>
		<th><font color=white><h3>Image Id</h3></font></th>	
		<th><font color=white><h3>Image</h3></font></th>	
		<th><font color=white><h3>Action</h3></font></th>	

	</tr>
	</thead>
	<tbody>
	<?php
		require 'connection.php';
		$q="select * from manage_student_gallery";
		$rs=mysqli_query($cn,$q);
		while($a=mysqli_fetch_array($rs))
		{
			$id=$a['Gal_Id'];
			$fn=$a['Stu_img'];
		echo "<tr>";
		echo "<td><center><h5>$id</h5></center></td><td><center><img src=images/$fn height=100 width=100></center></td>
			<td><center><a href=delsgl.php?Gal_Id=$id><font color=red><b>Delete</font></a>/<a href=upsgal.php?Gal_Id=$id><font color=blue><b>Update</font></a><center></td>";
		echo "</tr>";
		}
	?>
	</tbody>
</table>
<br><br>
</div>

</center><br><br><br><br><br><br>	

</body>

</html>
