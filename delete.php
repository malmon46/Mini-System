<?php
include('dbcon.php');  

 
 
 
$idnumber=$_GET['idnumber'];



mysql_query("DELETE FROM student WHERE idnumber='$idnumber'");



	{
		echo"	<script>
		alert (' Student has been DELETED');
				
				</script>
		";
	}
	include("home.php");


 ?>