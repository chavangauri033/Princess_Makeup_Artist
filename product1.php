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
  background-color:white;
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
	background-color:#F6CEEC;
	border-radius:5px;
	margin:10px 10px;
	margin-left:5px;
}
.im
{
	border-radius:5px;
	opacity:0.8;
}
.im:hover
{
	opacity:1;
}
.bu
{
background-color:red;
margin:10px 5px;
font-size:20px;
color:white;
padding:5px 20px;
text-decoration:none;
font-family:Arial;
border-radius:2px;
}
.bu:hover
{
background-color:black;
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
<center><img src="images/prlogo.jpg "width=200 height=200> </center><br>
<center><div class=pg>
		<?php
			include("connection.php");
			$q="select * from product_report";
			$rs=mysqli_query($cn,$q);
			$i=0;
			while($a=mysqli_fetch_array($rs))
			{
				$id=$a['Pr_Id'];
				$fn=$a['Pr_img'];
				$txtpnm=$a['Pr_Name'];
				$txtpprc=$a['Pr_Price'];
				$txtpdis=$a['Pr_Description'];
				
				echo "<div class=pr><img class=im src=images/$fn width=250 height=200><br>
					<center><font size='6'color=blue><b>$txtpnm</b></font></center><br><center><font size='4'><b>$txtpprc</b></font></center><br>
					<center><font size='4'><b>$txtpdis</b></font></center><br></div>";

				$i++;
				if($i==4)
				{
					$i=0;
					echo "<br style='clear:left'>";
				}
			}	
		?>
		
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
</html>
