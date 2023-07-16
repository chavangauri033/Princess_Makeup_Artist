<?php
	$id=$_GET['Course_Id'];
	include("connection.php");
	$q="select * from manage_courses where Course_Id='$id'";
	$rs=mysqli_query($cn,$q);
	$id="";
	$fn="";
	$lstmenu="";
	$txtdis="";
	$txtcprc="";
	


	if($a=mysqli_fetch_array($rs))
	{
			$id=$a['Course_Id'];
			$fn=$a['Course_img'];
			$lstmenu=$a['Course_Name'];
			$txtdis=$a['Course_Description'];
			$txtcprc=$a['Course_Price'];
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
				<th align=right>Course Name-</th>
				<td><select name=lstmenu1 id=lstmenu1 style="width:200px;height:25px">
		
			<option value="">--Select-Courses--</option>
			<optgroup label="Services">
				<option value="Hair Grooming">Hair Grooming</option>
				<option value="Diploma In Cosmatology">Diploma In Cosmatology</option>
				<option value="Skin And Beauty">Skin And Beauty</option>
				<option value="Make-Up Artistry">Make-Up Artistry</option>
				<option value="Nail Art">Nail Art</option>
				<option value="Mehendi Designs">Mehendi Designs</option>
				
					
			</optgroup>
		</select></td><br><br><br>
				</tr>
				<tr>
				<th align=right>Description-</th>
				<td><textarea name=txtdis1 id=txtdis1 tyle="width:200px;height:25px">
				</textarea>
				</td>
				</tr>
				<tr>
				<th align=right>Couse Price-</th>
				<td><input type=text name=txtcprc1 id=txtcprc1 style="width:200px;height:25px">
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
		//end of image uploading
		
		
		$lstmenu1=$_POST['lstmenu1'];
		$txtdis1=$_POST['txtdis1'];
		$txtcprc1=$_POST['txtcprc1'];
		
		include("connection.php");
		$q="update manage_courses set Course_img='$fn',Course_Name='$lstmenu1',Course_Description='$txtdis1',Course_Price='$txtcprc1' where Course_Id='$id'";
		mysqli_query($cn,$q);
		
		echo "<script>alert('Record Updated');window.location='managescourses.php'</script>";
		mysqli_close($cn);
	
	}
?>