<!DOCTYPE html>
<html>

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
	background-color:white;
	margin: 0;
  background-image:url('images/brs.jpg');
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


<form name=f1 method=post enctype="multipart/form-data" onsubmit="return validate()" >

<table align=center width=40% height=70% cellspacing=20px cellpadding:20px bordercolor=black class="frm">
<tr>
<th colspan=2><font face="Edwardian Script ITC" size="7"><u><h1 align=center><b>
<img src="images/add.JPG" width=400 height=200>
</font></h1></th>
</tr>
<tr>
<th align=right>Student Name-</th>
<td><input type=text name=txtnm id=txtnm required></td>
</tr>
<tr>
<th align=right>Location-</th>
<td><textarea name=txtadd id=txtadd required>
</textarea>
</td>
</tr>
<tr>
<th align=right>PhoneNo-</th>
<td><input type=text name=txtcon id=txtcon required></td>
</tr>
<tr>
<th align=right>Email-</th>
<td><input type=email name="txtem" id="txtem" required></td>
</tr>

<tr>
<th align=right>Qualification-</th>
<td><input type=text name=txtqu id=txtqu required></td>
</tr>
<tr>
<th align=right>Birthdate-</th>
<td><input type=date name="txtdt1" id="txtdt1" placeholder="Enter date" required></td>
</tr>
<tr>
<th align=right>
<font size="3">Select Course-</font></th>
	<td>
		<select name=lstmenu id=lstmenu>
		
			<option value="">--Select-Course--</option>
			<optgroup label="Services">
				<option value="Hair Grooming">Hair Grooming</option>
				<option value="Hair Chemical">Hair Chemical</option>
				<option value="Diploma In Cosmatology">Diploma In Cosmatology</option>
				<option value="Skin And Beauty">Skin And Beauty</option>
				<option value="Make-Up Artistry">Make-Up Artistry</option>
				<option value="Nail Art">Nail Art</option>
				<option value="Mehendi Designs">Mehendi Designs</option>
				
					
			</optgroup>


		</select></td>

</tr>

<tr>
<th align=right>Admission Date-</th>
<td><input type=text name="txtod" id="txtod" placeholder="Product Name" value="<?php echo date('d/m/y');?>" required readonly style="width:300px;height:25px"><br><br><br></td>
</tr>
<tr>
<th align=right><font >Advance-</font></th>
		<td><input type=radio name="txtpayment" value=Online_Cash_Payment>Online Cash Payment<input type=radio name="txtpayment" value=Cash_On_Dilivery>Cash On Dilivery<br>
			<h5>Google Pay:<font color="blue">7457278849--OR--</font>Phone Pay:<font color="blue">8693025783</font></h5></td>
</tr>
<tr>

<th align=right>
<input type=Submit name=btnsub value=Submit id=btnsub >

</th>
<td>
<input type=reset name=btnres value=Reset id=btnres>
</td>
</tr>
</table>
</form>





<script>
function enablebtn()
{
   if(document.f1.chkacc.checked)
   {
     document.f1.btnsub.disabled="";
   }
else
{
   document.f1.btnsub.disabled="disabled";
}
}
function validate()
{
  var n=document.f1.txtnm.value;
  var a=document.f1.txtadd.value;
  var i,g="";
  for(i=0;i<document.f1.gender.length;i++)
  {
    id(document.f1.gender[i].checked)
    {
       g=document.f1.gender[i].value;
       break;
    }
  }
  var c=document.f1.lstcity.value;
  var u=document.f1.txtuser.value;
  var p=document.f1.txtpass.value;
  var cp=document.f1.txtcpass.value;
  var f=document.f1.file1.value;
  var con=document.f1.txtcon.value;
//alert(con);
if(n.lenght==0)
{
  alert("Name can not be blank");
  document.f1.txtnm.focus();
  return false;
}
if(a.lenght==0)
{
  alert("Address can not be blank");
  document.f1.txtadd.focus();
  return false;
}
if(g.lenght==0)
{
  alert("please select gender");
  return false;
}

if(u.lenght==0)
{
  alert("username can not be blank");
  document.f1.txtuser.focus();
  return false;
}
if(p.lenght==0)
{
   alert("password can not be blank");
   document.f1.txtpass.focus();
   return false;
}
if(cp.lenght==0)
{
  alert("confirm password can not be blank");
  document.f1.txtcpass.focus();
  return false;
}
if(p!=cp)
{
   alert("password are not matching");
   document.f1.txtcpass.focus();
   document.f1.txtcpass.select();
   return false;
}

if(con.lenght==0)
{
   alert("contact can not be blank");
   document.f1.txtcon.focus();
   document.f1.txtcon.select();
   return false;
}
if(con.lenght!=10 || con.lenght==0)
{
   alert("Enter valid contact");
   document.f1.txtcon.focus();
   document.f1.txtcon.select();
   return false;
}
if(isNaN(con))
{
  alert("Enter valid contact");
  document.f1.txtcon.focus();
  document.f1.txtcon.select();
  return false;
}
return true;
}
</script>

	

<?php
	if(isset($_POST['btnsub']))
	{
		$txtnm=$_POST['txtnm'];
		$txtadd=$_POST['txtadd'];
		$txtcon=$_POST['txtcon'];
		$txtem=$_POST['txtem'];
		$txtqu=$_POST['txtqu'];
		$txtdt1=$_POST['txtdt1'];
		$lstmenu=$_POST['lstmenu'];
		$txtod=$_POST['txtod'];
		$txtpayment=$_POST['txtpayment'];
		include("connection.php");
		$q="insert into admission values('','$txtnm','$txtadd','$txtcon','$txtem','$txtqu','$txtdt1','$lstmenu','$txtod',''$txtpayment')";
		mysqli_query($cn,$q);
		mysqli_close($cn);
		echo "<script>alert('Addmission successfully');window.location='courses.php'</script>";
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


