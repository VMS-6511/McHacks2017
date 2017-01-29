<?php include '/sessionCheck.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>timeCrunch</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="main.php">timeCrunch</a>
            </div>
			
			<!-- Search Bar -->
			<div class="col-sm-3 col-md-3">
				<form class="navbar-form" role="search">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="q">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					</div>
				</div>
				</form>
			</div>
			
			
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class = "active">
                        <a href="main.php">Home</a>
                    </li>
                    <li>
                        <a href="createEvent.php">Create Occasion</a>
                    </li>
					<li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br>
    <br>    <!-- Page Content -->
    <div class="container">
		<h1>Optimize Events</h1>
        
		<?php 
		
		$events = array();
		$allEvents = array();
		$i = 0;
		
		$oID =  $_GET['occID'];
		
	
		// Create connection
		$conn = mysqli_connect("localhost", "root", "", "mchacks");
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$id = $_SESSION["ID"];
		$sql = "SELECT * FROM events WHERE o_id='$oID'
				ORDER BY s_time ASC";
		$result = $conn->query($sql);
		
		if($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$eId = $row['e_id'];
				$eName = $row['e_name'];
				$descrpt = $row['description'];
				$sTime = $row['s_time'];
				$eTime = $row['e_time'];
				
			?>
			<!-- Project One -->
        <div class="row">
			<div class="col-lg-12">
            <div class="col-md-8">
                <h4><b>Event Name: </b><?php echo $eName; ?> </h4>
				<h4><b>Description: </b> <?php echo $descrpt; ?></h4>
				<h4><b>Start Time (YYYY/DD/MM HH:MM AM/PM): </b>  <?php echo $sTime; ?></h4>
				<h4><b>End Time (YYYY/DD/MM HH:MM AM/PM): </b>  <?php echo $eTime; ?></h4>
				<form method = "post">
					<select name="value" onchange="test(this)">
						<option value="">Select Value...</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
					<br>
					<br>
				</form>
			</div>
        </div>
		<hr>
		</div>
		<br>
	
			
      <?php
			$events[$i] = [$eId, $sTime, $eTime];
			$allEvents[$i] = [$events[$i]];
			$i++;
			}
		}
		else{
			echo "This occasion currently has no events scheduled";
		}
		?>
		<a class="btn btn-primary" href="optimization.php">Perform Optimiztion<span class="glyphicon glyphicon-chevron-right"></span></a>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>