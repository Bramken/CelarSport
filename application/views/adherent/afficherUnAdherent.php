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
            </div><br>
            <div class="row">
                <div class="col">
                    Prenom: 
                    <?php echo $unAdherent->PRENOM;?>
                </div>
                <div class="col">
                    Genre:     
                    <?php echo $unAdherent->GENRE;?>
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    Date de naissance: 
                    <?php echo $unAdherent->DATENAISSANCE;?>
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
            </div><br> 
        </div><br>
    </div></br>
    <div class="card bg-light">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h6 class="card-title text-center">Inf. technique</h6>
                </div>
            </div>      
        </div>
        <div class="card-body text-center">
            <div class="row">
                    <br><div class="col">
                        Statut:     
                        <?php echo $unAdherent->LIBELLESTATUT;?>
                    </div>
                    <div class="col">
                        Origine: 
                        <?php if (isset($Origine)){echo $Origine->LIBELLEORIGINE.', '.$Origine->CODEORIGINE.' ('.$Origine->TYPEORIGINE.')';}?>
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
                </div><br>
            </div>
        </div><br>
    </div><br>
</div><br>
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <h6 class="card-title">Certificat</h6>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered text-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">n° certificat</th>
                        <th scope="col">date certificat</th>
                        <th scope="col">date attestation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Certificats as $unCertificat):
                        echo '<tr>
                            <td>'.$unCertificat['NUMEROCERTIFICAT'].'</td>
                            <td>'.$unCertificat['DATECERTIFICAT'].'</td>
                            <td>'.$unCertificat['DATEATTESTATION'].'</td>
                        </tr>';
                    endforeach ?>
                </tbody>
            </table>
        </div>
    </div> 
</div><br>