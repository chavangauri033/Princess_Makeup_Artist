<?php
	$txtnm=$a['Stu_Fullname'];
	include("connection.php");
	$q="delete from student_feedback where Stu_Fullname='$txtnm'";
	mysqli_query($cn,$q);
	mysqli_close($cn);
	echo "<script>alert('Record Deleted');window.location='managestufeedback.php'</script>";
?>