<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>
<?php


// Create connection
$conn = mysqli_connect("localhost", "root", "", "mchacks");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];
-
$sql = "SELECT ID,password,f_name FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
	while($row = $result->fetch_assoc()) {
		if ($password==$row['password']) {
			$ID = $row['ID'];
			$name = $row['f_name'];
			$_SESSION["ID"] = $ID;
			$_SESSION["Name"] = $name;
			header("Location: ./main.php");
			die();
		}
		else{
			header("Location: ./login.html");
			die();
		}
	}
} 
else {
	header("Location: login.html");
	die();
}

mysqli_close($conn);

?>
</body>
</html>