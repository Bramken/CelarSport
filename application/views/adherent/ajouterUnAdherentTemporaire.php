<div class="container">
    <div class="card bg-light">
        <div class="card-header text-center">
            <h6 class="card-title"><?php echo $TitreDeLaPage ;?></h6>		
        </div>
        <div class="card-body text-center">
            <?php echo form_open('responsable/ajouterUnAdherentTemporaire',array('class' => 'form-control-sm')) ?>

                <label for="txtPrenomTemp">Prénom</label>
                <input class= "form-control" required="required" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" name="txtPrenomTemp" value="<?php echo set_value('txtPrenomTemp'); ?>" /><br/>

                <label for="txtNomTemp">Nom<span class="text-danger">*</span></label>
                <input class= "form-control" required="required" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" name="txtNomTemp" value="<?php echo set_value('txtNomTemp'); ?>" /><br/>

                <label for="txtDateNaissanceTemp">Date de naissance</label>
                <input class= "form-control" required="required" type="date" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ- ]+" type="input" name="txtDateNaissanceTemp" value="<?php echo set_value('txtDateNaissanceTemp'); ?>" /><br/>

                <label for="txtVilleNaissanceTemp">Ville de naissance<span class="text-danger">*</span></label>
                <input class= "form-control" required="required" placeholder=""  name="txtVilleNaissanceTemp" value="<?php echo set_value('txtVilleNaissanceTemp'); ?>" /><br/>

                <label for="txtDatePaiementEvenement">Date paiement evenement</label>
                <input class= "form-control" type="date" placeholder=""  name="txtDatePaiementEvenement" value="<?php echo set_value('txtDatePaiementEvenement'); ?>" /><br/>

                <label for="txtOrigineTemp">Origine</label>
                <input class= "form-control"  list="origines" placeholder=""  name="txtOrigineTemp" value="<?php echo set_value('txtOrigineTemp'); ?>" /><br/>

                <datalist id="origines">
                    <?php foreach ($Origines as $UneOrigine):
                        echo '<option value="'.$UneOrigine['NUMEROORIGINE'].'">'.$UneOrigine['LIBELLEORIGINE'].'</option>';
                    endforeach;?> 
                </datalist>

                <p class="text-danger">* champs obligatoire</p>

                <input class="btn btn-success" required="required" placeholder="nom@domaine.tld" type="submit" name="BoutonAjouter" value="Valider" />

            </form>
        </div>
    </div><br>
</div>
    