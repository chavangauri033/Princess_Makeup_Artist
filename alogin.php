<?php
session_start();
?>
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
  
  background-repeat:no-repeat;
  background-position:top center;
  background-attachment:scroll;
  background-size:100% 100%;
}
.frm
{
	border:2px solid black;
	border-radius:10px;
	width:600px;
	height:400px;
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

input[type=text],input[type=password]
{
	padding:10px;
	boder-radius:5px;
	width:300px;
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
<br><br><br><br><br><br>

<!--==============================Content=================================-->

<center>

<?php
	if(isset($_POST['btnsub']))
	{
		$txtuser=$_POST['txtuser'];
		$txtpass=$_POST['txtpass'];
		include("connection.php");
		$q="select * from admin_login where Username='$txtuser' and Password='$txtpass'";
		$result=mysqli_query($cn,$q);
		if($a=mysqli_fetch_array($result))
		{
			$_SESSION['username']=$txtuser;
			echo "<script>window.location='Admin/dashboard.php'</script>";
		}
		else
		echo "<center><b><font color=red>Inccorect username or password</font></center>";
		mysqli_close($cn);
	}
?>

	<form action="" name="f1" class="frm" method="post">
		<center><font  size="5"><h1><u>Login</u></h1></font></center>
		<img src="images/admin.png" width=40% height=250px align=right><br><br>

		<input type=text name="txtuser" id="txtuser" placeholder="Enter User Name" pattern="\D+" required><br><br>
		<input type=password name="txtpass" id="txtpass" placeholder="Enter Password" required><br><br><br>
		
		<input type=submit name=btnsub id=btnsub class="but" value="Login">		




	</form>
</center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>











<!--==============================Footer=================================-->



</body>


</html>
