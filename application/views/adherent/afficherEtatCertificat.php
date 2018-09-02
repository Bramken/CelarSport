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
                        <th scope="col">sport</th>
                        <th scope="col">Etat certificat </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lesCertificats as $unCertificat):    
                    $interval=new DateInterval('P3Y') ;
                    var_dump($interval);           
                        if (isset($unCertificat['DATECERTIFICAT']) && date('Y-m-d')-$unCertificat['DATECERTIFICAT']<$interval))
                        {
                            if(($unCertificat['DATECERTIFICAT']-date('Y-m-d'))<$OneYear)
                            {
                                echo '<tr>
                                <td>'.anchor('responsable/afficherUnCertificat/'.$unCertificat['NUMEROCERTIFICAT'],$unCertificat['NUMEROCERTIFICAT']).'</td>                        
                                <td>'.$unCertificat['NUMEROADHERENT'].'</td>
                                <td>'.$unCertificat['REMARQUE'].'</td>
                                <td>'.$unCertificat['DATECERTIFICAT'].'</td>
                                <td>'.$unCertificat['DATEATTESTATION'].'</td>
                                <td>'.$unCertificat['LIBELLESPORT'].'</td>
                                <td>Certificat à jour</td>';
                            
                            }
                            if(($unCertificat['DATECERTIFICAT']-date('Y-m-d'))>=strtotime('1 year'))
                            {
                                if (($unCertificat['DATEATTESTATION']-date('Y-m-d'))>=strtotime('1 year'))
                                {
                                    echo '<tr>
                                    <td>'.anchor('responsable/afficherUnCertificat/'.$unCertificat['NUMEROCERTIFICAT'],$unCertificat['NUMEROCERTIFICAT']).'</td>                        
                                    <td>'.$unCertificat['NUMEROADHERENT'].'</td>
                                    <td>'.$unCertificat['REMARQUE'].'</td>
                                    <td>'.$unCertificat['DATECERTIFICAT'].'</td>
                                    <td>'.$unCertificat['DATEATTESTATION'].'</td>
                                    <td>'.$unCertificat['LIBELLESPORT'].'</td>
                                    <td>Attestation pas à jour</td>';
                                }
                                if (($unCertificat['DATEATTESTATION']-date('Y-m-d'))<strtotime('1 year'))
                                {
                                    echo '<tr>
                                    <td>'.anchor('responsable/afficherUnCertificat/'.$unCertificat['NUMEROCERTIFICAT'],$unCertificat['NUMEROCERTIFICAT']).'</td>                        
                                    <td>'.$unCertificat['NUMEROADHERENT'].'</td>
                                    <td>'.$unCertificat['REMARQUE'].'</td>
                                    <td>'.$unCertificat['DATECERTIFICAT'].'</td>
                                    <td>'.$unCertificat['DATEATTESTATION'].'</td>
                                    <td>'.$unCertificat['LIBELLESPORT'].'</td>
                                    <td>Attestation à jour</td>';
                                }
                            }
                        }
                    endforeach ?>
                </tbody>
            </table>
        </div>
    </div> 
</div><br>
                                <!--if(($unCertificat['DATECERTIFICAT']-date('Y-m-d'))>=strtotime('1 year') && ($unCertificat['DATECERTIFICAT']-date('Y-m-d'))<strtotime('2 year'))
                                {
                                    if($unCertificat['NUMEROATTESTATION']==1)
                                    {
                                        echo '<tr>
                                        <td>'.anchor('responsable/afficherUnCertificat/'.$unCertificat['NUMEROCERTIFICAT'],$unCertificat['NUMEROCERTIFICAT']).'</td>                        
                                        <td>'.$unCertificat['NUMEROADHERENT'].'</td>
                                        <td>'.$unCertificat['REMARQUE'].'</td>
                                        <td>'.$unCertificat['DATECERTIFICAT'].'</td>
                                        <td>'.$unCertificat['DATEATTESTATION'].'</td>
                                        <td>'.$unCertificat['LIBELLESPORT'].'</td>
                                        <td>Attestation à jour</td>';
                                    }

                                }
                                if(($unCertificat['DATECERTIFICAT']-date('Y-m-d'))>=strtotime('2 year') && ($unCertificat['DATECERTIFICAT']-date('Y-m-d'))<strtotime('3 year'))
                                {
                                    if($unCertificat['NUMEROATTESTATION']==2)
                                    {
                                        echo '<tr>
                                        <td>'.anchor('responsable/afficherUnCertificat/'.$unCertificat['NUMEROCERTIFICAT'],$unCertificat['NUMEROCERTIFICAT']).'</td>                        
                                        <td>'.$unCertificat['NUMEROADHERENT'].'</td>
                                        <td>'.$unCertificat['REMARQUE'].'</td>
                                        <td>'.$unCertificat['DATECERTIFICAT'].'</td>
                                        <td>'.$unCertificat['DATEATTESTATION'].'</td>
                                        <td>'.$unCertificat['LIBELLESPORT'].'</td>
                                        <td>Attestation à jour</td>';
                                    }

                                }
                            }   
                                if(isset($unCertificat['DATECERTIFICAT']))
                                {
                                    $dateCertificat=$unCertificat['DATECERTIFICAT'];
                                    $unAn = strtotime('1 year');
                                    $deuxAn=strtotime('2 year');
                                    $troisAn=strtotime('3 year');
                                    $dateActuelle=date('Y-m-d');
                                    $dateAttestation=$unCertificat['DATEATTESTATION'];
                                    if(($dateActuelle-$dateCertificat)<$unAn)
                                    {
                                        echo '<td>Certificat à jour</td>';
                                    }
                                    if(($dateActuelle-$dateCertificat)<$troisAn && ($dateActuelle-$dateCertificat)>$unAn)
                                    {
                                        if($unCertificat['NUMEROATTESTATION']==1)
                                        {
                                            if(($dateActuelle-$dateAttestation)>$unAn)
                                            {
                                                echo '<td>Attestation périmé</td>';
                                            }
                                            else
                                            {
                                                echo '<td>Attestation à jour</td>';
                                            }
                                        }
                                        if($unCertificat['NUMEROATTESTATION']==2)
                                        {
                                            if(($dateActuelle-$dateAttestation)>$An)
                                            {
                                                echo '<td>Attestation périmé</td>';
                                            }
                                            else
                                            {
                                                echo '<td>Attestation à jour</td>';
                                            }
                                        }
                                        if($unCertificat['NUMEROATTESTATION']==3)
                                        {
                                            
                                        }
                                    }
                                }
                                else
                                {
                                echo '<td>Pas de certificat</td>';
                                }
                                echo '</tr>';-->
  