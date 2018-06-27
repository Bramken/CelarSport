<div class="container">
    <div class="card bg-light">
        <div class="card-header text-center">
            <h6 class="card-title"><?php echo $TitreDeLaPage ;?></h6>		
        </div>
        <div class="card-body text-center">
            <?php echo form_open('responsable/ajouterUneSection',array('class' => 'form-control-sm')) ?>

                <label for="txtCategorie">Categorie</label>
                <input class="form-control" list="categories" type="text" name="txtCategorie" value="<?php echo set_value('txtCategorie'); ?>"><br/>

                <label for="txtSection">Libelle section</label>
                <input class="form-control" type="text" name="txtSection" value="<?php echo set_value('txtSection'); ?>"><br/>
                
                <datalist id="adherents">
                    <?php foreach ($LesAdherents as $UnAdherent):
                        echo '<option value="'.$UnAdherent['NUMEROADHERENT'].'">'.$UnAdherent['NOMADHERENT']." ".$UnAdherent['PRENOMADHERENT'].'</option>';
                    endforeach;?> 
                </datalist>

                <datalist id="categories">
                    <?php foreach ($LesCategories as $UneCategorie):
                        echo '<option value="'.$UneCategorie['NUMEROCATEGORIE'].'">'.$UneCategorie['LIBELLECATEGORIE'].'</option>';
                    endforeach;?> 
                </datalist>

                <input class="btn btn-primary" required="required" type="submit" name="BoutonAjouter" value="Valider" />

            </form>
        </div>
    </div><br>
</div>