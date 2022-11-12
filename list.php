<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		
			<title>CSS Enrolment System</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <meta charset="UTF-8">
		<!-- 
    	Rainbow Template
		http://www.templatemo.com/preview/templatemo_425_rainbow
    	-->
		<link rel="stylesheet" type="text/css" href="css/templatemo-style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<header class="site-header" id="top">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                          <i class="fa fa-bars"></i>
                        </button>
                        <div class="logo-wrapper">
                            <a class="navbar-brand" href="#">
                                <img src="images/as.JPG" width="100" height="50px" >
                            </a>
                        </div>  
                    </div>
          <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="home.php" ><font color = 'Red' >Menu</font></a></li>
                          <li><a href="add.php" ><font color = 'Red' > Add Student</font></a></li> 
                              <li><a href="list.php" ><font color = 'Red' >Student List</a></li>
							<li>  <a href="index.php"><input type="button"style="background-color:skyblue;font-size: 15px;"	 value="Logout" id = "buttons" title = "Logout"></a>
							  
                        </ul>
                    </div>
                </div> 
            </div>
        </nav>
    </header>
<br>
<br>
<br>
<br>
<br>
<center>

<body bgcolor ="dimgray" onload = 'save1()' > 


<br>
<br>



<div class="rain1">
<div class="border start">
<form action="index.php" method="Post" name ="frmMain1">
<br>
<center>
<br>
<br>


<font face="WereWolf" color="red" size = "60px"> <B>Student List</B></font>

</font>

<br>


<table class  = "table table-bordered">
 <thead>
<tr>
<div class="header1">
</div>
<center>
<th>Number</th>
<th>ID Number</th>
<th>FirstName</th>
<th>MiddleName </th>
<th>LastName</th>
<th>Gender</th>
<th>Course</th>
<th>Year</th>

</center>


</tr>


<?php

include('dbcon.php');

 
 $result = mysql_query("SELECT * FROM student");
 $foundnum = mysql_num_rows ($result);
 while($row = mysql_fetch_array($result))



  {


  echo '<tr>';
			  echo '<td><div align="center">'.$row['id'].'</div></td>';
			  echo '<td><div align="center">'.$row['idnumber'].'</div></td>';
			  echo '<td><div align="center">'.$row['firstname'].'</div></td>';
			  echo '<td><div align="center">'.$row['mid'].'</div></td>';
			  echo '<td><div align="center">'.$row['lastname'].'</div></td>';
			  echo '<td><div align="center">'.$row['gender'].'</div></td>';
			  echo '<td><div align="center">'.$row['course'].'</div></td>';
			  echo '<td><div align="center">'.$row['year'].'</div></td>';
			
		
			
			 
			  echo'<tr>';
		  
		} 
		
		if($foundnum==0)
echo "<tr><td colspan='4' align='center' style='color:red'>There's No Record yet</td></tr>";

		?>
<div class="header1">
</div>
		<style>
	
			       	.border,
			.rain{
	
				width: 800px;
			}

			   .border{
				padding: 15px;
				height:880px;
                      }

			.border{
			   
			   background: white;
			

			}

 
      
      #button{
	  
	          
                border-radius: 1px;
		        border: 1px solid #ddd;
				padding: 6px;
				font-weight: lighter;
				margin-top: 4px; margin-bottom: 4px; margin-left: 4px; margin-right: 4px; width: auto;
			
				
			}
			
			
  #button:hover{
	            color:			 black;
				font-weight: lighter;
				border: 1px solid black;
				padding: 6px;
			}
 #button:focus{
                       border: 1px solid red;
	            color:			 black;
				padding: 6px;
				font-weight: lighter;
			}
			
			

		</style>
	</center>	
</body>

</html>
