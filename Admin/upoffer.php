<?php
	$id=$_GET['Offer_Id'];
	include("connection.php");
	$q="select * from manage_offers where Offer_Id='$id'";
	$rs=mysqli_query($cn,$q);
	$id="";
	$fn="";
	$txtonm="";
	$txtpr="";
	



	if($a=mysqli_fetch_array($rs))
	{
		$id=$a['Offer_Id'];
		$fn=$a['offer_img'];
		$txtonm=$a['Todays_Offer'];
		$txtpr=$a['Percent'];
		
	}
	
?>
<html>
	<body>
		<br><br><br>
		<form method=post enctype="multipart/form-data">
			<table align=center width=30% height=20% cellpadding=20px style="border:2px solid">	
				<tr>
					<th align=center>Select Image-</th>
					<td>
					<input type=file name=file2 id=file2 style="width:200px;height:25px">
					</td>
				</tr>
				<tr>
					<th align=center>Todays Offer-</th>
					<td><input type=text name=txtonm1 id=txtonm1 style="width:200px;height:25px">
					</td>
				</tr>
				<tr>
					<th align=center>Offers In Percent-</th>
					<td><input type=text name=txtpr1 id=txtpr1 style="width:200px;height:25px">
					</td>
				</tr>
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
		
		
		$txtonm1=$_POST['txtonm1'];
		$txtpr1=$_POST['txtpr1'];
		
		include("connection.php");
		$q="update manage_offers set offer_img='$fn',Todays_Offer='$txtonm1',Percent='$txtpr1' where Offer_Id='$id'";
		mysqli_query($cn,$q);
		
		echo "<script>alert('Record Updated');window.location='manageoffer.php'</script>";
		mysqli_close($cn);
	
	}
?>