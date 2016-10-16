
<?php
include_once './connect.php' ;
$conn = mysqli_connect($servername, $username, $password,$db);

 $aadhar = $_POST['id'];

 echo $aadhar;
 
 $ans = mysqli_escape_string($conn, $aadhar);

	echo $aadhar;
	

	
		$query = mysqli_query($conn, "insert into finaldb (aadharno) values ('$aadhar')");
		//$exec = mysqli_fetch_array($query);
		echo $query;
		if(!$query)
		{
			 
	
			 
		} 
		
?>
