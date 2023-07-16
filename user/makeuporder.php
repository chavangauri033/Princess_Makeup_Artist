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
.frm
{
	border:2px solid black;
	border-radius:10px;
	width:800px;
	height:1100px;
	background-color:white;
	font-family:andalus;
	font-size:large;
	padding:10px;
}


.but
{
	padding:10px;
	border-radius:5px;
	font-weight:bold;
	background-color:grey;
}
# lstmenu
{
	padding:10px;
	boder-radius:5px;
	width:300px;
}

input[type=text],input[type=date],input[type=datetime],input[type=date]
{
	padding:10px;
	boder-radius:5px;
	width:300px;
}
input[type=reset]
{
	background-color:red ;
}
.time
{
	float:left;
}

.navbar {
  overflow: hidden;
  background-color: black;
  font-family: Arial, Helvetica, sans-serif;
}
h5
{
	border:1px;
	color:blue;
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

.logo
{
	float:left;
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
				
					<th><li><a href="index.php">Home</a></li></th>
					<th><li><a href="abou.php">About Us</a></li></th>
					<th><li><a href="Usergallery.php">Gallery</a></li></th>
					<th><li><a href="services.php">Services</a></li></th>
					<th><li><a href="staff.php">Our Staff</a></li></th>
 					<th><li><a href="product.php">Products</a></th>
					<th><li><a href="courses.php">Courses</a>
						<ul>
							<li><a href="addmissiont.php">Admission</a></li>
							<li><a href="stugallery.php">View makeup</a></li>
							<li><a href="stufeedback.php">feedback</a></li>
						</ul>
 					</li></th>
					<th><li><a href="contact.php">Contact</a></li></th>
					<th><li><a href="logout.php">Logout</a></li></th>
					
		 </tr>
		</table>
		</ul>  


	</div><br><br><br>

<!--==============================Content=================================-->

<center>

	<form action="" name="f1" class="frm" method="post">
		<img src="images/makeup.JPG" width=200 height=150><hr><br>

		<img src="images/pr3.JPG" width=30% height=400px align=right>
		
		

		<input type=text name="txtnm" id="txtnm" placeholder="Enter your name" pattern="\D+" required><br><br>
		<textarea name="txtadd" id="txtadd" placeholder="Enter Your Address" required style="width:300px;height:60px"></textarea><br><br>
		<input type=text name="txtno" id="txtno" placeholder="Enter Contact Number" required><br><br>
		
		
		<select name="lstmenu" id="lstmenu" style="height:40px;width:300px">
		
			<option value="">---------------Select---Makeup------------</option>
			<optgroup label="Makeup Type's">
				<option value="Wedding Makeup">Wedding Makeup...Rs.4000/-</option>
				<option value="HD Makeup">HD Makeup...Rs.3000/-</option>
				<option value="Photoshoot Makeup">Photoshoot Makeup...Rs.2000/-</option>
				<option value="Instalook Makeup">Instalook Makeup...Rs.3000/-</option>
				<option value="Paternary Makeup">Paternary Makeup...Rs.1000-</option>
				<option value="Waterproof Makeup">Waterproof Makeup...Rs.5000-</option>
				<option value="Simple Makeup">Simple Makeup...Rs.1000-</option>	
			</optgroup>

		</select><br><br>
		<input type=date name="txtdt1" id="txtdt1" placeholder="Enter date"><br><br>	
		
		<input type=text name="txtdt" id="txtdt" placeholder="Enter time" required><br><br>
		<input type=text name="txtod" id="txtod" placeholder="Product Name" value="<?php echo date('d/m/y');?>" required readonly style="width:300px;height:40px"><br><br><br>

		<font >Advance-</font>
		<input type=radio name="txtpayment" value=Online_Cash_Payment>Online Cash Payment<input type=radio name="txtpayment" value=Cash_On_Dilivery>Cash On Dilivery<br>
			<h5>Google Pay:<font color="black">7457278849--OR--</font>Phone Pay:<font color="black">8693025783</font></h5>
		<h4><font color=red>(You Must Pay 25% Payment In Advance For Makeup Order.)</font></h4><br>

		<input type=submit name="btnsub" id="btnsub" class="but">&nbsp &nbsp &nbsp 
		<input type=reset name="btnres" id="btnres" class="but">
	<table class="time" bordercolor=black>
	<tr><th><font size="4"><u>Shop Timing</font></th></tr>
	<tr><th>Monday: 9:00am-To-5:00pm</th></tr>
	<tr><th>Tuesday: 9:00am-To-5:00pm</th></tr>
	<tr><th>Wednusday: 9:00am-To-5:00pm</th></tr>
	<tr><th>Thuirsday: 9:00am-To-5:00pm</th></tr>
	<tr><th>Friday: 9:00am-To-5:00pm</th></tr>
	<tr><th>Saturday: 11:00am-To-4:00pm</th></tr>
	</table>
	
		
	</form>


<?php
	if(isset($_POST['btnsub']))
	{
		$txtnm=$_POST['txtnm'];
		$txtadd=$_POST['txtadd'];
		$txtno=$_POST['txtno'];
		$lstmenu=$_POST['lstmenu'];
		$txtdt1=$_POST['txtdt1'];
		$txtdt=$_POST['txtdt'];
		$txtod=$_POST['txtod'];
		$txtpayment=$_POST['txtpayment'];
		include("connection.php");
		$q="insert into manage_makeuporder values('','$txtnm','$txtadd','$txtno','$lstmenu','$txtdt1','$txtdt','$txtod','$txtpayment')";
		mysqli_query($cn,$q);
		mysqli_close($cn);
		echo "<script>alert('Your Appointment Fixed successfully');window.location='services.php'</script>";
	}




?>


</center>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>











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
			
			<td> <a href="index.php">Home</a></td>
			<td> <a href="abou.php">About Us</a></td>
			<td> <a href="Usergallery.php">Gallery</a></td>
			<td> <a href="services.php">Services</a></td>
			<td> <a href="staff.php">Our Staff</a></td>
			<td> <a href="product.php">Product</a></td>
			<td> <a href="courses.php">Cources</a></td>		
			<td> <a href="contact.php">Contact US</a></td>
			<td> <a href="logout.php">Logout</a></td>
			
			
		</tr>
	</table>
	<br><br>
	
</div>


</body>


</html>
