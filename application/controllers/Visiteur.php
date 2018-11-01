<?php
class Visiteur extends CI_Controller {

        public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('assets'); // helper 'assets' ajouté a Application
        $this->load->library("pagination");
        $this->load->model('Adherent'); // chargement modèle, obligatoire
        $this->load->model('Section');
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
            $AdherentRetourne = $this->Adherent->retournerAdherentConnection($Adherent);  
            if (!($AdherentRetourne == null))   
            {    // on a trouvé, le n° d'adherent et le statut (droit) sont stockés en session
                if($AdherentRetourne->LIBELLESTATUT=='admin' or $AdherentRetourne->LIBELLESTATUT=='président' or $AdherentRetourne->LIBELLESTATUT=='trésorerie')
                {  
                    $this->load->library('session');   
                    $this->session->numeroAdherent = $AdherentRetourne->NUMEROADHERENT;   
                    $this->session->statut = $AdherentRetourne->LIBELLESTATUT;   
                    $DonneesInjectees['unAdherent'] = $AdherentRetourne; 
                    $this->load->view('adherent/connexionReussie', $DonneesInjectees);   
                }
                else
                {
                    $this->load->view('adherent/statut');
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
        if ($this->session->statut=='admin' or $this->session->statut=='président' or $this->session->statut=='trésorerie') // 0 : statut visiteur
        {
            $DonneesInjectees['unAdherent'] = $this->Adherent->retournerAdherent($this->session->numeroAdherent);
            $DonneesInjectees['Statut'] = $this->session->statut;
            $DonneesInjectees['TitreDeLaPage'] = "Votre n° d'adherent: ".$this->session->numeroAdherent;
            $this->load->view('adherent/accueil', $DonneesInjectees);
            $this->load->view('templates/piedDePage');   
        }
        else
        {
            redirect('/visiteur/seConnecter');
        }
        
    }

    public function seDeConnecter()
    {
        $this->session->sess_destroy();
        redirect('/visiteur/seConnecter');
    }
}