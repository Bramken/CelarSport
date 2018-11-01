<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <h6 class="card-title"><?php echo $TitreDeLaPage ?></h6>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered text-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">n° de certificat</th>
                        <th scope="col">n° d'adherent</th>
                        <th scope="col">remarque</th>
                        <th scope="col">date certificat</th>
                        <th scope="col">date attestation</th>
                        <th scope="col">Etat certificat </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $interval3Y=new DateInterval('P3Y');
                    $interval1Y=new DateInterval('P1Y');
                    foreach ($lesCertificats as $unCertificat):    
                        var_dump($interval3Y);
                        echo '<tr>
                                <td>'.anchor('responsable/afficherUnCertificat/'.$unCertificat['NUMEROCERTIFICAT'],$unCertificat['NUMEROCERTIFICAT']).'</td>                        
                                <td>'.$unCertificat['NUMEROADHERENT'].'</td>
                                <td>'.$unCertificat['REMARQUE'].'</td>
                                <td>'.$unCertificat['DATECERTIFICAT'].'</td>
                                <td>'.$unCertificat['DATEATTESTATION'].'</td>
                                <td>'.$unCertificat['LIBELLESPORT'].'</td>';    
                        if ((date('Y-m-d')-$unCertificat['DATECERTIFICAT']<$interval3Y))
                        {
                            if((date('Y-m-d')-$unCertificat['DATECERTIFICAT'])<$interval1Y)
                            { 
                             echo  '<td class="text-success">Certificat à jour</td>';
                            
                            }
                            elseif((date('Y-m-d')-$unCertificat['DATECERTIFICAT'])>=$interval1Y)
                            {
                                if((date('Y-m-d')-$unCertificat['DATEATTESTATION'])<$interval1Y)
                                {
                                    echo '<td class="text-success">Certificat à jour(Attestation < 1ans)</td>';
                                }
                                else
                                {
                                    echo '<td class="text-warning">Certificat pas à jour(Attestation à renouveler)</td>';
                                }
                                
                            }
                        }
                        else
                        {
                            echo '<td class="text-danger">Certificat périmé</td>';
                        }
                    endforeach ?>
                </tbody>
            </table>
        </div>
    </div> 
</div><br>