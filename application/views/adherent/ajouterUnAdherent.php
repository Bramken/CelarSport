<div class="container">
    <div class="card bg-light">
        <div class="card-header text-center">
            <h6 class="card-title"><?php echo $TitreDeLaPage ;?></h6>		
        </div>
        <div class="card-body text-center">
            <?php echo form_open('responsable/ajouterUnAdherent',array('class' => 'form-control-sm')) ?>

                <label for="txtParrain">Adherent parrain</label><br/>
                <?php echo form_dropdown('txtParrain',$LesAdherents,'1','class="form-control"'); ?><br/>

                
                <input class= "form-control" required="required" placeholder=""  name="txtParrain" value="<?php echo set_value('txtParrain'); ?>" /><br/>

                <label for="txtNumeroLicense">Numéro de license</label>
                <input class= "form-control" required="required" placeholder=""  name="txtNumeroLicense" value="<?php echo set_value('txtNumeroLicense'); ?>" /><br/>

                <label for="txtNumeroLicense">Numéro de license</label>
                <input class= "form-control" required="required" placeholder=""  name="txtNumeroLicense" value="<?php echo set_value('txtNumeroLicense'); ?>" /><br/>

                <label for="txtNumeroLicense">Numéro de license</label>
                <input class= "form-control" required="required" placeholder=""  name="txtNumeroLicense" value="<?php echo set_value('txtNumeroLicense'); ?>" /><br/>

                <label for="txtNumeroLicense">Numéro de license</label>
                <input class= "form-control" required="required" placeholder=""  name="txtNumeroLicense" value="<?php echo set_value('txtNumeroLicense'); ?>" /><br/>

                <label for="txtNumeroLicense">Numéro de license</label>
                <input class= "form-control" required="required" placeholder=""  name="txtNumeroLicense" value="<?php echo set_value('txtNumeroLicense'); ?>" /><br/>

                <label for="txtNom">Nom</label>
                <input class= "form-control" required="required" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" name="txtNom" value="<?php echo set_value('txtNom'); ?>" /><br/>

                <label for="txtPrenom">Prénom</label>
                <input class= "form-control" required="required" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" name="txtPrenom" value="<?php echo set_value('txtPrenom'); ?>"></textarea><br/>

                <label for="txtNomDUsage">Nom d'usage</label>
                <input class= "form-control" required="required" type="input" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" name="txtNomDUsage" value="<?php echo set_value('txtNomDUsage'); ?>" /><br/>

                <label for="txtDateNaissance">Date de naissance</label>
                <input class= "form-control" required="required" type="date" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ- ]+" type="input" name="txtDateNaissance" value="<?php echo set_value('txtDateNaissance'); ?>" /><br/>

                <label for="txtLieuNaissance">Lieu de naissance</label>
                <input class= "form-control" required="required" placeholder=""  name="txtLieuNaissance" value="<?php echo set_value('txtLieuNaissance'); ?>" /><br/>

                <label for="txtEmailExterieur">Email exterieur</label>
                <input class= "form-control" required="required" type="email" placeholder="nom@domaine.tld"  name="txtEmailExterieur" value="<?php echo set_value('txtEmailExterieur'); ?>" /><br/>

                <label for="txtEmailProfessionnel">Email professionnel</label>
                <input class= "form-control" required="required" type="email" placeholder="nom@domaine.tld"  name="txtEmailProfessionnel" value="<?php echo set_value('txtEmailProfessionnel'); ?>" /><br/>

                <label for="txtGenre">Email exterieur</label>
                <input class= "form-control" required="required" placeholder=""  name="txtGenre" value="<?php echo set_value('txtGenre'); ?>" /><br/>

                <label for="txtNumeroLicense">Numéro de license</label>
                <input class= "form-control" required="required" placeholder=""  name="txtNumeroLicense" value="<?php echo set_value('txtNumeroLicense'); ?>" /><br/>
                
                <label for="txtDateEditionCarte">Lieu de naissance</label>
                <input class= "form-control" required="required" placeholder=""  name="txtDateEditionCarte" value="<?php echo set_value('txtDateEditionCarte'); ?>" /><br/>

                <label for="txtMotDePasse">Mot de passe</label>
                <input class= "form-control" required="required" type="password" name="txtMotDePasse" value="<?php echo set_value('txtMotDePasse'); ?>" /><br/>

                <label for="txtDateEnvoiFederation">Date d'envoi à la Federation</label>
                <input class= "form-control" required="required" type="date" placeholder=""  name="txtDateEnvoiFederation" value="<?php echo set_value('txtDateEnvoiFederation'); ?>" /><br/>

                <label for="txtCodePostal">CodePostal</label>
                <input class= "form-control" required="required"  title="Code postal pas valide !" placeholder="ex : 35230" pattern="^(([0-8][0-9])|(9[0-5])|(2[ab]))[0-9]{3}$" name="txtCodePostal" value="<?php echo set_value('txtCodePostal'); ?>" /><br/>

                <input class="btn btn-primary" required="required" placeholder="nom@domaine.tld" type="submit" name="BoutonAjouter" value="Valider" />

<!--'CODEAUTORISATION'=> $this->input->post('txtCodeAutorisation'),
                'NUMEROADHERENT_PARRAINER'=> $this->input->post('txtParrain'),
                'NUMEROADHERENT_PARENT'=> $this->input->post('txtParent'),
                'NUMEROADHERENT_SAISIR'=> $this->input->post('txtSaisiePar'),
                'NUMEROSITUATION'=> $this->input->post('txtSituation'),
                'NUMEROENTITE'=> $this->input->post('txtEntite'),
                'NUMEROADHERENT_COUPLER'=> $this->input->post('txtCouple'),
                'NOMADHERENT'=> $this->input->post('txtNom'),
                'PRENOMADHERENT'=> $this->input->post('txtPrenom'),
                'NOMDUSAGE'=> $this->input->post('txtNomDUsage'),
                'DATENAISSANCE'=> $this->input->post('txtDateNaissance'),
                'LIEUNAISSANCE'=> $this->input->post('txtLieuNaissance'),
                'EMAILEXTERIEUR'=> $this->input->post('txtEmailExterieur'),
                'EMAILPROFESSIONNEL'=> $this->input->post('txtEmailProfessionnel'),
                'GENRE'=> $this->input->post('txtGenre'),
                'NUMEROLICENSE'=> $this->input->post('txtNumeroLicense'),
                'DATEEDITIONCARTE'=> $this->input->post('txtDateEditionCarte'),
                'MOTDEPASSE'=> $this->input->post('txtMotDePasse'),
                'DATEENVOIFEDERATION'=> $this->input->post('txtDateEnvoiFederation'),
                'CODEPOSTAL'=> $this->input->post('txtCodePostal'),-->
            </form>
        </div>
    </div><br>
</div>
    