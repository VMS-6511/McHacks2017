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
		<h1>My Occasions</h1>
        
		<?php
		// Create connection
		$conn = mysqli_connect("localhost", "root", "", "mchacks");
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$id = $_SESSION["ID"];
		$sql = "SELECT *
				FROM occasions WHERE u_id = $id";
		$result = $conn->query($sql);
		
		if($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$occID = $row['o_id'];
				$occasion = $row['o_name'];
				$sDate = $row['s_date'];
				$eDate = $row['e_date'];
				$locale = $row['location'];
			?>
			<!-- Project One -->
        <div class="row">
			<div class="col-lg-12">
                <h1 class="page-header">
                </h1>
            </div>
			
            <div class="col-md-2">
                
            </div>

            <div class="col-md-8">
                <h4><b>Occasion Name: </b><?php echo $occasion; ?> </h4>
				<h4><b>Start Date (YYYY/DD/MM): </b> <?php echo $sDate; ?></h4>
				<h4><b>End Date (YYYY/DD/MM): </b>  <?php echo $eDate; ?></h4>
				<h4><b>Location: </b>  <?php echo $locale; ?></h4>
				<br>
				<form method="get">
                <a class="btn btn-primary" href="editOccasion.php">Edit Occasion <span class="glyphicon glyphicon-chevron-right"></span></a>
				<a class="btn btn-primary" href="optimizeEvent.php?occID=<?php echo $occID ?> ">Optimize Occasion <span class="glyphicon glyphicon-chevron-right"></span></a>
				</form>
            </div>
        </div>
		<hr>
		
		<?php
			}
		}
		else{
			echo "You have no saved occasions";
		}
		?>
		
        
      

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>