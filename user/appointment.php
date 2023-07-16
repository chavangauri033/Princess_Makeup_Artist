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
	height:800px;
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
	float:center;
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
		<img src="images/p.jpg" width=200 height=150><hr><br>

		<img src="images/pr3.JPG" width=30% height=400px align=right>
		
		

		<input type=text name="txtnm" id="txtnm" placeholder="Enter your name" pattern="\D+" required><br><br>
	
		<select name="lstmenu" id="lstmenu" style="height:35px;width:300px">
		
			<option value="">--Select-Appointment--</option>
			<optgroup label="Hair">
				<option value="Shampoo">Shampoo...Rs.50/-</option>
				<option value="Hair Cutting">Hair Cutting...Rs.110/-To-500/-</option>
				<option value="Hair Style">Hair Coloring...Rs.150/-To-3800</option>
					
			</optgroup>
			<optgroup label="Hair Style">
				<option value="Senorita Bun">Senorita Bun...Rs.400/-</option>
				<option value="Side swet Curl">Side swet Curl...Rs.350/-</option>
				<option value="The Flowery Bun">The Flowery Bun...Rs.200/-</option>
				<option value="Half Tied">Half Tied...Rs.250/-</option>
				<option value="Twisties And Braids">Twisties And Braids...Rs.450/-</option>
				<option value="Side sweep with a puff and bun">Side sweep with a puff and bun...Rs.245/-</option>	
			</optgroup>
			<optgroup label="Threading">
				<option value="Face">Face...Rs.130/-</option>
				<option value="Neck">Neck...Rs.40/-</option>
				<option value="Forehead">Forehead...Rs.40/-</option>
				<option value="Jawline">Jawline...Rs.30/-</option>			
				<option value="Sides">Sides...Rs.30/-</option>		
				<option value="Chin">Chin...Rs.30/-</option>
				<option value="Lower Lips">Lower Lips...Rs.30/-</option>
				<option value="Upper Lips">Upper Lips...Rs.30/-</option>
			</optgroup>
			<optgroup label="Facial">
				<option value="Clean Up">Clean Up...Rs.200/-</option>
				<option value="seasonal fruit">seasonal fruit...Rs.300/-</option>
				<option value="Shehnaz Facial">Shehnaz Facial...Rs.1000/-</option>
				<option value="Lotus Facial">Lotus Facial...Rs.800/-</option>			
				<option value="Oxylife Facial">Oxylife Facial...Rs.1500/-</option>		
			</optgroup>
			<optgroup label="Waxing">
				<option value="Body">Body...Rs.800/-To-1200/-</option>
				<option value="Full back">Full back...Rs.350/-To-500/-</option>
				<option value="Full front">Full front...Rs.350/-To-500/-</option>
				<option value="Midriff">Midriff...Rs.200/-To-300/-</option>
				<option value="Full legs">Full legs...Rs.300/-To-550/-</option>
				<option value="Half Legs">Half Legs...Rs.200/-To-300/-</option>
				<option value="Chin">Chin...Rs.40/-To-60/-</option>	
				<option value="Upper lips">Upper lips...Rs.30/-To-40/-</option>
				<option value="Jawline">Jawline...Rs.40/-To-60/-</option>
				<option value="Forehead">Forehead...Rs.40/-To-60/-</option>
				<option value="Sidelocks">Sidelocks...Rs.30/-To-60/-</option>
				<option value="Full Arms">Full Arms...Rs.200/-To-300/-</option>
			</optgroup>
			<optgroup label="Nail Art">
				<option value="Shapes of nail">Shapes of nail...Rs.4000/-</option>
				<option value="Nail anotomy">Nail anotomy...Rs.3000/-</option>
				<option value="Nail prep">Nail prep...Rs.2000/-</option>
				<option value="Gel polish application">Gel polish application...Rs.3000/-</option>
				<option value="French polish application">French polish application...Rs.1000/-</option>
				<option value="Gliter effect on gel polish">Gliter effect on gel polish...Rs.5000/-</option>
				<option value="Gel nail extension">Gel nail extension...Rs.1000/-</option>	
				<option value="French gel extension using cover pink gel + white gel">French gel extension using cover pink gel + white gel...Rs.1000/-</option>
				<option value="French gel extension using white tipes + pink gel">French gel extension using white tipes + pink gel...Rs.1000/-</option>
				<option value="Glitter effect in aceylic extension">Glitter effect in aceylic extension...Rs.1000/-</option>
				<option value="Gel overlays">Gel overlays...Rs.1000/-</option>
				<option value="Refills">Refills...Rs.1000/-</option>
				<option value="Removals">Removals...Rs.1000/-</option>
			</optgroup>
			<optgroup label="Sadi Drepary">
				<option value="Maharashtrian Sadi">Maharashtrian Sadi...Rs.100/-</option>
				<option value="Gujrati sadi">Gujrati sadi...Rs.800/-</option>
				<option value="Bangali sadi">Bangali sadi...Rs.850/-</option>
				<option value="South indian sadi">South indian sadi...Rs.850/-</option>
			</optgroup>
			<optgroup label="Mehendi Designs">
				<option value="Bridal Mehendi">Bridal Mehendi...Rs.3000/-</option>
				<option value="Simple Mehendi">Simple Mehendi...Rs.500/-</option>
				<option value="Arebian Mehendii">Arebian Mehendii...Rs.500/-</option>
			</optgroup>
			<optgroup label="Other">
				<option value="Bleach">Bleach...Rs.3000/-</option>
				<option value="De-Tan">De-Tan...Rs.500/-</option>
			</optgroup>

		</select><br><br>
		<textarea name="txtadd" id="txtadd" placeholder="Enter Your Address" required style="width:300px;height:60px"></textarea><br><br>
		<input type=date name="txtdt1" id="txtdt1" placeholder="Enter date"><br><br>	
		<input type=text name="txtdt" id="txtdt" placeholder="Enter time" required><br><br>
		<input type=text name="txtod" id="txtod" placeholder="Product Name" value="<?php echo date('d/m/y');?>" required readonly style="width:300px;height:25px"><br><br><br>

	
	<input type=submit name="btnsub" id="btnsub" class="but">
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
		$lstmenu=$_POST['lstmenu'];
		$txtadd=$_POST['txtadd'];
		$txtdt1=$_POST['txtdt1'];
		$txtdt=$_POST['txtdt'];
		$txtod=$_POST['txtod'];
		include("connection.php");
		$q="insert into appointment values('','$txtnm','$lstmenu','$txtadd','$txtdt1','$txtdt','$txtod')";
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
