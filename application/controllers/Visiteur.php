<?php
class Visiteur extends CI_Controller {

        public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('assets'); // helper 'assets' ajouté a Application
        $this->load->library("pagination");
        $this->load->model('Adherent'); // chargement modèle, obligatoire
        $this->load->model('Categorie'); 
        $this->load->model('Section');
        $this->load->model('Autorisation');
        $this->load->model('ClubOrigine');
        $this->load->model('Origine');
        $this->load->model('Entite');   
        $this->load->view('templates/entete');

    } // __construct

    public function seConnecter()
    {
        $this->load->helper('form');           
        $DonneesInjectees['TitreDeLaPage'] = 'Se connecter';    
            $Adherent = array( // NUMEROADHERENT, MOTDEPASSE : champs de la table client   
            'NUMEROADHERENT' => $this->input->post('txtNumeroAdherent'),  
            'MOTDEPASSE' => $this->input->post('txtMotDePasse'),   
            ); // on récupère les données du formulaire de connexion   
    
            // on va chercher le responsable correspondant au numero d'adherent et mot de passe saisis   
            $AdherentRetourne = $this->Adherent->retournerResponsable($Adherent);   
            if (!($AdherentRetourne == null))   
            {    // on a trouvé, le n° d'adherent et n° d'autorisation (droit) sont stockés en session
                if($AdherentRetourne->NUMEROAUTORISATION <2 or $AdherentRetourne->NUMEROAUTORISATION >8 && $AdherentRetourne->NUMEROAUTORISATION !=5)
                {
                    
                    $this->load->view('adherent/autorisation');
                }
                else
                {
                    $this->load->library('session');   
                    $this->session->numeroAdherent = $AdherentRetourne->NUMEROADHERENT;   
                    $this->session->autorisation = $AdherentRetourne->NUMEROAUTORISATION;   
                    $DonneesInjectees['unAdherent'] = $this->Adherent->retournerAdherent($this->session->numeroAdherent); 
                    $this->load->view('adherent/connexionReussie', $DonneesInjectees);   
                }  
                $this->load->view('templates/piedDePage');   
            }   
            else   
            {    // client non trouvé on renvoie le formulaire de connexion   
                $this->load->view('adherent/seConnecter', $DonneesInjectees);   
                $this->load->view('templates/piedDePage');   
            }     
    }

    public function afficherAccueil()
    {
        $this->load->library('session');
        if ($this->session->autorisation==1 or $this->session->autorisation==5 or $this->session->autorisation==9 or !isset($this->session->autorisation)) // 0 : statut visiteur
        {
            redirect('/visiteur/seConnecter');
        }
        $DonneesInjectees['unAdherent'] = $this->Adherent->retournerAdherent($this->session->numeroAdherent);
        $DonneesInjectees['Autorisation'] = $this->Autorisation->retournerAutorisation($DonneesInjectees['unAdherent']->NUMEROAUTORISATION);
        $DonneesInjectees['TitreDeLaPage'] = "Votre n° d'adherent: ".$DonneesInjectees['unAdherent']->NUMEROADHERENT;
        $this->load->view('adherent/accueil', $DonneesInjectees);
        $this->load->view('templates/piedDePage');
    }

    public function seDeConnecter()
    {
        $this->session->sess_destroy();
        redirect('/visiteur/seConnecter');
    }
}