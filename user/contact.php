<!DOCTYPE html>
<html>


<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  //background-image:url('images/back.jpg');
  background-repeat:no-repeat;
  background-position:top center;
  background-attachment:scroll;
  background-size:100% 100%;
}
.tab
{
				border:2px solid black;
				border-radius:10px;
				background-color:black;
				width:40px;
				padding:60px;
				font-family:Andalus;
				font-size:large;
				margin: 0;
  background-image:url('images/bt.jpg');
  background-repeat:no-repeat;
  background-position:top center;
  background-attachment:scroll;
  background-size:100% 100%;
				
 			 	
}

.frm
			{
				border:2px solid black;
				border-radius:10px;
				background-color:white;
				width:300px;
				padding:20px;
				font-family:Andalus;
				font-size:large;
				
			}
			input[type=text],input[type=email]
			{
				padding:10px;
				border-radius:5px;
				border:1px solid black;
				width:70%;
			}
			.but
			{
				padding:10px;
				border-radius:10px;
				background-color:grey;
				font-weight:bold;
				color:white;

			}
			textarea
			{
				border:1px solid black;
				border-radius:5px;
				width:70%;
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
							<li><a href="addmissiont.php">Addmission</a></li>
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
	
	<table cellspacing=20 class="tab">
	<tr>
	<td></td>
	<td align=center><font face="Freestyle Script" size="5" color="white"><h1 align=center>Feedback Form</h1></td>
	<td></td>
	</tr>
	<tr>
		<td>ggfgjhjghjghjghjgjghfghfhgf</td>
		<td><form name=f1 id=f1 method=post class=frm>
			<center><input type=text name=txtnm id=txtnm placeholder="Enter your Name" required pattern="\D+"></center><br><br>
			<center><input type=email name="txtem" id="txtem" placeholder="Enter your Email Id" required></center><br><br>
			<center>Feedback Here</center>
			<center><textarea name=txtfeed id=txtfeed cols=35 rows=10 placeholder="Enter Feedback Here" required>
			</textarea></center><br><br>
			<center><input type=submit name="butsub" id="butsub" value="submit" class=but></center>
		</form></td>
	
		
	

<?php
	if(isset($_POST['butsub']))
	{
		$txtnm=$_POST['txtnm'];
		$txtem=$_POST['txtem'];
		$txtfeed=$_POST['txtfeed'];
		include("connection.php");
		$q="insert into user_feedback values('$txtnm','$txtem','$txtfeed')";
		mysqli_query($cn,$q);
		mysqli_close($cn);
		echo "<script>alert('feedback successfully');window.location='index.php'</script>";
	}




?>





		
<br><br><br>






	<tr>
	<td></td>
	<th align=center><font face="Freestyle Script" color="white" size="5"><h1><center>Our Contact Info</center></h1></font></th>
	<td></td>
	</tr>
	<tr>
		<th><img src="images/call.png " width=50 height=50><br><font face="Goudy Old Style"color="white" >Contact- 7457278849</font></th>
		<th><img src="images/lo.JPG " width=50 height=50><br clear=left><font face="Goudy Old Style" color="white" >Ashtavinayak colony, Sambhaji Nagar, Satara 415004.</font></th>
		<th><img src="images/email.png " width=50 height=50><br><font face="Goudy Old Style" color="white">princessmakeupartist@gmail.com</font></th>
	</tr>
</table>

</center>
<br><br><br><br><br><br><br><br><br><br><br>

<!--==============================Footer=================================-->

</body>
<br><br><br>
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










</body>


</html>
