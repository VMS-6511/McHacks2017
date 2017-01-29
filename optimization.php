<?php
session_start();
?>

<!DOCTYPE html>
<html>
<header>
	<script src="./js/eventSelection.js"></script>
</header>
<body>
<?php
// Create connection
$conn = mysqli_connect("localhost", "root", "", "mchacks");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$occasionID = "2";
$i = 1;

$sql = "SELECT e_id,s_time,e_time FROM events WHERE o_id = $occasionID";
$result = $conn->query($sql);
$eventList = array(); 

if ($result->num_rows > 0) {
// output data of each row
	while($row = $result->fetch_assoc()) {
		$weight = rand(1, 5);
		//Weight placeholder
		$row['weight'] = $weight;
		array_push($eventList,$row);
	
	}
}
else {
	header("Location: ./login.html");
	die();
}


//print_r($eventList[0]);
?>

<script type="text/javascript">

    var eventList = <?php echo json_encode($eventList); ?>;
    console.log(eventList);
    var endTimes = [];
    var startTimes = [];
    var weights = [];
    var eID = [];
    var numberOfEvents = eventList.length
    for (var i = numberOfEvents - 1; i >= 0; i--) {
    	var tempStart = new Date(Date.parse(eventList[i]['s_time']));
    	var tempEnd = new Date(Date.parse(eventList[i]['e_time']));
    	startTimes = startTimes.concat(tempStart)
    	endTimes = endTimes.concat(tempEnd);
    	weights = weights.concat(eventList[i]['weight']);
    	eID = eID.concat(eventList[i]['e_id']);
    }
    var newEventList = [];
    for (var i = numberOfEvents - 1; i >= 0; i--) {
    	newEventList[i] = [eID[i],startTimes[i],endTimes[i],weights[i]];
    }
    console.log(newEventList);
    //console.log(flipTimes(eventList));
    //console.log(eventList[0]['e_time']);
    //console.log(flipTimes(eventList));
    var sortedList = mergeSort(newEventList);
    var recursedList = findMaxWeightRecursion(sortedList, sortedList.length)[1];
    console.log(recursedList);

    console.table(recursedList);
    //console.log(findMaxWeightRecursion(mergeSort(newEventList), numberOfEvents));

</script>
<?php
mysqli_close($conn);
?>
</body>
</html> 



