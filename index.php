<?php include '/sessionCheck.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Occasion Optimizer</title>

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
                <a class="navbar-brand" href="testIndex.html">Occasion Optimizer</a>
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
                        <a href="#">Home</a>
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
        
        
        <!-- Project One -->
        <div class="row">
			<div class="col-lg-12">
                <h1 class="page-header">
                </h1>
            </div>
			
            <div class="col-md-2">
                
            </div>

            <div class="col-md-8">
                <h4><b>Occasion Name:</b> Cochella</h4>
				<h4><b>Start Date (yyyy/dd/mm):</b> 2017/14/04</h4>
				<h4><b>End Date (yyyy/dd/mm):</b>  2017/16/04</h4>
				<h4><b>Location:</b>  INDIO, CA</h4>
				<br>
                <a class="btn btn-primary" href="editOccasion.php">Edit Occasion <span class="glyphicon glyphicon-chevron-right"></span></a>
				<a class="btn btn-primary" href="">Optimize Occasion <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
		<hr>
      

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>