<?php
	session_start();
	$_SESSION['onpage'] = 'teams';
?>

<!DOCTYPE html>
<html>
	<head>
	<meta name=viewport content="width=device-width, initial-scale=1"> 

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <!-- Your custom styles -->
    <link rel="stylesheet" href="css/mynavigation.css">
    <link rel="stylesheet" href="css/teams.css">

	<title>IPL</title>
</head>

<body>
<<<<<<< HEAD
	<!-- always include two </div> elements before </body> -->
    <?php include 'mynavigation.php';?>
    		<div class="col-md-10 main">
    			<div class="row">
					<div class="col-md-3">
		  				<a href="teams.php?id=1">
				  			<div class="card text-center">
				  				<img class="card-img-top" src="css\images\mi.png">
				  				<div class="card-body">
				  					<h5 class="card-title">Mumbai</br>Indians</h5>
				  				</div>
				  			</div>
				  		</a>
			  		</div>
			      	<div class="col-md-3">
			      		<a href="team-info.php?id=2">
				      		<div class="card text-center">
				  				<img class="card-img-top" src="css\images\csk.png">
				  				<div class="card-body">
					  				<h5 class="card-title">Chennai Super</br>Kings</h5>
					  			</div>
				  			</div>
				  		</a>
			      	</div>
			      	<div class="col-md-3">
			      		<a href="#">
				      		<div class="card text-center">
				  				<img class="card-img-top" src="css\images\rcb.png">
				  				<div class="card-body">
					  				<h5 class="card-title">Royal Challengers</br>Bangalore</h5>
					  			</div>
				  			</div>
				  		</a>
			      	</div>
			      	<div class="col-md-3">
			      		<a href="#">
			      			<div class="card text-center">
			  					<img class="card-img-top" src="css\images\kkr.png">
			  					<div class="card-body">
					  				<h5 class="card-title">Kolkata Knight</br>Riders</h5>
					  			</div>
			  				</div>
			  			</a>
			      	</div>
		    	</div>
			    <div class="row">
			      	<div class="col-md-3">
			      		<a href="#">
				      		<div class="card text-center">
				  				<img class="card-img-top" src="css\images\srh.png">
				  				<div class="card-body">
					  				<h5 class="card-title">Sunrisers</br>Hyderabad</h5>
					  			</div>
				  			</div>
				  		</a>
			      	</div>
			      	<div class="col-md-3">
			      		<a href="#">
				      		<div class="card text-center">
				  				<img class="card-img-top" src="css\images\rr.png">
				  				<div class="card-body">
					  				<h5 class="card-title">Rajasthan</br>Royals</h5>
					  			</div>
				  			</div>
				  		</a>
			      	</div>
			      	<div class="col-md-3">
			      		<a href="#">
				      		<div class="card text-center">
				  				<img class="card-img-top" src="css\images\kxip.png">
				  				<div class="card-body">
					  				<h5 class="card-title">Kings XI</br>Punjab</h5>
					  			</div>
				  			</div>
				  		</a>
			      	</div>
			      	<div class="col-md-3">
			      		<a href="#">
				      		<div class="card text-center">
				  				<img class="card-img-top" src="css\images\dd.png">
				  				<div class="card-body">
					  				<h5 class="card-title">Delhi</br>Daredevils</h5>
					  			</div>
=======

	<div class="mynavigation">
      <?php include 'mynavigation.php';?>
    </div>
    <div class="main">
	
	<div class="container-fluid bg">

		<div class="container ">
    		<div class="row">
	  			<div class="col-md-3">
	  				<a href="teaminfo.php?id=1">
			  			<div class="card text-center">
			  				<img class="card-img-top" src="css\images\mi.png">
			  				<div class="card-body">
			  					<h5 class="card-title">Mumbai</br>Indians</h5>
			  				</div>
			  			</div>
			  		</a>
		  		</div>
		      	<div class="col-md-3">
		      		<a href="teaminfo.php?id=2">
			      		<div class="card text-center">
			  				<img class="card-img-top" src="css\images\csk.png">
			  				<div class="card-body">
				  				<h5 class="card-title">Chennai Super</br>Kings</h5>
				  			</div>
			  			</div>
			  		</a>
		      	</div>
		      	<div class="col-md-2">
		      		<a href="teaminfo.php?id=3">
			      		<div class="card text-center">
			  				<img class="card-img-top" src="css\images\rcb.png">
			  				<div class="card-body">
				  				<h5 class="card-title">Royal Challengers</br>Bangalore</h5>
				  			</div>
			  			</div>
			  		</a>
		      	</div>
		      	<div class="col-md-2">
		      		<a href="teaminfo.php?id=4">
		      			<div class="card text-center">
		  					<img class="card-img-top" src="css\images\kkr.png">
		  					<div class="card-body">
				  				<h5 class="card-title">Kolkata Knight</br>Riders</h5>
				  			</div>
		  				</div>
		  			</a>
		      	</div>
		    </div>
		    <div class="row">
		      	<div class="col-md-3">
		      		<a href="teaminfo.php?id=5">
			      		<div class="card text-center">
			  				<img class="card-img-top" src="css\images\srh.png">
			  				<div class="card-body">
				  				<h5 class="card-title">Sunrisers</br>Hyderabad</h5>
				  			</div>
			  			</div>
			  		</a>
		      	</div>
		      	<div class="col-md-2">
		      		<a href="teaminfo.php?id=6">
			      		<div class="card text-center">
			  				<img class="card-img-top" src="css\images\rr.png">
			  				<div class="card-body">
				  				<h5 class="card-title">Rajasthan</br>Royals</h5>
				  			</div>
			  			</div>
			  		</a>
		      	</div>
		      	<div class="col-md-3">
		      		<a href="teaminfo.php?id=7">
			      		<div class="card text-center">
			  				<img class="card-img-top " src="css\images\kxip.png">
			  				<div class="card-body">
				  				<h5 class="card-title">Kings XI</br>Punjab</h5>
				  			</div>
			  			</div>
			  		</a>
		      	</div>
		      	<div class="col-md-2">
		      		<a href="teaminfo.php?id=8">
			      		<div class="card text-center">
			  				<img class="card-img-top " src="css\images\dd.png">
			  				<div class="card-body">
				  				<h5 class="card-title">Delhi</br>Daredevils</h5>
>>>>>>> 32730874b184a314c4e53e8a7ceea166050de665
				  			</div>
				  		</a>
			      	</div>
			    </div>
			</div>
		</div>
	</div>
</body>
</html>

<?php
			if(isset($_GET['id'])) {
				$id=$_GET['id'];
				echo $id;
			}
		?>