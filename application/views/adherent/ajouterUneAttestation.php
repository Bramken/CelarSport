<div class="container">
    <div class="card bg-light">
        <div class="card-header text-center">
            <h6 class="card-title"><?php echo $TitreDeLaPage ;?></h6>		
        </div>
        <div class="card-body text-center">
            <?php echo form_open('administrateur/ajouterUneSection',array('class' => 'form-control-sm')) ?>

                <label for="txtAdherent">Adhérent</label>
                <input class="form-control" list="adherents" type="text" name="txtAdherent" value="<?php echo set_value('txtAdherent') readonly; ?>"><br/>

                <label for="txtCertificat">Certificat</label>
                <input class="form-control" type="text" name="txtCertificat" value="<?php echo set_value('txtCertificat') readonly; ?>"><br/>

                <label for="txtCodeFederation">Date attestation</label>
                <input class= "form-control" list="codesfederation" name="txtCodeFederation" value="<?php echo set_value('txtCodeFederation'); ?>" /><br/>

                
                <datalist id="adherents">
                    <?php foreach ($LesAdherents as $UnAdherent):
                        echo '<option value="'.$UnAdherent['NUMEROADHERENT'].'">'.$UnAdherent['NOM']." ".$UnAdherent['PRENOM'].'</option>';
                    endforeach;?> 
                </datalist>

                <datalist id="certificats">
                    <?php foreach ($LesCertificats as $UnCertificat):
                        echo '<option value="'.$UneCategorie['NUMEROCATEGORIE'].'">'.$UneCategorie['LIBELLECATEGORIE'].'</option>';
                    endforeach;?> 
                </datalist>

                <input class="btn btn-success" required="required" type="submit" name="BoutonAjouter" value="Valider" />

            </form>
        </div>
    </div><br>
</div>