<!DOCTYPE html>
<html>
<body>
<?php
include '/sessionCheck.php';

// Create connection
$conn = mysqli_connect("localhost", "root", "root", "mchacks");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$occasionname = $_POST['occasion_name'];
$s_date = $_POST['start_date'];
$e_date = $_POST['end_date'];
$location = $_POST['location'];
$userID = $_SESSION["ID"];

$sql = "INSERT INTO occasions (o_name, u_id, location, s_date, e_date)
VALUES ('$occasionname', '$userID', '$location', '$s_date', '$e_date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

?>
</body>
</html>