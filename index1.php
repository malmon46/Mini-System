<?php
include('dbcon.php');

 $a=$_POST["a"];
 $b=$_POST["b"];
 
 $result = mysql_query("SELECT * FROM login WHERE user='$a' && password='$b'");
 $foundnum = mysql_num_rows ($result);
if($a == "" && $b == "")
{

}
else if($foundnum>0)
{
header('location:home.php');
}

 else
 {
  include('index.php');
     echo("<script> 
alert('The username or password is incorrect.')
 </script> ");

} 

?>