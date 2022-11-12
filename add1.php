<?php
include('dbcon.php');

$idnumber = $_POST['idnumber'];
$firstname=$_POST['firstname'];
$mid=$_POST['mid'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$course=$_POST['course'];
$year=$_POST['year'];




 $result = mysql_query("SELECT * FROM student WHERE idnumber='$idnumber'");
 $foundnum = mysql_num_rows ($result);
 
 
 if($foundnum == 0)
 
	{
	 
	 include('home.php');
	  
	mysql_query("INSERT INTO student(idnumber, firstname, mid, lastname, gender, course, year )
	VALUES ('$idnumber', '$firstname', '$mid', '$lastname', '$gender', '$course', '$year')");

	   echo("<script> 
		alert('$firstname $lastname is now successfully added.')
		</script> ");

	}
	else

	{
 
		include('add.php');
	 
	   echo("<script> 
		alert('Student was already exist.')
		</script> ");
	 
	}

?>