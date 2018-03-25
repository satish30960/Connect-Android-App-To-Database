 <?php  
 require "conn.php";  
 $susername =$_POST["user"];  
 $spassword =  $_POST["password"];  
 $sql_query = "select * from person where email like '$susername' and name like '$spassword';";  
 $result = mysqli_query($con,$sql_query);  
 if(mysqli_num_rows($result) >0 )  
 {   
   $row = mysqli_fetch_assoc($result);  
 $name =$row["name"]; 
 echo "Login Success..Welcome  ".$name;  
 }  
 else  
 {   
 echo "Login Failed.......Try Again.. lohith";  
 }  
 ?>