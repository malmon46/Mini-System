<?php
include('dbcon.php');


$idnumber=$_POST['idnumber'];
$firstname=$_POST['firstname'];
$mid=$_POST['mid'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$course=$_POST['course'];
$year=$_POST['year'];



 include('home.php');
 
 
	mysql_query("UPDATE student SET idnumber='$idnumber', firstname='$firstname', mid='$mid', lastname='$lastname', gender='$gender', course='$course', year='$year' WHERE  idnumber='$idnumber'");
	
	 echo("<script> 
	alert('$firstname $lastname was successfully Updated')
	 </script> ");
	 
	 
	 
	 
	 
	 
?>