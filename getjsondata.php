
<?php
include_once './connect.php' ;
$conn = mysqli_connect($servername, $username, $password,$db);
 $age = $_POST['age'];
 $aadhar = $_POST['aadharid'];
 echo $age;
 echo $aadhar;
 $age= mysqli_escape_string($conn, $age);
 $ans = mysqli_escape_string($conn, $aadhar);
	echo $age;
	echo $aadhar;
	
	if($age>=18)
	{	
	
		$query = mysqli_query($conn, "INSERT INTO finaldb (aadharno,age) values ('$aadhar','$age')");
		if($query)
		{
			echo "successful";
		} 
	}
?>
