<?php
	$id=$_GET['Batch_Id'];
	include("connection.php");
	$q="select * from manage_batch where Batch_Id='$id'";
	$rs=mysqli_query($cn,$q);
	$id="";
	$txtcnm="";
	$txtns="";
	$txtsnm="";
	$txtdt="";
	$txtdt1="";
	



	if($a=mysqli_fetch_array($rs))
	{
		$id=$a['Batch_Id'];
		$txtcnm=$a['Cor_Name'];
		$txtns=$a['No_Ofstudents'];
		$txtsnm=$a['Course_Stuname'];
		$txtdt=$a['Batch_Time'];
		$txtdt1=$a['Batch_Date'];
		
	}
	
?>
<html>
	<body>
		<br><br><br>
		<form method=post>
			<table align=center width=30% height=20% cellpadding=20px style="border:2px solid">	
				
				<tr>
					<th align=right>Course Name-</th>
					<td><input type=text name=txtcnm1 id=txtcnm1 style="width:200px;height:25px">
					</td>
				</tr>
				<tr>
					<th align=right>No. Of Student's-</th>
					<td><input type=text name=txtns1 id=txtns1 style="width:200px;height:25px">
				</td>
				</tr>
				<tr>
					<th align=right>Student's Name-</th>
					<td><textarea name=txtsnm1 id=txtsnm1 tyle="width:200px;height:25px"></textarea>
					</td>
				</tr>
				<tr>
					<th align=right>Batch Time-</th>
					<td><input type=text name="txtdt2" id="txtdt2" style="width:200px;height:25px">
					</td>
				</tr>
				<tr>
					<th align=right>Batch Date-</th>
					<td><input type=date name="txtdt3" id="txtdt3" style="width:200px;height:25px">
					</td>
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
		$txtcnm1=$_POST['txtcnm1'];
		$txtns1=$_POST['txtns1'];
		$txtsnm1=$_POST['txtsnm1'];
		$txtdt2=$_POST['txtdt2'];
		$txtdt3=$_POST['txtdt3'];
		
		include("connection.php");
		$q="update manage_batch set Cor_Name='$txtcnm1',No_Ofstudents='$txtns1',Course_Stuname='$txtsnm1',Batch_Time='$txtdt2',Batch_Date='$txtdt3' where Batch_Id='$id'";
		mysqli_query($cn,$q);
		
		echo "<script>alert('Record Updated');window.location='managebatch.php'</script>";
		mysqli_close($cn);
	
	}
?>