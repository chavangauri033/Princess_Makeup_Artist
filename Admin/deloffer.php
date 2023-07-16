<?php
	$id=$_GET['Offer_Id'];
	include("connection.php");
	$q="delete from manage_offers where Offer_Id='$id'";
	mysqli_query($cn,$q);
	mysqli_close($cn);
	echo "<script>alert('Record Deleted');window.location='manageoffer.php'</script>";
?>