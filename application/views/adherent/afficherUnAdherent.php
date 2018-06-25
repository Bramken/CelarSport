<div class="container">
<?php
echo '<h2>'.$unAdherent->NUMEROADHERENT.'</h2>';
echo $unAdherent->NOMADHERENT." ".$unAdherent->PRENOMADHERENT;

echo $unAdherent->CODEAUTORISATION;

echo form_open('responsable/modifierAdherent/');
echo form_submit(array('type'  => 'submit','name'=>'btnConnecter','value'  => 'Ajouter au panier','title' => 'Cliquer','class' => 'btn btn-primary'));
echo form_close();
echo '<p>'.anchor('responsable/afficherAccueil','Retour aux adherents').'</p>';
?>
</div>