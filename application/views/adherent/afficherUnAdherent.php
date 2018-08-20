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
            </div><br>
            <div class="row">
                <br><div class="col">
                    Numéro license:     
                    <?php echo $unAdherent->NUMEROLICENSE;?>
                </div>
                <div class="col">
                    Envoie féderation:     
                    <?php echo $unAdherent->DATEENVOIFEDERATION;?>
                </div>
                <div class="col">
                    Telephone: 
                    <?php echo $unAdherent->TELEPHONE;?>
                </div>
            </div><br>
            <div class="row">
                <br><div class="col">
                    Email professionnel:     
                    <?php echo $unAdherent->EMAILPROFESSIONNEL;?>
                </div>
                <div class="col">
                    Email exterieur:     
                    <?php echo $unAdherent->EMAILEXTERIEUR;?>
                </div>
                <div class="col">
                    Date de naissance: 
                    <?php echo $unAdherent->DATENAISSANCE;?>
                </div>
            </div><br>
            <div class="row">
                <br><div class="col">
                    Autorisation:     
                    <?php echo $unAdherent->NUMEROAUTORISATION;?>
                </div>
                <div class="col">
                    Genre:     
                    <?php echo $unAdherent->GENRE;?>
                </div>
                <div class="col">
                    Origine: 
                    <?php echo $unAdherent->NUMEROORIGINE;?>
                </div>
            </div>
        </div>
    </div><br>
</div>