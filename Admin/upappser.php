<?php
	$id=$_GET['Appointment_Id'];
	include("connection.php");
	$q="select * from appointment where Appointment_Id='$id'";
	$rs=mysqli_query($cn,$q);
	$id="";
	$txtnm="";
	$lstmenu="";
	$txtadd="";
	$txtdt1="";
	$txtdt="";
	$txtod="";
	



	if($a=mysqli_fetch_array($rs))
	{
		$id=$a['Appointment_Id'];
		$txtnm=$a['Ur_Name'];
		$lstmenu=$a['Appointment_Type'];
		$txtadd=$a['Appointment_Add'];
		$txtdt1=$a['Appointment_Date'];
		$txtdt=$a['Appointment_Time'];
		$txtod=$a['Current_Date'];
		
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
					<th align=center><select name="lstmenu1" id="lstmenu1" style="height:35px;width:300px">
		
			<option value="">--Select-Appointment--</option>
			<option value="">--Select-Appointment--</option>
			<optgroup label="Hair">
				<option value="Shampoo">Shampoo...Rs.50/-</option>
				<option value="Hair Cutting">Hair Cutting...Rs.110/-To-500/-</option>
				<option value="Hair Style">Hair Coloring...Rs.150/-To-3800</option>
					
			</optgroup>
			<optgroup label="Hair Style">
				<option value="Senorita Bun">Senorita Bun...Rs.400/-</option>
				<option value="Side swet Curl">Side swet Curl...Rs.350/-</option>
				<option value="The Flowery Bun">The Flowery Bun...Rs.200/-</option>
				<option value="Half Tied">Half Tied...Rs.250/-</option>
				<option value="Twisties And Braids">Twisties And Braids...Rs.450/-</option>
				<option value="Side sweep with a puff and bun">Side sweep with a puff and bun...Rs.245/-</option>	
			</optgroup>
			<optgroup label="Threading">
				<option value="Face">Face...Rs.130/-</option>
				<option value="Neck">Neck...Rs.40/-</option>
				<option value="Forehead">Forehead...Rs.40/-</option>
				<option value="Jawline">Jawline...Rs.30/-</option>			
				<option value="Sides">Sides...Rs.30/-</option>		
				<option value="Chin">Chin...Rs.30/-</option>
				<option value="Lower Lips">Lower Lips...Rs.30/-</option>
				<option value="Upper Lips">Upper Lips...Rs.30/-</option>
			</optgroup>
			<optgroup label="Facial">
				<option value="Clean Up">Clean Up...Rs.200/-</option>
				<option value="seasonal fruit">seasonal fruit...Rs.300/-</option>
				<option value="Shehnaz Facial">Shehnaz Facial...Rs.1000/-</option>
				<option value="Lotus Facial">Lotus Facial...Rs.800/-</option>			
				<option value="Oxylife Facial">Oxylife Facial...Rs.1500/-</option>		
			</optgroup>
			<optgroup label="Waxing">
				<option value="Body">Body...Rs.800/-To-1200/-</option>
				<option value="Full back">Full back...Rs.350/-To-500/-</option>
				<option value="Full front">Full front...Rs.350/-To-500/-</option>
				<option value="Midriff">Midriff...Rs.200/-To-300/-</option>
				<option value="Full legs">Full legs...Rs.300/-To-550/-</option>
				<option value="Half Legs">Half Legs...Rs.200/-To-300/-</option>
				<option value="Chin">Chin...Rs.40/-To-60/-</option>	
				<option value="Upper lips">Upper lips...Rs.30/-To-40/-</option>
				<option value="Jawline">Jawline...Rs.40/-To-60/-</option>
				<option value="Forehead">Forehead...Rs.40/-To-60/-</option>
				<option value="Sidelocks">Sidelocks...Rs.30/-To-60/-</option>
				<option value="Full Arms">Full Arms...Rs.200/-To-300/-</option>
			</optgroup>
			<optgroup label="Nail Art">
				<option value="Shapes of nail">Shapes of nail...Rs.4000/-</option>
				<option value="Nail anotomy">Nail anotomy...Rs.3000/-</option>
				<option value="Nail prep">Nail prep...Rs.2000/-</option>
				<option value="Gel polish application">Gel polish application...Rs.3000/-</option>
				<option value="French polish application">French polish application...Rs.1000/-</option>
				<option value="Gliter effect on gel polish">Gliter effect on gel polish...Rs.5000/-</option>
				<option value="Gel nail extension">Gel nail extension...Rs.1000/-</option>	
				<option value="French gel extension using cover pink gel + white gel">French gel extension using cover pink gel + white gel...Rs.1000/-</option>
				<option value="French gel extension using white tipes + pink gel">French gel extension using white tipes + pink gel...Rs.1000/-</option>
				<option value="Glitter effect in aceylic extension">Glitter effect in aceylic extension...Rs.1000/-</option>
				<option value="Gel overlays">Gel overlays...Rs.1000/-</option>
				<option value="Refills">Refills...Rs.1000/-</option>
				<option value="Removals">Removals...Rs.1000/-</option>
			</optgroup>
			<optgroup label="Sadi Drepary">
				<option value="Maharashtrian Sadi">Maharashtrian Sadi...Rs.100/-</option>
				<option value="Gujrati sadi">Gujrati sadi...Rs.800/-</option>
				<option value="Bangali sadi">Bangali sadi...Rs.850/-</option>
				<option value="South indian sadi">South indian sadi...Rs.850/-</option>
			</optgroup>
			<optgroup label="Mehendi Designs">
				<option value="Bridal Mehendi">Bridal Mehendi...Rs.3000/-</option>
				<option value="Simple Mehendi">Simple Mehendi...Rs.500/-</option>
				<option value="Arebian Mehendii">Arebian Mehendii...Rs.500/-</option>
			</optgroup>
			<optgroup label="Other">
				<option value="Bleach">Bleach...Rs.3000/-</option>
				<option value="De-Tan">De-Tan...Rs.500/-</option>
			</optgroup>

		</select></th> 
				</tr>
				<tr>
				
					<td align=center><textarea name="txtadd1" id="txtadd1" placeholder="Enter Your Address" required style="width:300px;height:60px"></textarea></td>
				</tr>
				<tr>
				
					<td align=center><input type=date name="txtdt2" id="txtdt2" placeholder="Enter date" style="height:35px;width:300px"></td>
				</tr>
				<tr>
					
					<td align=center><input type=text name="txtdt3" id="txtdt3" placeholder="Enter time" style="height:35px;width:300px"></td>
				</tr>
				<tr>
					
					<td align=center><input type=text name="txtod1" id="txtod1" placeholder="Product Name" value="<?php echo date('d/m/y');?>" required readonly style="width:200px;height:25px"></td>
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
		$lstmenu1=$_POST['lstmenu1'];
		$txtadd1=$_POST['txtadd1'];
		$txtdt2=$_POST['txtdt2'];
		$txtdt3=$_POST['txtdt3'];
		$txtod1=$_POST['txtod1'];
		
		
		include("connection.php");
		$q="update appointment set Ur_Name='$txtnm1',Appointment_Type='$lstmenu1',Appointment_Add='$txtadd1';Appointment_Date='$txtdt2',Appointment_Time='$txtdt3',Current_Date='$txtod1' where Appointment_Id='$id'";
		mysqli_query($cn,$q);
		
		echo "<script>alert('Record Updated');window.location='mgappointment.php'</script>";
		mysqli_close($cn);
	
	}
?>