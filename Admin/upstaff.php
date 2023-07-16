<?php
	$id=$_GET['Staff_Id'];
	include("connection.php");
	$q="select * from manage_staffgallery where Staff_Id='$id'";
	$rs=mysqli_query($cn,$q);
	$id="";
	$fn="";
	$txtnm="";
	if($a=mysqli_fetch_array($rs))
	{
		$id=$a['Staff_Id'];
		$fn=$a['Staff_img'];	
		$txtnm=$a['Staff_Name'];	
	}
	
?>
<html>
	<body>
		<br><br><br>
		<form method=post enctype="multipart/form-data">
			<table align=center width=30% height=20% cellpadding=20px style="border:2px solid">	
				<tr>
					<th align=right>Select Photo-</th>
					<td>
					<input type=file name=file2 id=file2 style="width:200px;height:25px">
					</td>
				</tr>
				<tr>
					<th align=right>Name-</th>
					<td><input type=text name=txtnm1 id=txtnm1 style="width:200px;height:25px">
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
		
		//code for image uploading
		$fn=$_FILES['file2']['name'];
		$s=$_FILES['file2']['size'];
		$tnm=$_FILES['file2']['tmp_name'];
		
		$ptr1=fopen($tnm,"r");
		$data=fread($ptr1,$s);
		$ptr2=fopen("images/$fn","w");
		fwrite($ptr2,$data);
		fclose($ptr1);
		fclose($ptr2);

		$txtnm1=$_POST['txtnm1'];
		//end of image uploading
		include("connection.php");
		$q="update manage_staffgallery set Staff_img='$fn', Staff_Name='$txtnm1' where Staff_Id='$id'";
		mysqli_query($cn,$q);
		
		echo "<script>alert('Record Updated');window.location='managestaff.php'</script>";
		mysqli_close($cn);
	
	}
?>