<?php
	$id=$_GET['Service_Id'];
	include("connection.php");
	$q="select * from manage_services where Service_Id='$id'";
	$rs=mysqli_query($cn,$q);
	$id="";
	$fn="";
	$lstmenu="";
	$lstmenu1="";
	$txtdis="";
	$txtprc="";
	


	if($a=mysqli_fetch_array($rs))
	{
		$id=$a['Service_Id'];
		$fn=$a['Service_img'];
		$lstmenu=$a['Service_Name'];
		$lstmenu1=$a['Sub_Service'];
		$txtdis=$a['Service_description'];
		$txtprc=$a['Service_Price'];
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
		<th align=right><font size="2"><b>Add Services</font></th>
		<td><select name=lstmenu2 id=lstmenu2 style="width:200px;height:25px">
		
			<option value="">--Select-Services--</option>
			<optgroup label="Services">
				<option value="Hair Cutting">Hair Cutting</option>
				<option value="Hair Style">Hair Style</option>
				<option value="Makeup">Makeup</option>
				<option value="Threading">Threading</option>
				<option value="Facial">Facial</option>
				<option value="Waxing">Waxing</option>
				<option value="Nail Art">Nail Art</option>
				<option value="Sadi Drepary">Sadi Drepary</option>
				<option value="Mehendi Designs">Mehendi Designs</option>
				<option value="Other Services">Other Services</option>
					
			</optgroup>
		</select></td><br><br><br>
	</tr>
	<tr>
		<th align=right><font size="2"><b>Add Subservices</font></th>
		<td><select name=lstmenu3 id=lstmenu3 style="width:200px;height:25px">
		
			<option value="">--Select-Sub-Services--</option>
			<option value="">--Select-Appointment--</option>
			<optgroup label="Hair">
				<option value="Shampoo">Shampoo</option>
				<option value="Hair Cutting">Hair Cutting</option>
				<option value="Hair Style">Hair Coloring</option>
					
			</optgroup>
			<optgroup label="Hair Style">
				<option value="Senorita Bun">Senorita Bun</option>
				<option value="Side swet Curl">Side swet Curl</option>
				<option value="The Flowery Bun">The Flowery Bun</option>
				<option value="Half Tied">Half Tied...Rs.250/-</option>
				<option value="Twisties And Braids">Twisties And Braids</option>
				<option value="Side sweep with a puff and bun">Side sweep with a puff and bun</option>	
			</optgroup>
			<optgroup label="Makeup Type's">
				<option value="Wedding Makeup">Wedding Makeup</option>
				<option value="HD Makeup">HD Makeup</option>
				<option value="Photoshoot Makeup">Photoshoot Makeup</option>
				<option value="Instalook Makeup">Instalook Makeup</option>
				<option value="Paternary Makeup">Paternary Makeup</option>
				<option value="Waterproof Makeup">Waterproof Makeup</option>
				<option value="Simple Makeup">Simple Makeup</option>	
			</optgroup>

			<optgroup label="Threading">
				<option value="Face">Face</option>
				<option value="Neck">Neck</option>
				<option value="Forehead">Forehead</option>
				<option value="Jawline">Jawline</option>			
				<option value="Sides">Sides</option>		
				<option value="Chin">Chin</option>
				<option value="Lower Lips">Lower Lips</option>
				<option value="Upper Lips">Upper Lips</option>
			</optgroup>
			<optgroup label="Facial">
				<option value="Clean Up">Clean Up</option>
				<option value="seasonal fruit">seasonal fruit</option>
				<option value="Shehnaz Facial">Shehnaz Facial</option>
				<option value="Lotus Facial">Lotus Facial</option>			
				<option value="Oxylife Facial">Oxylife Facial</option>		
			</optgroup>
			<optgroup label="Waxing">
				<option value="Body">Body</option>
				<option value="Full back">Full back</option>
				<option value="Full front">Full front</option>
				<option value="Midriff">Midriff</option>
				<option value="Full legs">Full legs</option>
				<option value="Half Legs">Half Legs</option>
				<option value="Chin">Chin</option>	
				<option value="Upper lips">Upper lips</option>
				<option value="Jawline">Jawline</option>
				<option value="Forehead">Forehead</option>
				<option value="Sidelocks">Sidelocks</option>
				<option value="Full Arms">Full Arms</option>
			</optgroup>
			<optgroup label="Nail Art">
				<option value="Shapes of nail">Shapes of nail</option>
				<option value="Nail anotomy">Nail anotomy</option>
				<option value="Nail prep">Nail prep</option>
				<option value="Gel polish application">Gel polish application</option>
				<option value="French polish application">French polish application</option>
				<option value="Gliter effect on gel polish">Gliter effect on gel polish</option>
				<option value="Gel nail extension">Gel nail extension</option>	
				<option value="French gel extension using cover pink gel + white gel">French gel extension using cover pink gel + white gel</option>
				<option value="French gel extension using white tipes + pink gel">French gel extension using white tipes + pink gel</option>
				<option value="Glitter effect in aceylic extension">Glitter effect in aceylic extension</option>
				<option value="Gel overlays">Gel overlays</option>
				<option value="Refills">Refills</option>
				<option value="Removals">Removals</option>
			</optgroup>
			<optgroup label="Sadi Drepary">
				<option value="Maharashtrian Sadi">Maharashtrian Sadi</option>
				<option value="Gujrati sadi">Gujrati sadi</option>
				<option value="Bangali sadi">Bangali sadi</option>
				<option value="South indian sadi">South indian sadi</option>
			</optgroup>
			<optgroup label="Mehendi Designs">
				<option value="Bridal Mehendi">Bridal Mehendi</option>
				<option value="Simple Mehendi">Simple Mehendi</option>
				<option value="Arebian Mehendii">Arebian Mehendii</option>
			</optgroup>
			<optgroup label="Other">
				<option value="Bleach">Bleach</option>
				<option value="De-Tan">De-Tan</option>
			</optgroup>



		</select></td><br><br><br>
	</tr>
	<tr>
		<th align=right>Description-</th>
		<td><textarea name=txtdis1 id=txtdis1 required>
		</textarea></td>
	</tr>
	<tr>
		<th align=right>Price-</th>
		<td><input type=text name=txtprc1 id=txtprc1 style="width:200px;height:25px">
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
		
		
		$lstmenu2=$_POST['lstmenu2'];
		$lstmenu3=$_POST['lstmenu3'];
		$txtdis1=$_POST['txtdis1'];
		$txtprc1=$_POST['txtprc1'];
		
		include("connection.php");
		$q="update manage_services set Service_img='$fn', Service_Name='$lstmenu2', Sub_Service='$lstmenu3', Service_description='$txtdis1', Service_Price='$txtprc1' where Service_Id='$id'";
		mysqli_query($cn,$q);
		
		echo "<script>alert('Record Updated');window.location='manageservice.php'</script>";
		mysqli_close($cn);
	
	}
?>