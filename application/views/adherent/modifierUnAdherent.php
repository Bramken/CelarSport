<div class="container">
    <div class="card bg-light">
        <div class="card-header text-center">
            <h6 class="card-title"><?php echo $TitreDeLaPage ;?></h6>		
        </div>
        <div class="card-body text-center">
            <?php echo form_open('responsable/modifierAdherent/'.$unAdherent->NUMEROADHERENT,array('class' => 'form-control-sm')) ?>
                
                <div class="form-row">
                    <div class="col">
                        <label for="txtNom">Nom<span class="text-danger">*</span></label>
                        <input class= "form-control" required="required" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" name="txtNom" value="<?php echo $unAdherent->NOM; ?>" /><br/>
                    </div>
                    <div class="col">
                        <label for="txtNomDUsage">Nom d'usage</label>
                        <input class= "form-control" type="input" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" name="txtNomDUsage" value="<?php echo $unAdherent->NOMDUSAGE; ?>" /><br/>
                    </div>
                </div>

                <label for="txtPrenom">Prénom<span class="text-danger">*</span></label>
                <input class= "form-control" required="required" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" name="txtPrenom" value="<?php echo $unAdherent->PRENOM; ?>"></textarea><br/>

                <label for="txtDateNaissance">Date de naissance</label>
                <input class= "form-control" required="required" type="date" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ- ]+" type="input" name="txtDateNaissance" value="<?php echo $unAdherent->DATENAISSANCE; ?>" /><br/>

                <label for="txtGenre">Genre</label><br/>
                    <?php $options = array(
                        'M'=> 'Masculin',
                        'F'=> 'Feminin',
                        'A'=> 'Autre',
                );
                echo form_dropdown('txtGenre', $options,$unAdherent->GENRE,'class="form-control" required="required"');
                ?></br>

                <label for="txtCodePostal">CodePostal<span class="text-danger">*</span></label>
                <input class= "form-control" required="required"  title="Code postal pas valide !" placeholder="ex : 35230" pattern="^(([0-8][0-9])|(9[0-5])|(2[ab]))[0-9]{3}$" name="txtCodePostal" value="<?php echo $unAdherent->CODEPOSTAL; ?>" /><br/>

                <label for="txtStatut">Statut<span class="text-danger">*</span></label><br/>
                <input class="form-control" list="statuts" type="text" name="txtStatut" value="<?php echo $unAdherent->LIBELLESTATUT; ?>"><br/>


                <label for="txtOrigine">Origine</label>
                <input class= "form-control"  list="origines" placeholder=""  name="txtOrigine" value="<?php echo $unAdherent->NUMEROORIGINE; ?>" /><br/>

                <label for="txtEntite">Entité</label>
                <input class= "form-control" list="entites" type="text" placeholder=""  name="txtEntite" value="<?php echo $unAdherent->LIBELLEENTITE; ?>" /><br/>

                <label for="txtVilleNaissance">Ville de naissance<span class="text-danger">*</span></label>
                <input class= "form-control" placeholder=""  name="txtVilleNaissance" value="<?php echo $unAdherent->VILLENAISSANCE; ?>" /><br/>

                <label for="txtDepartementNaissance">Departement naissance</label>
                <input class= "form-control" placeholder=""  name="txtDepartementNaissance" value="<?php echo $unAdherent->DEPARTEMENTNAISSANCE; ?>" /><br/>

                <label for="txtTelephone">Telephone</label>
                <input class= "form-control" placeholder=""  name="txtTelephone" value="<?php echo $unAdherent->TELEPHONE; ?>" /><br/>
                <div class="form-row">
                    <div class="col">
                        <label for="txtEmailExterieur">Email exterieur</label>
                        <input class= "form-control" type="email" placeholder="nom@domaine.tld"  name="txtEmailExterieur" value="<?php echo $unAdherent->EMAILEXTERIEUR; ?>" />
                    </div>
                    <div class="col">
                        <label for="txtEmailProfessionnel">Email professionnel</label>
                        <input class= "form-control" type="email" placeholder="nom@domaine.tld"  name="txtEmailProfessionnel" value="<?php echo $unAdherent->EMAILPROFESSIONNEL; ?>" /><br/>
                    </div>
                </div>

                <label for="txtDateEnvoiFederation">Date d'envoi à la Federation</label>
                <input class= "form-control" type="date" placeholder=""  name="txtDateEnvoiFederation" value="<?php echo $unAdherent->DATEENVOIFEDERATION; ?>" /><br/>

                <label for="txtNumeroLicense">Numéro de license</label>
                <input class= "form-control" type="number" placeholder=""  name="txtNumeroLicense" value="<?php echo $unAdherent->NUMEROLICENSE; ?>" /><br/>

                <label for="txtDateEditionCarte">Date edition carte</label>
                <input class= "form-control" type="date" placeholder=""  name="txtDateEditionCarte" value="<?php echo $unAdherent->DATEEDITIONCARTE; ?>" /><br/>

                <label for="txtParrain">Adherent parrain</label>
                <input class="form-control" list="adherents" type="text" name="txtParrain" value="<?php echo $unAdherent->NUMEROADHERENT_PARRAINER; ?>"><br/>

                <label for="txtMotDePasse">Mot de passe</label>
                <input class= "form-control" type="password" name="txtMotDePasse" value="<?php echo $unAdherent->MOTDEPASSE; ?>" /><br/>

                <label for="txtParent">Parent</label>
                <input class="form-control" list="adherents" type="text" name="txtParent" value="<?php echo $unAdherent->NUMEROADHERENT_PARENT; ?>"><br/>

                <label for="txtCouple">Partenaire</label>
                <input class="form-control" list="adherents" type="text" name="txtCouple" value="<?php echo $unAdherent->NUMEROADHERENT_COUPLER; ?>"><br/>
                
                <label for="txtClubOrigine">Club d'origine</label>
                <input class= "form-control" list="clubsorigine" name="txtClubOrigine" value="<?php echo $unAdherent->LIBELLECLUB; ?>" /><br/>

                <datalist id="adherents">
                    <?php foreach ($LesAdherents as $UnAdherent):
                        echo '<option value="'.$UnAdherent['NUMEROADHERENT'].'">'.$UnAdherent['NOM']." ".$UnAdherent['PRENOM'].'</option>';
                    endforeach;?> 
                </datalist>

                <datalist id="statuts">
                    <?php foreach ($Statuts as $UnStatut):
                        echo '<option '; 
                        if($unAdherent->LIBELLESTATUT==$UnStatut['LIBELLESTATUT'])
                        {
                            echo ' selected="selected"';
                        } 
                        //echo 'value="'.$UnStatut['LIBELLESTATUT'].'">'.$UnStatut['LIBELLESTATUT'].'</option>';
                        echo 'value="'.$UnStatut['LIBELLESTATUT'].'"></option>';
                    endforeach;?> 
                </datalist>

                <datalist id="clubsorigine">
                    <?php foreach ($ClubsOrigine as $UnClubOrigine):
                        echo '<option value="'.$UnClubOrigine['LIBELLECLUB'].'">'.$UnClubOrigine['LIBELLECLUB'].'</option>';
                    endforeach;?> 
                </datalist>

                <datalist id="origines">
                    <?php foreach ($Origines as $UneOrigine):
                        echo '<option value="'.$UneOrigine['NUMEROORIGINE'].'">'.$UneOrigine['LIBELLEORIGINE'].'</option>';
                    endforeach;?> 
                </datalist>

                <datalist id="entites">
                    <?php foreach ($Entites as $UneEntite):
                        echo '<option value="'.$UneEntite['NUMEROENTITE'].'">'.$UneEntite['LIBELLEENTITE'].'</option>';
                    endforeach;?> 
                </datalist>

                <p class="text-danger">* champs obligatoire</p>

                <input class="btn btn-success" required="required" placeholder="nom@domaine.tld" type="submit" name="BoutonModifier" value="Modifier" />       
            </form>
        </div>
    </div><br>
</div>
    