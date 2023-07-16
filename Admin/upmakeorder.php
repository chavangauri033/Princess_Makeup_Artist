<?php
	$id=$_GET['Makeup_Id'];
	include("connection.php");
	$q="select * from manage_makeuporders where Makeup_Id='$id'";
	$rs=mysqli_query($cn,$q);
	$id="";
	$txtnm="";
	$txtadd="";
	$txtno="";
	$lstmenu="";
	$txtdt1="";
	$txtdt="";
	$txtod="";
	$txtpayment="";
	



	if($a=mysqli_fetch_array($rs))
	{
		$id=$a['Makeup_Id'];
		$txtnm=$a['Ure_Name'];
		$txtadd=$a['Address'];
		$txtno=$a['Contact_No'];
		$lstmenu=$a['Make_Type'];
		$txtdt1=$a['Date'];
		$txtdt=$a['Time'];
		$txtod=$a['Mcurrent_Date'];
		$txtpayment=$a['Advance_Paymentmode'];
		
	}
	
?>
<html>
	<body>
		<br><br><br>
		<form method=post>
			<table align=center width=30% height=20% cellpadding=20px style="border:2px solid">	
				<tr>
					<th align=center><input type=text name="txtnm1" id="txtnm1" placeholder="Enter your name" pattern="\D+" style="height:35px;width:300px"></th>
				</tr>
				<tr>
					<th align=center><textarea name="txtadd1" id="txtadd1" placeholder="Enter Your Address" style="height:35px;width:300px"></textarea></th>
				</tr>
				<tr>
				
					<td align=center><input type=text name="txtno1" id="txtno1" placeholder="Enter Contact Number" style="height:35px;width:300px"></td>
				</tr>
				<tr>
					
					<td align=center><select name="lstmenu1" id="lstmenu1"  style="height:35px;width:300px">
		
			<option value="">---------------Select---Makeup------------</option>
			<optgroup label="Makeup Type's">
				<option value="Wedding Makeup">Wedding Makeup...Rs.300</option>
				<option value="Wedding Makeup">Bridal Makeup...Rs.300</option>
				<option value="Wedding Makeup">Wedding Makeup...Rs.300</option>
				<option value="Wedding Makeup">Wedding Makeup...Rs.300</option>	
			</optgroup>

		</select></td>
				</tr>
				<tr>
				
					<td align=center><input type=date name="txtdt2" id="txtdt2" placeholder="Enter date" style="height:35px;width:300px"></td>
				</tr>
				<tr>
				
					<td align=center><input type=text name="txtdt3" id="txtdt3" placeholder="Enter time" style="height:35px;width:300px"></td>
				</tr>
				<tr>
				
					<td align=center><input type=text name="txtod1" id="txtod1" placeholder="Product Name" value="<?php echo date('d/m/y');?>" required readonly style="width:300px;height:40px"></td.
				</tr>
				<tr>
				
					<th><font >Advance-</font>
					<input type=radio name="txtpayment1" value=Online_Cash_Payment>Online Cash Payment<input type=radio name="txtpayment1" value=Cash_On_Dilivery>Cash On Dilivery<br>
					<h5>Google Pay:<font color="blue">564826289--OR--</font>Phone Pay:<font color="blue">8693025783</font></h5></th>
				</tr>
				
				<tr align=center>
					<td align=center><input type=Submit name=btnsub value=Upload id=btnsub  style="background-color:grey"></td>
				</tr>
		</form>
	</body>
</html>

<?php
	if(isset($_POST['btnsub']))
	{
		$txtnm1=$_POST['txtnm1'];
		$txtadd1=$_POST['txtadd1'];
		$txtno1=$_POST['txtno1'];
		$lstmenu1=$_POST['lstmenu1'];
		$txtdt2=$_POST['txtdt2'];
		$txtdt3=$_POST['txtdt3'];
		$txtod1=$_POST['txtod1'];
		$txtpayment1=$_POST['txtpayment1'];
		include("connection.php");
		$q="update manage_makeuporders set Ure_Name='$txtnm1',Address='$txtadd1',Contact_No='$txtno1',Make_Type='$lstmenu1',Date='$txtdt2',Time='$txtdt3',$txtod1='Mcurrent_Date',Advance_Paymentmode='$txtpayment1' where Makeup_Id='$id'";
		mysqli_query($cn,$q);
		
		echo "<script>alert('Record Updated');window.location='mgmakeuporder.php'</script>";
		mysqli_close($cn);
	
	}
?>