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

echo $userID;
$o_id = "SELECT o_id FROM occasions where "
$sql = "UPDATE occasions SET o_name='$occasionname', s_date='$s_date', e_date='$e_date' ,location='$location' 
WHERE $userID=u_id";

echo $sql;

$result = $conn->query($sql);
echo $result;
if ($result> 0) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

?>
</body>
</html>