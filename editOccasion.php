

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
                    <li>
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
		<h1>Edit Occasion</h1>
		<div class="col-md-6">
			<div class="row" style="padding-top:50px">
				<form method="post" action="updateOccasion.php">
					<div class="form-group">
					<input type="text" class="form-control" id="Occasion Name" name="occasion_name" placeholder="Event Name">
					</div>
					<div class="form-group">
					<input type="text" class="form-control" id="startDate" name="start_date" placeholder="Start Date (yyyy/dd/mm)">
					</div>
					<div class="form-group">
					<input type="text" class="form-control" id="endDate" name="end_date" placeholder="End Date (yyyy/dd/mm)">
					</div>
					<div class="form-group">
					<input type="text" class="form-control" id="location" name="location" placeholder="Location">
					</div>
					<br>
					<button type="submit" class="btn btn-primary">Update Occasion<span class="glyphicon glyphicon-chevron-right"></span></button>
					</form>
					<br>
					<button class="btn btn-primary" data-toggle="modal" data-target="#addEvent">Add Event<span class="glyphicon glyphicon-chevron-right"></span></button>

				
				<br>
			</div>
		</div>
		
		
	<div class="modal fade" id="addEvent">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">New Event</h4>
          </div>
    	  <form method="post" action=/pages/HouseMessage>
              <div class="modal-body">
            	<div class="form-group">
            		<input type="textarea" rows="4" cols="50" name="" class="form-control" id="eventName" placeholder="Event Name">
            	</div>
				<div class="form-group">
            		<input type="textarea" rows="4" cols="50" name="" class="form-control" id="description" placeholder="Description">
            	</div>
				<div class="form-group">
            		<input type="textarea" rows="4" cols="50" name="" class="form-control" id="eventStart" placeholder="Start Time">
            	</div>
				<div class="form-group">
            		<input type="textarea" rows="4" cols="50" name="" class="form-control" id="eventEnd" placeholder="End Time">
            	</div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add Event</button>
              </div>
    	  </form>
      </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
		
		
		
    </div>
    <!-- /.container -->
	
	
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	

</body>

</html>