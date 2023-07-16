<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  //background-image:url('images/wall1.jpg');
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
		width:950px;
		height:150px;
		border:3px;
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
	<u><h1 align=center>Yearly Report</h1></u>
	
<form method=post>
 <select name=lstmenu id=lstmenu style="width:200px;height:25px">
		
			<option value="">--Select-Year--</option>
			
				<option value="2021">2021</option>				
			
		</select><br><br>
<input type=submit name=btnsub>
</form>


<font color=blue><h1 align=center>Product Order report</h1></font>
 <table class="table">
    <thead bgcolor=#BDBDBD>
      <tr>
        <th><b><h3>Order Id</h3></th>
		<th><b><h3>User Name</h3></th>		
		<th><b><h3>Product Id</h3></th>	
		<th><b><h3>Product Name</h3></th>
		<th><b><h3>Product Quantity</h3></th>
		<th><b><h3>Ammount</h3></th>
		<th><b><h3>Order Date</h3></th>	
      </tr>
    </thead>
    <tbody bgcolor=pink>
<?php
if(isset($_POST["btnsub"]))
{
require 'connection.php';



$q="select * from product_order";
$rs=mysqli_query($cn,$q);
while($a=mysqli_fetch_array($rs))
{
  			$oid=$a["Order_Id"];
			$txtuser=$a["Usr_Name"];
			$id=$a["Pr_Id"];
			$txtpnm=$a["Prd_Name"];
			$lstmenu2=$a["Quantity"];
			$amt=$a["Ammount"];
			$txtod=$a["Orderdate"];

echo "<tr>";
echo "<td><center>$oid</center></td><td><center>$txtuser</center></td><td><center>$id</center></td>
      <td><center>$txtpnm</center></td><td><center>$lstmenu2</center></td><td><center>$amt</center></td><td><center>$txtod</center></td>";
echo "</tr>";
}
}
?>
    </tbody>
  </table>

<br><br>
<font color=blue><h1 align=center>Makeup Order Report</h1></font>
 <table class="table">
    <thead bgcolor=#BDBDBD>
      <tr>
        <th><h3>Makeup Id</h3></th>	
	<th><h3>Name</h3></th>	
	<th><h3>Address</h3></th>
	<th><h3>Contct No</h3></th>	
	<th><h3>Makeup Type</h3></th>
	<th><h3>Date</h3></th>
	<th><h3>Time</h3></th>
	<th><h3>Current Date</h3></th>
	<th><h3>Advace Payment Mode</h3></th>
      </tr>
    </thead>
    <tbody bgcolor=pink>
<?php
if(isset($_POST["btnsub"]))
{
require 'connection.php';

$q="select * from manage_makeuporder";
		$rs=mysqli_query($cn,$q);
		while($a=mysqli_fetch_array($rs))
		{
			$id=$a['Makeup_Id'];
			$txtnm=$a['Ure_Name'];
			$txtadd=$a['Address'];
			$txtno=$a['Contact_No'];
			$lstmenu=$a['Make_Type'];
			$txtdt1=$a['Date'];
			$txtdt=$a['Time'];
			$txtod=$a['Mcurrent_Date'];
			$txtpayment=$a['Advance_Paymentmode'];
echo "<tr>";
echo "<td><center><h5>$id</h5></center></td><td><center><h5>$txtnm</h5></center></td><td><center><h5>$txtadd</h5></center></td>
			<td><center><h5>$txtno</h5></center></td><td><center><h5>$lstmenu</h5></center></td><td><center><h5>$txtdt1</h5></center></td>
			<td><center><h5>$txtdt</h5></center></td><td><center><h5>$txtod</h5></center></td><td><center><h5>$txtpayment</h5></center></td>";
echo "</tr>";
}
}
?>
    </tbody>
  </table>

<br><br>
<font color=blue><h1 align=center>Admission Report</h1></font>
 <table class="table">
    <thead bgcolor=#BDBDBD>
      <tr>
       <th><h3>Addmission Id</h3></th>	
	<th><h3>Student Name</h3></th>	
	<th><h3>Address</h3></th>	
	<th><h3>Phone No</h3></th>
	<th><h3>Email Id</h3></th>
	<th><h3>Qualification</h3></th>
	<th><h3>Birthdate</h3></th>
	<th><h3>Course Type</h3></th>
	<th><h3>Admission Date</h3></th>
	<th><h3>Advance</h3></th>	
      </tr>
    </thead>
    <tbody bgcolor=pink>
<?php
if(isset($_POST["btnsub"]))
{
require 'connection.php';



$q="select * from admission";
$rs=mysqli_query($cn,$q);
while($a=mysqli_fetch_array($rs))
{
  			$id=$a['Admission_Id'];
			$txtnm=$a['St_Name'];
			$txtadd=$a['Location'];
			$txtcon=$a['Phone'];
			$txtem=$a['A_Email'];
			$txtqu=$a['Qualification'];
			$txtdt1=$a['Birthdate'];
			$lstmenu=$a['Coursename'];
			$txtod=$a['Admission_date'];
			$txtpayment=$a['Advance'];
						
			echo "<tr>";
			echo "<td><center><h5>$id</h5></center></td><td><center><h5>$txtnm</h5></center></td><td><center><h5>$txtadd</h5></center></td>
				<td><center><h5>$txtcon</h5></center></td><td><center><h5>$txtem</h5></center></td><td><center><h5>$txtqu</h5></center></td>
				<td><center><h5>$txtdt1</h5></center></td><td><center><h5>$lstmenu</h5></center></td><td><center><h5>$txtod</h5></center></td>
				<td><center><h5>$txtpayment</h5></center></td>";
			echo "</tr>";
}
}
?>
    </tbody>
  </table>

<br><br>

<center>
		<input type=button value=print onclick="window.print()" style="padding:10px;border-radius:5px;font-weight:bold;background-color:grey;float:center">


	

</center><br><br><br><br>	

</body>

</html>
