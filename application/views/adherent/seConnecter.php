<div class="col-sm-10">
    <div class="container">
        <div class="card bg-light">
            <div class="card-header text-center">
                <h6 class="card-title">Se Connecter</h6>		
            </div>
            <div class="card-body text-center">
                <?php echo form_open('responsable/seconnecter');

                    echo form_label('N°adherent','lblNumeroAdherent'); // creation d'un label devant la zone de saisie
                    echo form_input(array('type'  => 'number','name'  => 'txtNumeroAdherent','title' => 'Entrez votre numero d\'adhérent','class' => 'form-control','required'=>'required'));

                    echo form_label('Mot de passe','lblMotDePasse');
                    echo form_password(array('type'  => 'pwd','name'  => 'txtMotDePasse','title' => 'Entrez votre mot de passe','class' => 'form-control','required'=>'required','placeholder'=>'Mot de passe'));
                    echo '</br>';
                    echo form_submit(array('type'  => 'submit','name'=>'btnConnecter','value'  => 'Se connecter','title' => 'Cliquer','class' => 'btn btn-primary'));

                    echo form_close();
                    echo '<p>'.'Vous étes responsable, mais vous n\'avez pas de mot de passe ? Rendez-vous au Celar Sports'.'</p>';
                ?>
            </div>
        </div>
    </div>
</div>
    