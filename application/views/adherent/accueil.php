<div class="container">
			<div class="card bg-primary">
					<div class="card-header text-center">
						<h6 class="card-title">Mon espace adherent</h6>
					</div>
					<div class="card-body">
						<p class="card-text">Numero d'adherent : <?php echo $unAdherent->NUMEROADHERENT;?></p>
                        <p class="card-text">Nom : <?php echo $unAdherent->NOMADHERENT;?></p>
                        <p class="card-text">Prenom : <?php echo $unAdherent->PRENOMADHERENT;?></p>
						<a href="<?php echo site_url('responsable/modifierAdherent')?>" class="btn btn-secondary">Modifier</a>
					</div>
			</div><br>
			<div class="card bg-orange">
				<div class="card-header text-center">
					<h6 class="card-title">Adhérents</h6>		
				</div>
				<div class="card-body">
                    <ul>
                        <li><a class="card-link text-dark" href="<?php echo site_url('responsable/afficherLesAdherents')?>">Les adherents</a></li>
                        <li><a class="card-link text-dark" href="<?php echo site_url('responsable/ajouterUnAdherent')?>">Nouvel Adherent</a></li>
                    </ul>
				</div>
			</div><br>
			<div class="card bg-yellow">
				<div class="card-header text-center">
					<h6 class="card-title">Section</h6>		
				</div>
				<div class="card-body">
                    <ul>
                        <li><a class="card-link text-dark" href="<?php echo site_url('responsable/afficherLesAdherents')?>">Les sections</a></li>
                        <li><a class="card-link text-dark" href="<?php echo site_url('responsable/ajouterUneSection')?>">Nouvelle section</a></li>
                    </ul>
				</div>
            </div><br>
            <div class="card bg-maroon">
				<div class="card-header text-center">
					<h6 class="card-title">Autre</h6>		
				</div>
				<div class="card-body">
                    <ul>
                        <li><a class="card-link text-dark" href="<?php echo site_url('responsable/afficherLesAdherents')?>">Situations</a></li>
                        <li><a class="card-link text-dark" href="<?php echo site_url('responsable/ajouterUnAdherent')?>">Evenements</a></li>
                    </ul>
				</div>
			</div><br>
		</div>