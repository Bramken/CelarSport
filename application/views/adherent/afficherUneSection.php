<div class="container">
    <div class="card bg-light">
        <div class="card-header">
            <div class="row">
                <div class="col">
                   <a href="<?php echo site_url('responsable/modifierUneSection/'.$UneSection->NUMEROSECTION)?>" class="btn btn-secondary">Modifier</a>	
                </div>
                <div class="col">
                    <h6 class="card-title text-center"><?php echo $TitreDeLaPage ;?></h6>		
                </div>
                <div class="col">
                    <p class="text-center"><?php echo anchor('responsable/afficherLesSections','Retour');?></p>
                </div>
            </div>    
            
        </div>
        <div class="card-body text-center">
           
            <div class="row">
                <br>
                <div class="col">
                    Code federation:     
                    <?php echo $UneSection->CODEFEDERATION;?>
                </div>
        </div>
    </div>
</div><br>
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <h6 class="card-title"><?php echo "Gérants de la section ";  ?></h6>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered text-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">n° adhérent</th>
                        <th scope="col">nom</th>
                        <th scope="col">prenom</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($GerantsSection as $unGerant):
                        echo '<tr>
                            <td>'.anchor('responsable/afficherUnAdherent/'.$unGerant['NUMEROADHERENT'],$unGerant['NUMEROADHERENT']).'</td>                       
                            <td>'.$unGerant['NOM'].'</td>
                            <td>'.$unGerant['PRENOM'].'</td>
                        </tr>';
                    endforeach ?>
                </tbody>
            </table>
        </div>
    </div> 
</div><br>
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <h6 class="card-title"><?php echo "Adherent de la section ";  ?></h6>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered text-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">n° adhérent</th>
                        <th scope="col">nom</th>
                        <th scope="col">prenom</th>
                        <th scope="col">date naissance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($AdherentsSection as $unAdherent):
                        echo '<tr>
                            <td>'.anchor('responsable/afficherUnAdherent/'.$unAdherent['NUMEROADHERENT'],$unAdherent['NUMEROADHERENT']).'</td>                       
                            <td>'.$unAdherent['NOM'].'</td>
                            <td>'.$unAdherent['PRENOM'].'</td>
                            <td>'.$unAdherent['DATENAISSANCE'].'</td>
                        </tr>';
                    endforeach ?>
                </tbody>
            </table>
        </div>
    </div> 
</div><br>
      