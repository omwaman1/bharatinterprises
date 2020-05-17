<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$fname = $_POST["first_name"];
	$lname = $_POST["last_name"];
	$email= $_POST["email"];
$link = mysqli_connect("localhost", "root", "", "my");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO som (first_name, last_name, email) VALUES ('$fname', '$lname', '$email')";
if(mysqli_query($link, $sql)){
    echo "<h1>Records inserted successfully.</h1>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
<head>
<title>submit landmarks</title>
</head>
<body>
	<style>
	input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
div {
	width=: 140px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 100px;
}
</style>
	<a href="untitled.html">
		<div>
	<input type="submit" value="SUBMIT LANDMARKS">
		</a>
		</div>
		</body>
		</html>
		
		
		
		
		
		