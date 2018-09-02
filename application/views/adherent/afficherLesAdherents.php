<div class="container">
    <span> <?php 
        echo '<div class="form-row">';
            echo '<div class="col">';
                echo form_open("/responsable/listerAdherentRecherche",array('class'=>'form-inline my-2 my-lg-0')); 
                echo form_input(array('name'=>'txtRecherche','class'=>'form-control','type'=>'search','placeholder'=>'Search','required'=>'required'));
                echo form_dropdown('txtColonne', array('NUMEROADHERENT'=> 'numero adherent','NOM'=> 'nom adherent','PRENOM'=> "prenom adherent",'DATENAISSANCE'=> 'année de naissance','NUMEROAUTORISATION'=> "numero d'autorisation"),'1','class="form-control" required="required"');
                echo form_submit(array('name'=>'btnRecherche','class'=>'btn btn-success','type'=>'submit','value'=>'Rechercher'));
                echo form_close();?>
            </div>
            <div class="col">
                <?php echo form_open("/responsable/afficherLesAdherents",array('class'=>'form-inline my-2 my-lg-0'));
                echo form_submit(array('name'=>'btnRecherche','class'=>'btn btn-success','type'=>'submit','value'=>'Sans filtre'));
                echo form_close();?></br>
            </div>
        </div>
    </span>      
    <table class="table table-striped table-bordered text-center">
        <thead class="thead-light">
            <tr>
                <th scope="col">n° adherent</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">n° license</th>
                <th scope="col">date envoi féde.</th>
                <th scope="col">telephone</th>
                <th scope="col">email pro./ext</th>
                <th scope="col">commentaire</th>

                <!--<th scope="col">n° adherent qui a saisi</th>            
                <th scope="col">n° license</th>
                <th scope="col">édition carte.</th>
                <th scope="col">date naissance</th>
                <th scope="col">genre</th>
                <th scope="col">code postal</th>
                <th scope="col">nom d'usage</th>
                <th scope="col">code autorisation</th>
                <th scope="col">numero origine</th>
                <th scope="col">numero entité</th>
                <th scope="col">vile naissance</th>
                <th scope="col">departement naissance</th>
                <th scope="col">email ext.</th>
                <th scope="col">numero parrain</th>
                <th scope="col">mot de passe</th>-->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lesAdherents as $unAdherent):
                echo '<tr>
                <td>'.anchor('responsable/afficherUnAdherent/'.$unAdherent['NUMEROADHERENT'],$unAdherent['NUMEROADHERENT']).'</td>
                <td>'.$unAdherent['NOM'].'</td>
                    <td>'.$unAdherent['PRENOM'].'</td>
                    <td>'.$unAdherent['NUMEROLICENSE'].'</td>
                    <td>'.$unAdherent['DATEENVOIFEDERATION'].'</td>
                    <td>'.$unAdherent['TELEPHONE'].'</td>
                    <td>'.$unAdherent['EMAILPROFESSIONNEL'].'<br>'.$unAdherent['EMAILEXTERIEUR'].'</td>
                    <td>'.$unAdherent['COMMENTAIRE'].'</td>'.
                    /*'<td>'.$unAdherent['NUMEROADHERENT_SAISIR'].'</td>                         
                    <td>'.$unAdherent['DATEEDITIONCARTE'].'</td>
                    <td>'.$unAdherent['DATENAISSANCE'].'</td>
                    <td>'.$unAdherent['GENRE'].'</td>
                    <td>'.$unAdherent['CODEPOSTAL'].'</td>
                    <td>'.$unAdherent['NOMDUSAGE'].'</td>
                    <td>'.$unAdherent['NUMEROAUTORISATION'].'</td>
                    <td>'.$unAdherent['NUMEROORIGINE'].'</td>
                    <td>'.$unAdherent['NUMEROENTITE'].'</td>
                    <td>'.$unAdherent['VILLENAISSANCE'].'</td>
                    <td>'.$unAdherent['DEPARTEMENTNAISSANCE'].'</td>
                    <td>'.$unAdherent['NUMEROADHERENT_PARRAINER'].'</td>
                    <td>'.$unAdherent['MOTDEPASSE'].'</td>*/
                '</tr>';
            endforeach ?>
        </tbody>
    </table>
</div>

