<!DOCTYPE html>

	<title>CSS Enrolment System</title>
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
                            <li><a href="home.php" ><font color = 'Red' >Menu</font></a>
							</li>
							
                          <li><a href="add.php" ><font color = 'Red' > Add Student</font></a></li> 
                              <li><a href="list.php" ><font color = 'Red' >Student List</a></li>
                              <li>  <a href="index.php"><input type="button"style="background-color:skyblue;font-size: 15px;"	 value="Logout" id = "buttons" title = "Logout"></a>
                        </ul>
                    </div>
                </div> 
            </div>
        </nav>
    </header>
	<center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	<body bgcolor ="dimgray"  "width = 50px" onload = 'save1()' > 
<div class="rain">
<div class="border start">
<br>
 <form action="add1.php" name = "frmMain1" method="post">
 <center>
<font face="WereWolf" color="red" size = "60px"> <B>Record Form</B></font>



<br>
<br>
<br>
<?php
function createRandomPassword() {
 $chars = "0123456789";
 srand((double)microtime()*100000000);
 $i=0;
 $pass = '';
 while ($i<=7) {
 $num = rand() % 33;
 $tmp = substr($chars, $num,1);
 $pass = $pass  . $tmp;
 
 $i++;
 }
 return $pass;
 }
 $finalcode ='CSS08246'.createRandomPassword();
 ?>
 


<font color = 'Red' ><B>IDnumber<B>:&nbsp;&nbsp;&nbsp;&nbsp;</font>
<input type="text" id = "button" placeholder = 'Enter id number'  value="<?php echo$finalcode?>" readonly name ="idnumber"><br>

<font color = 'Red' >First Name:&nbsp;&nbsp;</font>
<input type="Red" id = "button" placeholder = 'Firstname' autocomplete = "off" required  name ="firstname"><br>
<font color = 'Red' >Middle Name:</font>
<input type="text" id = "button" placeholder = 'Middlename' autocomplete = "off"  required  name ="mid"><br>

<font color = 'Red'>Last Name:&nbsp;&nbsp;&nbsp;</font>
<input type="text" id = "button" placeholder = 'Lastname' autocomplete = "off"  required  name ="lastname"><br>
<font color = 'Red'>Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
<select  name = 'gender'  id = 'button' required>
<option></option>
<option>Male</option>
<option>Female</option>

</select>

<font color = 'Red'>Course:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
<select name = 'course' required id = 'button' required>
<option></option>
<option>ECTECH</option>
<option>BSIT</option>
</select>
<br>
<font color = 'Red'>Year:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
<select name = 'year' required id = 'button' required>
<option></option>
<option>1st Year-Regular</option>
<option>1st Year-Irregular</option>
<option>2nd Year-Regular</option>
<option>2nd Year-Irregular</option>
<option>3rd Year-Irregular</option>
<option>3rd Year-Irregular</option>
<option>4th Year-Regular</option>
<option>4th Year-Irregular</option>

</select>
<br>

 <br>	
 <br>	
<input  type="submit" id="button1" value="Record" name 'Save' style="background-color:skyblue;font-size: 20px;"><br><br>
</center>
<br>
</div>
</div>
</form>
 <br>	
 <br>	
 <br>	
<br>
</div>
</div>

</body>

<div class="header1">
</div>
		<style>
	
			       	.border,
			.rain{
	
				width: 500px;
			}

			   .border{
				padding: 15px;
				height:600px;
                      }

			.border{
			   
			   background: #C0F64F;
			

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
