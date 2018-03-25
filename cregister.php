 <?php  
 require "conn.php";  
 $name = $_POST["name"];  
 $email = $_POST["email"];  
 $sql_query = "insert into person values('$name','$email');"; 
if((mysqli_query($con, $sql_query))){
    echo "Successfully Inserted";
	} 
else{
    echo "registration Failed";

}
 ?>