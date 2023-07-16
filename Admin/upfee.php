<?php
	$id=$_GET['Fee_Id'];
	include("connection.php");
	$q="select * from manage_fee where Fee_Id='$id'";
	$rs=mysqli_query($cn,$q);
	$id="";
	$txtsnm="";
	$txtcnm="";
	$txttfe="";
	$txtpfe="";
	$txtrfe="";



	if($a=mysqli_fetch_array($rs))
	{
		$id=$a['Fee_Id'];
		$txtsnm=$a['Student_Name'];
		$txtcnm=$a['Course_Name'];
		$txttfe=$a['Total_Fee'];
		$txtpfe=$a['Paid_Fee'];
		$txtrfe=$a['Remaining__Fee'];
	}
	
?>
<html>
	<body>
		<br><br><br>
		<form method=post>
			<table align=center width=30% height=20% cellpadding=20px style="border:2px solid">	
				<tr>
					<th align=center>Student Name-</th>
					<td><input type=text name=txtsnm1 id=txtsnm1 style="width:200px;height:25px"></td>
				</tr>
				<tr>
					<th align=center>Courses Name-</th>
					<td><input type=text name=txtcnm1 id=txtcnm1 style="width:200px;height:25px"></td>
				</tr>
				<tr>
					<th align=center>Total Fee-</th>
					<td><input type=text name=txttfe1 id=txttfe1 style="width:200px;height:25px"></td>
				</tr>

				<tr>
					<th align=center>Paid Fee-</th>
					<td><input type=text name=txtpfe1 id=txtpfe1 style="width:200px;height:25px"></td>
				</tr>
				<tr>
					<th align=center>Remaining Fee-</th>
					<td><input type=text name=txtrfe1 id=txtrfe1 style="width:200px;height:25px"></td>
				</tr>
				<tr align=center>
					<td><input type=Submit name=btnsub value=Upload id=btnsub  style="background-color:grey"></td>
				</tr>
		</form>
	</body>
</html>

<?php
	if(isset($_POST['btnsub']))
	{
		$txtsnm1=$_POST['txtsnm1'];
		$txtcnm1=$_POST['txtcnm1'];
		$txttfe1=$_POST['txttfe1'];
		$txtpfe1=$_POST['txtpfe1'];
		$txtrfe1=$_POST['txtrfe1'];
		include("connection.php");
		$q="update manage_fee set Student_Name='$txtsnm1',Course_Name='$txtcnm1',Total_Fee='$txttfe1',Paid_Fee='$txtpfe1',Remaining__Fee='$txtrfe1' where Fee_Id='$id'";
		mysqli_query($cn,$q);
		
		echo "<script>alert('Record Updated');window.location='managefee.php'</script>";
		mysqli_close($cn);
	
	}
?>