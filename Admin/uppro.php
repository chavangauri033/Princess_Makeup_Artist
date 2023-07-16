<?php
	$id=$_GET['Pr_Id'];
	include("connection.php");
	$q="select * from product_report where Pr_Id='$id'";
	$rs=mysqli_query($cn,$q);
	$id="";
	$txtnm="";
	$txtpprc="";
	$txtpdis="";
	$fn="";
	if($a=mysqli_fetch_array($rs))
	{
			$id=$a['Pr_Id'];
			$txtpnm=$a['Pr_Name'];
			$txtpprc=$a['Pr_Price'];
			$txtpdis=$a['Pr_Description'];
			$fn=$a['Pr_img'];
	}
	
?>
<html>
	<body>
		<br><br><br>
		<form method=post enctype="multipart/form-data">
			<table align=center width=30% height=20% cellpadding=20px style="border:2px solid">	
				<tr>
					<th align=right>Product Name-</th>
					<td><input type=text name=txtpnm1 id=txtpnm1 style="width:200px;height:25px"></td>
				</tr>
				<tr>
					<th align=right>Product Price-</th>
					<td><input type=text name=txtpprc1 id=txtpprc1 style="width:200px;height:25px"></td>
				</tr>
				<tr>
					<th align=right>Product Description-</th>
					<td><textarea name=txtpdis1 id=txtpdis1 tyle="width:200px;height:25px"></textarea></td>
				</tr>
				<tr>
					<th align=right>Select Photo-</th>
					<td>
					<input type=file name=file2 id=file2 style="width:200px;height:25px">
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

		$txtpnm1=$_POST['txtpnm1'];
		$txtpprc1=$_POST['txtpprc1'];
		$txtpdis1=$_POST['txtpdis1'];
		//end of image uploading
		include("connection.php");
		$q="update product_report set Pr_Name='$txtpnm1',Pr_Price='$txtpprc1',Pr_Description='$txtpdis1',Pr_img='$fn' where Pr_Id='$id'";
		mysqli_query($cn,$q);
		
		echo "<script>alert('Record Updated');window.location='manageprodut.php'</script>";
		mysqli_close($cn);
	
	}
?>