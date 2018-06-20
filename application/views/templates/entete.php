<html>
	<head>
		<title>Celar Sport</title>
		<meta charset="utf-8">
      	<meta name="viewport" content="width=device-width, initial-scale=1">
      	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>        
	</head>
  	<body>
	  	<div class="container">	  
			<br><div class="card bg-success mb-3 text-center">
					<h2 class="card-title">Gestion Adherents Celar Sport</h2>			
			</div>
		</div>	
		<div class="row">
			<div class="col-sm-2">
				<div class="container">
					<div class="card bg-secondary">
							<div class="card-header text-center">
								<h6 class="card-title">Mon espace adherent</h6>
							</div>
							<div class="card-body">
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
					</div><br>
					<div class="card bg-info">
						<div class="card-header text-center">
							<h6 class="card-title">Adhérents</h6>		
						</div>
						<div class="card-body">
							<a class="card-link text-dark" href="<?php echo site_url('responsable/afficherLesAdherents')?>">Les adherents</a>
							<a class="card-link text-dark" href="<?php echo site_url('responsable/ajouterUnAdherent')?>">Nouvelle Adherent</a>		
						</div>
					</div><br>
					<div class="card bg-light">
						<div class="card-header text-center">
							<h6 class="card-title">Section</h6>		
						</div>
						<div class="card-body text-center">
							<p class="card-text">Some text inside the fifth card</p>
						</div>
					</div><br>
				</div>
			</div>
							


			