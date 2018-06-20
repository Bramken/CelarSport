<div class="container">
			<div class="card bg-primary">
					<div class="card-header text-center">
						<h6 class="card-title">Mon espace adherent</h6>
					</div>
					<div class="card-body">
						<p class="card-text">Numero d'adherent : <?php echo $unAdherent->NUMEROADHERENT;?></p>
                        <p class="card-text">Nom : <?php echo $unAdherent->NOMADHERENT;?></p>
                        <p class="card-text">Prenom : <?php echo $unAdherent->PRENOMADHERENT;?></p>
						<a href="#" class="btn btn-secondary">Modifier</a>
					</div>
			</div><br>
			<div class="card bg-orange">
				<div class="card-header text-center">
					<h6 class="card-title">Adhérents</h6>		
				</div>
				<div class="card-body">
                    <ul>
                        <li><a class="card-link text-dark" href="<?php echo site_url('responsable/afficherLesAdherents')?>">Les adherents</a></li>
                        <li><a class="card-link text-dark" href="<?php echo site_url('responsable/ajouterUnAdherent')?>">Nouvelle Adherent</a></li>
                    </ul>
				</div>
			</div><br>
			<div class="card bg-primary">
				<div class="card-header text-center">
					<h6 class="card-title">Section</h6>		
				</div>
				<div class="card-body text-center">
                    <ul>
                        <li><a class="card-link text-dark" href="<?php echo site_url('responsable/afficherLesAdherents')?>">Les sections</a></li>
                        <li><a class="card-link text-dark" href="<?php echo site_url('responsable/ajouterUnAdherent')?>">Nouvelle section</a></li>
                    </ul>
				</div>
			</div><br>
		</div>