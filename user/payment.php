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
  background-color:#F6CEEC;
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
.but1
{
	height:50px;
	width:57px;
	background-color:grey;
}
.but
{

	height:50px;
	width:57px;
	background-color:red;

}
.pr
{
	float:left;
	padding:10px 10px;
	border:solid 3px grey;
	border-color:black;
	background-color:white;
	border-radius:5px;
	margin:10px 10px;
	margin-left:450px;
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


	</div>


<!--==============================Content=================================-->
<?php

	$id=0;
	$amt=0;

	$txtuser=$_SESSION["username"];
	if(isset($_GET["Ammount"]))
	{
		$amt=$_GET["Ammount"];
	}
	
	include("connection.php");
	$rs=mysqli_query($cn,"select * from product_order where Order_Id=$id");
	if($a=mysqli_fetch_array($rs))
	{
		$amt=$_GET["Ammount"];
	}	
?>
<br><br><br>
<center>
<div class=pg>
	<center>
	<form class=pr method=post enctype="multipart/form-data">
		
		<h3><b>Address</b></h3><textarea name="txtadd" id="txtadd" placeholder="Enter Your Address" value="<?php echo $txtpnm;?>" required style="width:300px;height:60px"></textarea><br><br>
		
		<h3><b>Total Amount</b></h3><input type=text name="amt" id="amt" placeholder="Total Amount" value="<?php echo $amt;?>" required readonly style="width:300px;height:25px">
		<br><br>
		
		<h3><b>Select Payment Mode</b></h3><input type=radio name="txtpayment" value=Online_Cash_Payment>Online Cash Payment<input type=radio name="txtpayment" value=Cash_On_Dilivery>Cash On Dilivery<br><br>
			<font size="4">Google Pay:</font><font color="blue" size="3">7457278849--OR--</font><font size="4">Phone Pay:</font><font color="blue" size="3">8693025783</font><br><br>
		<button type="submit" class="but1" id=btnsub name=btnsub>Submit</button>
		<button type="reset" class="but" id=btnres name=btnres>Reset</button>

	</form></center>

</div><br><br><br><br><br><br>
</center>

	<?php
	if(isset($_POST['btnsub']))
	{
		$txtuser=$_SESSION['username'];
		
		$txtadd=$_POST['txtadd'];
		$amt=$_POST['amt'];
		$txtpayment=$_POST['txtpayment'];
	
		include("connection.php");
		$q="insert into paymentmode(Payment_Id,UN,Address,Tammount,Payment_Mode) values('','$txtuser','$txtadd','$amt','$txtpayment')";
		mysqli_query($cn,$q);
		mysqli_close($cn);
		echo "<script>alert('Your Payment successfully');window.location='product.php?Ammount=$amt'</script>";
	}




?>



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
