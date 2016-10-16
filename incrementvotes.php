
<?php
include_once './connect.php' ;
$conn = mysqli_connect($servername, $username, $password,$db);
 $party = $_POST['partyname'];
 $id=$_POST['aadhaar'];
 $party= mysqli_escape_string($conn, $party);
 
	
	
	$id=mysqli_escape_string($conn,$id);
	$que=mysqli_query($conn,"update finaldb set status=1 where aadharno='$id'");
	
	
		$query = mysqli_query($conn, "select counter from partyDetails where partyName='$party'");
		$exec = mysqli_fetch_array($query);
		
		echo $exec[0];
		$exec[0]=$exec[0]+1;
		$query=mysqli_query($conn,"update partyDetails set counter='$exec[0]' where partyName='$party'");
		if($query)
		{
			echo "successful";
		} 

?>
