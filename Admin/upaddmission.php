<?php
	
	$id=$_GET['Admission_Id'];
	include("connection.php");
	$q="select * from admission where Admission_Id='$id'";
	$rs=mysqli_query($cn,$q);
	$id="";
	$txtnm="";
	$txtadd="";
	$txtcon="";
	$txtem="";
	$txtqu="";
	$txtdt1="";
	$lstmenu="";
	$txtod="";
	$txtpayment="";
	



	if($a=mysqli_fetch_array($rs))
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
		
	}
	
?>
<html>
	<body>
		<br><br><br>
		<center>


<form name=f1 method=post enctype="multipart/form-data" onsubmit="return validate()" >

<table align=center width=50% height=70% cellspacing=20px cellpadding:20px bordercolor=black class="frm">

<tr>
<th align=right>Student Name-</th>
<td><input type=text1 name=txtnm1 id=txtnm required></td>
</tr>
<tr>
<th align=right>Location-</th>
<td><textarea name=txtadd1 id=txtadd1 required>
</textarea>
</td>
</tr>
<tr>
<th align=right>PhoneNo-</th>
<td><input type=text name=txtcon1 id=txtcon1 required></td>
</tr>
<tr>
<th align=right>Email-</th>
<td><input type=email name="txtem1" id="txtem1" required></td>
</tr>

<tr>
<th align=right>Qualification-</th>
<td><input type=text name=txtqu1 id=txtqu1 required></td>
</tr>
<tr>
<th align=right>Birthdate-</th>
<td><input type=date name="txtdt2" id="txtdt2" placeholder="Enter date" required></td>
</tr>
<tr>
<th align=right>
<font size="3">Select Course-</font></th>
	<td>
		<select name=lstmenu1 id=lstmenu1>
		
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
<td><input type=text name="txtod1" id="txtod1" placeholder="Product Name" value="<?php echo date('d/m/y');?>" required readonly style="width:300px;height:25px"><br><br><br></td>
</tr>
<tr>
<th align=right><font >Advance-</font></th>
		<td><input type=radio name="txtpayment1" value=Online_Cash_Payment>Online Cash Payment<input type=radio name="txtpayment1" value=Cash_On_Dilivery>Cash On Dilivery<br>
			<h5>Google Pay:<font color="blue">564826289--OR--</font>Phone Pay:<font color="blue">8693025783</font></h5></td>
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

	</body>
</html>

<?php
	if(isset($_POST['btnsub']))
	{
			$id=$a['Admission_Id'];
			$txtnm1=$a['St_Name'];
			$txtadd1=$a['Location'];
			$txtcon1=$a['Phone'];
			$txtem1=$a['A_Email'];
			$txtqu1=$a['Qualification'];
			$txtdt2=$a['Birthdate'];
			$lstmenu1=$a['Coursename'];
			$txtod1=$a['Admission_date'];
			$txtpayment1=$a['Advance'];
		include("connection.php");
		$q="update admission set St_Name='$txtnm1',Location='$txtad1',Phone='$txtcon1',A_Email='$txtem1',Qualification='$txtqu1',Birthdate='$txtdt2',Coursename='$tlstmenu1',Admission_date='$txtod1',Advace='$txtpayment1' where Admission_Id='$id'";
		mysqli_query($cn,$q);
		
		echo "<script>alert('Record Updated');window.location='mgaddmission.php'</script>";
		mysqli_close($cn);
	
	}
?>