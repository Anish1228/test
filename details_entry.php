<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="testss";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $gender = $_POST['gender'];
	 $number = $_POST['number'];

	 $sql_query = "INSERT INTO entry_details (name,email,gender,number)
	 VALUES ('$name','$email','$gender','$number')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>