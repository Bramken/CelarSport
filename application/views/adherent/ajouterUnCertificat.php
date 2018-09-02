<div class="container">
    <div class="card bg-light">
        <div class="card-header text-center">
            <h6 class="card-title"><?php echo $TitreDeLaPage ;?></h6>		
        </div>
        <div class="card-body text-center">
            <?php echo form_open('responsable/ajouterUnAdherent',array('class' => 'form-control-sm')) ?>

                <label for="txtNumeroAdherent">Adhérent</label>
                <input class= "form-control" list="adherents" type="text" placeholder=""  name="txtNumeroAdherent" value="<?php echo set_value('txtNumeroAdherent'); ?>" /><br/>


                <label for="txtDateCertificat">Date certificat</label>
                <input class= "form-control" type="date" placeholder=""  name="txtDateCertificat" value="<?php echo set_value('txtDateCertificat'); ?>" /><br/>

                
                <label for="txtSports">Sport(s)</label>
                <input class= "form-control"  type="date" placeholder="Ctrl pour selection multiple"  name="txtSports" value="<?php echo set_value('txtSports'); ?>" /><br/>
                
                <label for="txtMarque">Marque :</label><br/>
                <?php $options = array(
                    '1'=> 'Jack Daniel',
                    '2'=> 'Lagavulin',
                    '3'=> 'Angostura',
                    '4'=> 'Courvoisier',
                    '5'=> 'Nikka',
                    );
                echo form_dropdown('txtMarque', $options,'1','class="form-control"');

                <datalist id="adherents">
                    <?php foreach ($LesAdherents as $UnAdherent):
                        echo '<option value="'.$UnAdherent['NUMEROADHERENT'].'">'.$UnAdherent['NOM']." ".$UnAdherent['PRENOM'].'</option>';
                    endforeach;?> 
                </datalist>

                <datalist id="sports">
                    <?php foreach ($LesSports as $UnSport):
                        echo '<option value="'.$UnSport['NUMEROADHERENT'].'">'.$UnSport['NOM']." ".$UnSport['PRENOM'].'</option>';
                    endforeach;?> 
                </datalist>