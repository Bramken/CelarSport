<div class="container-fluid">
    <table class="table table-striped table-bordered text-center">
        <thead class="thead-light">
            <tr>
                <th scope="col">n° adherent</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">nom d'usage</th>
                <th scope="col">date naissance</th>
                <th scope="col">vile naissance</th>
                <th scope="col">origine</th>
                <th scope="col">date de paiement</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lesAdherentsTemporaire as $unAdherentTemporaire):
                echo '<tr>
                    <td>'.anchor('responsable/afficherUnAdherentTemporaire/'.$unAdherentTemporaire['NUMEROADHERENTTEMP'],$unAdherentTemporaire['NUMEROADHERENTTEMP']).'</td>
                    <td>'.$unAdherentTemporaire['NOMTEMP'].'</td>
                    <td>'.$unAdherentTemporaire['PRENOMTEMP'].'</td>
                    <td>'.$unAdherentTemporaire['NOMDUSAGETEMP'].'</td>
                    <td>'.$unAdherentTemporaire['DATENAISSANCETEMP'].'</td>
                    <td>'.$unAdherentTemporaire['LIEUNAISSANCETEMP'].'</td>
                    <td>'.$unAdherentTemporaire['NUMEROORIGINE'].'</td>
                    <td>'.$unAdherentTemporaire['DATEPAIEMENTEVENEMENT'].'</td>
                </tr>';
            endforeach ?>
        </tbody>
    </table>
</div><br>
      


