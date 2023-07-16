<?php
	$id=$_GET['Gallery_Id'];
	include("connection.php");
	$q="select * from manage_gallery where Gallery_Id='$id'";
	$rs=mysqli_query($cn,$q);
	$id="";
	$fn="";
	if($a=mysqli_fetch_array($rs))
	{
		$id=$a['Gallery_Id'];
		$fn=$a['img'];	
	}
	
?>
<html>
	<body>
		<br><br><br>
		<form method=post enctype="multipart/form-data">
			<table align=center width=30% height=20% cellpadding=20px style="border:2px solid">	
				<tr align=center>
					<td>Select-image=<input type=file name=file2 id=file2 value="<?php echo $file1;?>" ></td><br>
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
		//end of image uploading
		include("connection.php");
		$q="update manage_gallery set img='$fn' where Gallery_Id='$id'";
		mysqli_query($cn,$q);
		
		echo "<script>alert('Record Updated');window.location='manageurgallery.php'</script>";
		mysqli_close($cn);
	
	}
?>