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

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (f_name, l_name, email, password)
VALUES ('$fname', '$lname', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: ./login.html");
	die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("Location: ./main.html");
	die();
}

mysqli_close($conn);

?>
</body>
</html>