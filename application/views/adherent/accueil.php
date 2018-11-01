<div class="container">
			<div class="card bg-primary">
					<div class="card-header text-center">
						<div class="row">
                			<div class="col">
                    			<!--<a href="<?php echo site_url('responsable/modifierAdherent/'.$unAdherent->NUMEROADHERENT)?>" class="btn btn-secondary   ">Modifier</a>	-->
               				</div>
                			<div class="col">
                    			<h6 class="card-title text-center"><?php echo $TitreDeLaPage ;?></h6>		
                			</div>
                			<div class="col">
								<a href="<?php echo site_url('visiteur/seDeConnecter'); ?>" class="btn btn-danger">Se deconnecter</a>
               				</div>
            			</div>    
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col"
								<p class="card-text">Numero d'adherent : <?php echo $unAdherent->NUMEROADHERENT;?></p>
								<p class="card-text">Nom : <?php echo $unAdherent->NOM;?></p>
								<p class="card-text">Prenom : <?php echo $unAdherent->PRENOM;?></p>
								<a href="<?php echo site_url('responsable/modifierAdherent/'.$unAdherent->NUMEROADHERENT)?>" class="btn btn-secondary">Modifier</a>
							</div>
							<div class="col">
								<p class="card-text">Statut : <?php echo $unAdherent->LIBELLESTATUT;?></p>
								<p class="card-text">Email : <?php echo $unAdherent->EMAILEXTERIEUR;?></p>
								<p class="card-text">Carte : <?php echo $unAdherent->DATEEDITIONCARTE;?></p>
							</div>
						</div>					
					</div>
			</div><br>
			<div class="card bg-primary">
				<div class="card-header text-center">
					<h6 class="card-title">Adhérents</h6>		
				</div>
				<div class="card-body">
                    <ul>
                        <li><a class="card-link text-dark" href="<?php echo site_url('responsable/afficherLesAdherents')?>">Les adherents</a></li>
                        <li><a class="card-link text-dark" href="<?php echo site_url('responsable/ajouterUnAdherent')?>">Nouvel adherent</a></li>
                    </ul>
				</div>
			</div><br>
			<div class="card bg-primary">
				<div class="card-header text-center">
					<h6 class="card-title">Certificat, attestation</h6>		
				</div>
				<div class="card-body">
                    <ul>
                        <li><a class="card-link text-dark" href="<?php echo site_url('responsable/afficherEtatCertificat')?>">Etat certificat(s)</a></li>
						<li><a class="card-link text-dark" href="<?php echo site_url('responsable/ajouterUnCertificat')?>">Nouveau certificat</a></li>
						<li><a class="card-link text-dark" href="<?php echo site_url('responsable/ajouterUneAttestation')?>">Nouvel attestation</a></li>
                    </ul>
				</div>
			</div><br>
			<div class="card bg-primary">
				<div class="card-header text-center">
					<h6 class="card-title">Section</h6>		
				</div>
				<div class="card-body">
                    <ul>
                        <li><a class="card-link text-dark" href="<?php echo site_url('responsable/afficherLesSections')?>">Les sections</a></li>
                        <li><a class="card-link text-dark" href="<?php echo site_url('administrateur/ajouterUneSection')?>">Nouvel section</a></li>
                    </ul>
				</div>
            </div><br>
            <div class="card bg-primary">
				<div class="card-header text-center">
					<h6 class="card-title">Adhérent temporaire</h6>		
				</div>
				<div class="card-body">
                    <ul>
                        <li><a class="card-link text-dark" href="<?php echo site_url('responsable/afficherLesAdherentsTemporaire')?>">Afficher les adhérent temporaire</a></li>
                        <li><a class="card-link text-dark" href="<?php echo site_url('responsable/ajouterUnAdherentTemporaire')?>">Nouvel adhérent temporaire</a></li>
                    </ul>
				</div>
			</div><br>
		</div>