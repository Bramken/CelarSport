        <div class="col-sm-10">
            <div class="container">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>  
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-md table-condensed">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">n° adherent</th>
                                    <th scope="col">date envoi féde.</th>
                                    <th scope="col">n° license</th>
                                    <th scope="col">édition carte.</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">Naissance</th>
                                    <th scope="col">Genre</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">autorisation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lesAdherents as $unAdherent):
                                    echo '<tr>
                                    <th >'.anchor('adherent/modifierUnAdherent/'.$unAdherent['NUMEROADHERENT'],$unAdherent['NUMEROADHERENT']).'</th>
                                    <th >'.$unAdherent['DATEENVOIFEDERATION'].'</th>
                                    <th >'.$unAdherent['NUMEROLICENSE'].'</th>
                                    <th >'.$unAdherent['DATEEDITIONCARTE'].'</th>
                                    <td>'.$unAdherent['PRENOMADHERENT'].'</td>
                                    <th >'.$unAdherent['DATENAISSANCE'].'</th>
                                    <th >'.$unAdherent['GENRE'].'</th>
                                    <td>'.$unAdherent['NOMADHERENT'].'</td>
                                    <td>'.$unAdherent['CODEAUTORISATION'].'</td>
                                    </tr>';
                                endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>
        </div>      
    </div>


