<!DOCTYPE html>
<html>
<?php
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
							<li><a href="mgmakeuporder.php">Manage Makeup Orders</a></li>
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


	</div>

<!--==============================Content=================================-->
<div class="content">
<center>


<form name=f1 method=post enctype="multipart/form-data" onsubmit="return validate()" >

<table align=center width=50% height=70% cellspacing=20px cellpadding:20px bordercolor=black class="frm">
<tr>
<th colspan=2><font face="Forte" size="7"><u><h1 align=center><b>
Add Services
</font></h1></th>
</tr>
<tr>
<th align=right>Select Photo-</th>
<td>
<input type=file name=file1 id=file1 style="width:200px;height:25px">
</td>
</tr>
<tr>
<th align=right><font size="2"><b>Add Services</font></th>
		<td><select name=lstmenu id=lstmenu style="width:200px;height:25px">
		
			<option value="">--Select-Services--</option>
			<optgroup label="Services">
				<option value="Hair Cutting">Hair Cutting</option>
				<option value="Hair Style">Hair Style</option>
				<option value="Makeup">Makeup</option>
				<option value="Threading">Threading</option>
				<option value="Facial">Facial</option>
				<option value="Waxing">Waxing</option>
				<option value="Nail Art">Nail Art</option>
				<option value="Sadi Drepary">Sadi Drepary</option>
				<option value="Mehendi Designs">Mehendi Designs</option>
				<option value="Other Services">Other Services</option>
					
			</optgroup>
		</select></td><br><br><br>
</tr>
<tr>
<th align=right><font size="2"><b>Add Subservices</font></th>
		<td><select name=lstmenu1 id=lstmenu1 style="width:200px;height:25px">
		
			
			<option value="">--Select-Sub-Services--</option>
			<option value="">--Select-Appointment--</option>
			<optgroup label="Hair">
				<option value="Shampoo">Shampoo</option>
				<option value="Hair Cutting">Hair Cutting</option>
				<option value="Hair Style">Hair Coloring</option>
					
			</optgroup>
			<optgroup label="Hair Style">
				<option value="Senorita Bun">Senorita Bun</option>
				<option value="Side swet Curl">Side swet Curl</option>
				<option value="The Flowery Bun">The Flowery Bun</option>
				<option value="Half Tied">Half Tied...Rs.250/-</option>
				<option value="Twisties And Braids">Twisties And Braids</option>
				<option value="Side sweep with a puff and bun">Side sweep with a puff and bun</option>	
			</optgroup>
			<optgroup label="Makeup Type's">
				<option value="Wedding Makeup">Wedding Makeup</option>
				<option value="HD Makeup">HD Makeup</option>
				<option value="Photoshoot Makeup">Photoshoot Makeup</option>
				<option value="Instalook Makeup">Instalook Makeup</option>
				<option value="Paternary Makeup">Paternary Makeup</option>
				<option value="Waterproof Makeup">Waterproof Makeup</option>
				<option value="Simple Makeup">Simple Makeup</option>	
			</optgroup>

			<optgroup label="Threading">
				<option value="Face">Face</option>
				<option value="Neck">Neck</option>
				<option value="Forehead">Forehead</option>
				<option value="Jawline">Jawline</option>			
				<option value="Sides">Sides</option>		
				<option value="Chin">Chin</option>
				<option value="Lower Lips">Lower Lips</option>
				<option value="Upper Lips">Upper Lips</option>
			</optgroup>
			<optgroup label="Facial">
				<option value="Clean Up">Clean Up</option>
				<option value="seasonal fruit">seasonal fruit</option>
				<option value="Shehnaz Facial">Shehnaz Facial</option>
				<option value="Lotus Facial">Lotus Facial</option>			
				<option value="Oxylife Facial">Oxylife Facial</option>		
			</optgroup>
			<optgroup label="Waxing">
				<option value="Body">Body</option>
				<option value="Full back">Full back</option>
				<option value="Full front">Full front</option>
				<option value="Midriff">Midriff</option>
				<option value="Full legs">Full legs</option>
				<option value="Half Legs">Half Legs</option>
				<option value="Chin">Chin</option>	
				<option value="Upper lips">Upper lips</option>
				<option value="Jawline">Jawline</option>
				<option value="Forehead">Forehead</option>
				<option value="Sidelocks">Sidelocks</option>
				<option value="Full Arms">Full Arms</option>
			</optgroup>
			<optgroup label="Nail Art">
				<option value="Shapes of nail">Shapes of nail</option>
				<option value="Nail anotomy">Nail anotomy</option>
				<option value="Nail prep">Nail prep</option>
				<option value="Gel polish application">Gel polish application</option>
				<option value="French polish application">French polish application</option>
				<option value="Gliter effect on gel polish">Gliter effect on gel polish</option>
				<option value="Gel nail extension">Gel nail extension</option>	
				<option value="French gel extension using cover pink gel + white gel">French gel extension using cover pink gel + white gel</option>
				<option value="French gel extension using white tipes + pink gel">French gel extension using white tipes + pink gel</option>
				<option value="Glitter effect in aceylic extension">Glitter effect in aceylic extension</option>
				<option value="Gel overlays">Gel overlays</option>
				<option value="Refills">Refills</option>
				<option value="Removals">Removals</option>
			</optgroup>
			<optgroup label="Sadi Drepary">
				<option value="Maharashtrian Sadi">Maharashtrian Sadi</option>
				<option value="Gujrati sadi">Gujrati sadi</option>
				<option value="Bangali sadi">Bangali sadi</option>
				<option value="South indian sadi">South indian sadi</option>
			</optgroup>
			<optgroup label="Mehendi Designs">
				<option value="Bridal Mehendi">Bridal Mehendi</option>
				<option value="Simple Mehendi">Simple Mehendi</option>
				<option value="Arebian Mehendii">Arebian Mehendii</option>
			</optgroup>
			<optgroup label="Other">
				<option value="Bleach">Bleach</option>
				<option value="De-Tan">De-Tan</option>
			</optgroup>


		</select></td><br><br><br>
</tr>
<tr>
<th align=right>Description-</th>
<td><textarea name=txtdis id=txtdis required>
</textarea>
</td>
</tr>
<tr>
<th align=right>Price-</th>
<td><input type=text name=txtprc id=txtprc style="width:200px;height:25px">
</td>
</tr>
<tr>
<th colspan=2 align=center>
<input type=Submit name=btnsub value=Submit id=btnsub  style="background-color:grey">
</th>
<td></td>
</tr>
</table>
</form>


<?php
	if(isset($_POST['btnsub']))
	{
		
		//code for image uploading
		$fn=$_FILES['file1']['name'];
		$s=$_FILES['file1']['size'];
		$tnm=$_FILES['file1']['tmp_name'];
		
		$ptr1=fopen($tnm,"r");
		$data=fread($ptr1,$s);
		$ptr2=fopen("images/$fn","w");
		fwrite($ptr2,$data);
		fclose($ptr1);
		fclose($ptr2);

		$lstmenu=$_POST['lstmenu'];
		$lstmenu1=$_POST['lstmenu1'];
		$txtdis=$_POST['txtdis'];
		$txtprc=$_POST['txtprc'];
		//end of image uploading
		include("connection.php");
		$q="insert into manage_services(Service_Id,Service_img,Service_Name,Sub_Service,Service_description,Service_Price) values('','$fn','$lstmenu','$lstmenu1','$txtdis','$txtprc')";
		mysqli_query($cn,$q);
		mysqli_close($cn);
		echo "<script>alert('Service Information Uploaded Successfully');window.location='addservices.php'</script>";
	
	}
	



?>


</center><br><br><br><br>	
</div>
</body>

</html>
