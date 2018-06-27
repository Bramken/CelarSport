<div class="container">
<div class="card bg-primary">
<div class="card-header text-center">
						<h6 class="card-title"><?php echo $unAdherent->NUMEROADHERENT;?></h6>
					</div>
					<div class="card-body">
                        <p class="card-text">Nom : <?php echo $unAdherent->NOMADHERENT;?></p>
                        <p class="card-text">Prenom : <?php echo $unAdherent->PRENOMADHERENT;?></p>
                        <p class="card-text">Prenom : <?php echo $unAdherent->CODEAUTORISATION;?></p>
						<a href="#" class="btn btn-secondary">Modifier</a>
					</div>
<?php
echo form_open('responsable/modifierAdherent/');
echo form_submit(array('type'  => 'submit','name'=>'btnConnecter','value'  => 'Ajouter au panier','title' => 'Cliquer','class' => 'btn btn-primary'));
echo form_close();
echo '<p>'.anchor('responsable/afficherAccueil','Retour aux adherents').'</p>';
?>
</div>
</div>
</div></br>