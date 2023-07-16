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
body
{

 margin: 0;
  //background-image:url('images/m.jpg');
  background-repeat:no-repeat;
  background-position:top center;
  background-attachment:scroll;
  background-size:100% 100%;
}

.stf
{
	border-radius:10px;
	width:900px;
	height:950px;
	background-color:white;
	font-family:andalus;
	font-size:large;
	padding:10px;
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
.pg
{
	margin:auto auto;
	padding-left:150px;
}
.pr
{
	float:left;
	padding:10px 10px;
	border:solid 3px grey;
	border-color:black;
	background-color:#F2F5A9;
	border-radius:5px;
	margin:10px 10px;
	margin-left:5px;
}
.im
{
	border-radius:5px;
	
}

.time
{
	height:150px;
	
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
.time
{
	border-color:black;
	border-radius:5px;
	border:solid 3px grey;
	height:200px;
	width:500px;
}
</style>

</head>
<body link alink="white" vlink="white">
<!--==============================header=================================-->
	<div class="navbar" style="padding:20px">
		
				<div class="logo">
					<center><font size="4" face="Harlow Solid"><h1 style="color:white" float="right">Princess <font color="#c71585 ">Makeup Artist</font></h1></font></center>

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

	</div>


<!--==============================Content=================================-->
<center><img src="images/log.jpg "width=200 height=200> </center>
<center><div class=pg>
		<?php
			include("connection.php");
			$q="select * from manage_courses";
			$rs=mysqli_query($cn,$q);
			$i=0;
			while($a=mysqli_fetch_array($rs))
			{
				$id=$a['Course_Id'];
				$fn=$a['Course_img'];
				$lstmenu=$a['Course_Name'];
				$txtdis=$a['Course_Description'];
				$txtcprc=$a['Course_Price'];
				echo "<div class=pr><img class=im src=images/$fn width=250 height=200><br>
					<center><font size='6'color=red><b>$lstmenu</b></font></center><br><center><font size='4'><b>$txtdis</b></font></center><br>
					<center><font size='4'><b>$txtcprc</b></font></center></div>";

				$i++;
				if($i==4)
				{
					$i=0;
					echo "<br style='clear:left'>";
				}
			}	
		?>
<br><br clear=left>
<hr>
<br><br>
<center>
	<table class=time>
	<tr><th><font size="5" color=red><u>Installments For Admission Fee </font></th></tr><br><br>
	<tr><th><font color=blue>First Installment</font>: 1000 Rs. for admission Fee.</th></tr>
	<tr><th><font color=blue>Second Installment</font>: 15-To-20 Day's After Admission.</th></tr>
	<tr><th><font color=blue>Third Installment</font>: Pay Your Remaining Fee Within 15-Days Before Complision Of Your Class.</th></tr>
	</table>
</center>
	</div>
</center>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>











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
	
</div>
</html>
