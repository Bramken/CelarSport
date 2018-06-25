<div class="container">
    <div class="card bg-light">
        <div class="card-header text-center">
            <h6 class="card-title"><?php echo $TitreDeLaPage ;?></h6>		
        </div>
        <div class="card-body text-center">
            <?php echo form_open('responsable/ajouterUnAdherent',array('class' => 'form-control-sm')) ?>

                <label for="txtDateEnvoiFederation">Date d'envoi à la Federation</label>
                <input class= "form-control" type="date" placeholder=""  name="txtDateEnvoiFederation" value="<?php echo set_value('txtDateEnvoiFederation'); ?>" /><br/>

                <label for="txtNumeroLicense">Numéro de license</label>
                <input class= "form-control" type="text" placeholder=""  name="txtNumeroLicense" value="<?php echo set_value('txtNumeroLicense'); ?>" /><br/>

                <label for="txtDateEditionCarte">Lieu de naissance</label>
                <input class= "form-control" required="required" type="text" placeholder=""  name="txtDateEditionCarte" value="<?php echo set_value('txtDateEditionCarte'); ?>" /><br/>

                <label for="txtNom">Nom</label>
                <input class= "form-control" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" name="txtNom" value="<?php echo set_value('txtNom'); ?>" /><br/>

                <label for="txtPrenom">Prénom</label>
                <input class= "form-control" required="required" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" name="txtPrenom" value="<?php echo set_value('txtPrenom'); ?>"></textarea><br/>

                <label for="txtDateNaissance">Date de naissance</label>
                <input class= "form-control" required="required" type="date" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ- ]+" type="input" name="txtDateNaissance" value="<?php echo set_value('txtDateNaissance'); ?>" /><br/>

                <label for="txtGenre">Genre</label><br/>
                    <?php $options = array(
                        'M'=> 'Masculin',
                        'F'=> 'Feminin',
                        'A'=> 'Autre',
                );
                echo form_dropdown('txtGenre', $options,'1','class="form-control" required="required"');
                ?></br>

                <label for="txtCodePostal">CodePostal</label>
                <input class= "form-control" required="required"  title="Code postal pas valide !" placeholder="ex : 35230" pattern="^(([0-8][0-9])|(9[0-5])|(2[ab]))[0-9]{3}$" name="txtCodePostal" value="<?php echo set_value('txtCodePostal'); ?>" /><br/>

                <label for="txtNomDUsage">Nom d'usage</label>
                <input class= "form-control" type="input" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" name="txtNomDUsage" value="<?php echo set_value('txtNomDUsage'); ?>" /><br/>

                <label for="txtCodeAutorisation">Code d'autorisation</label>
                <input class= "form-control" required="required" placeholder=""  name="txtCodeAutorisation" value="<?php echo set_value('txtCodeAutorisation'); ?>" /><br/>

                <label for="txtOrigine">Origine</label>
                <input class= "form-control"  placeholder=""  name="txtOrigine" value="<?php echo set_value('txtOrigine'); ?>" /><br/>

                <label for="txtEntite">Entité</label>
                <input class= "form-control" placeholder=""  name="txtNumeroLicense" value="<?php echo set_value('txtNumeroLicense'); ?>" /><br/>

                <label for="txtVilleNaissance">Ville de naissance</label>
                <input class= "form-control" required="required" placeholder=""  name="txtVilleNaissance" value="<?php echo set_value('txtVilleNaissance'); ?>" /><br/>

                <label for="txtDepartementNaissance">Departement naissance</label>
                <input class= "form-control" placeholder=""  name="txtDepartementNaissance" value="<?php echo set_value('txtDepartementNaissance'); ?>" /><br/>

                <label for="txtTelephone">Telephone</label>
                <input class= "form-control" placeholder=""  name="txtTelephone" value="<?php echo set_value('txtTelephone'); ?>" /><br/>

                <label for="txtEmailExterieur">Email exterieur</label>
                <input class= "form-control" type="email" placeholder="nom@domaine.tld"  name="txtEmailExterieur" value="<?php echo set_value('txtEmailExterieur'); ?>" /><br/>

                <label for="txtEmailProfessionnel">Email professionnel</label>
                <input class= "form-control" type="email" placeholder="nom@domaine.tld"  name="txtEmailProfessionnel" value="<?php echo set_value('txtEmailProfessionnel'); ?>" /><br/>

                <label for="txtParrain">Adherent parrain</label>
                <input class="form-control" list="adherents" type="text" name="txtParrain" value="<?php echo set_value('txtParrain'); ?>"><br/>

                <label for="txtMotDePasse">Mot de passe</label>
                <input class= "form-control" type="password" name="txtMotDePasse" value="<?php echo set_value('txtMotDePasse'); ?>" /><br/>

                <label for="txtParent">Parent</label>
                <input class="form-control" list="adherents" type="text" name="txtParent" value="<?php echo set_value('txtParent'); ?>"><br/>

                <label for="txtCouple">Partenaire</label>
                <input class="form-control" list="adherents" type="text" name="txtCouple" value="<?php echo set_value('txtCouple'); ?>"><br/>
                
                <label for="txtClubOrigine">Club d'origine</label>
                <input class= "form-control" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" name="txtClubOrigine" value="<?php echo set_value('txtClubOrigine'); ?>" /><br/>

                <datalist id="adherents">
                    <?php foreach ($LesAdherents as $UnAdherent):
                        echo '<option value="'.$UnAdherent['NUMEROADHERENT'].'">'.$UnAdherent['NOMADHERENT']." ".$UnAdherent['PRENOMADHERENT'].'</option>';
                    endforeach;?> 
                </datalist>

                <input class="btn btn-primary" required="required" placeholder="nom@domaine.tld" type="submit" name="BoutonAjouter" value="Valider" />

            </form>
        </div>
    </div><br>
</div>
    