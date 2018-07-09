<?php
	
	include('insertregister.php');
$mysqli = new mysqli ("localhost", "","" ,"cafeteria");

if ($mysqli==false){
	die ("ERROR: Could not connect." . $mysql->connect_error);

}
echo " connected successfully. Host info:". $mysqli->host_info;
//
	if(isset($_POST['submit'])){
			$name = $_POST["name"];
			$email = $_POST["name"];
			 $dateJoined = $_POST["date"];
			  $peopleNo = $_POST["peopleNo"];
			  $special = $_POST["special"];
	}

	$sql = "INSERT INTO resertvation (name, email,date, peopleNo,preference)
		VALUES ('$name','$email','$dateJoined','$peopleNo',' $special ')";
		if ($mysqli->query($sql) ===true) {
	echo "data inserted";
} else {
	echo "insertion unsuccessful";
}

$mysqli -> close ();


?>

<!DOCTYPE html>

<html>

<body>

The following are your Reservations info:<br>
YOUR NAME: <br> 
<?php echo $_POST["name"]; ?><br>

YOUR EMAIL:<br> 
<?php echo $_POST["email"]; ?><br>

DATE:<br> 
<?php echo $_POST["date"]; ?><br>

NO OF PEOPLE:<br> 
<?php echo $_POST["peopleNo"]; ?><br>

SPECIAL OCCASSION:<br> <?php echo $_POST["special"];?><br>

<a href="HomePage.php">Back Home</a>
</body>
</html>
