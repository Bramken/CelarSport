<div class="container">
    <div class="card bg-light">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <a href="<?php echo site_url('responsable/modifierAdherent/'.$unAdherent->NUMEROADHERENT)?>" class="btn btn-secondary   ">Modifier</a>	
                </div>
                <div class="col">
                    <h6 class="card-title text-center"><?php echo $TitreDeLaPage ;?></h6>		
                </div>
                <div class="col">
                    <p class="text-center"><?php echo anchor('responsable/AfficherLesAdherents','Retour');?></p>
                </div>
            </div>    
            
        </div>
        <div class="card-body text-center">
           
            <div class="row">
                <br><div class="col">
                    Nom:     
                    <?php echo $unAdherent->NOM;?>
                </div>
                <div class="col">
                    Nom d'usage:     
                    <?php echo $unAdherent->NOMDUSAGE;?>
                </div>
                <div class="col">
                    Prenom: 
                    <?php echo $unAdherent->PRENOM;?>
                </div>
            </div>
        </div>
    </div><br>
</div>