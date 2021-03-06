<div class="container">
    <div class="card bg-light">
        <div class="card-header text-center">
            <h6 class="card-title"><?php echo $TitreDeLaPage ;?></h6>		
        </div>
        <div class="card-body text-center">
            <?php echo form_open('administrateur/ajouterUneSection',array('class' => 'form-control-sm')) ?>

                <datalist id="adherents">
                    <?php foreach ($LesAdherents as $UnAdherent):
                        echo '<option value="'.$UnAdherent['NUMEROADHERENT'].'">'.$UnAdherent['NOM']." ".$UnAdherent['PRENOM'].'</option>';
                    endforeach;?> 
                </datalist>

                <datalist id="categories">
                    <?php foreach ($LesCategories as $UneCategorie):
                        echo '<option value="'.$UneCategorie['NUMEROCATEGORIE'].'">'.$UneCategorie['LIBELLECATEGORIE'].'</option>';
                    endforeach;?> 
                </datalist>

                <datalist id="codesfederation">
                    <?php foreach ($LesCodesFederation as $UnCodeFederation):
                        echo '<option value="'.$UnCodeFederation['CODEFEDERATION'].'"></option>';
                    endforeach;?> 
                </datalist>

                <input class="btn btn-success" required="required" type="submit" name="BoutonAjouter" value="Valider" />

            </form>
        </div>
    </div><br>
</div>