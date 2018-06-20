<?php
class Responsable extends CI_Controller {

        public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('assets'); // helper 'assets' ajouté a Application
        $this->load->library("pagination");
        $this->load->model('Adherent'); // chargement modèle, obligatoire
        $this->load->view('templates/entete');
    } // __construct
 
    public function afficherUnAdherent($pNoAdherent) // lister tous les Produits
    {
        $DonneesInjectees['unAdherent'] = $this->Adherent->retournerAdherent($pNoAdherent);
        $DonneesInjectees['TitreDeLaPage'] = 'Un Adherent';
        $this->load->view('adherent/afficherUnAdherent', $DonneesInjectees);
        $this->load->view('templates/piedDePage');
    } // listerLesProduits

    public function afficherLesAdherents() // lister tous les Produits
    {
        $DonneesInjectees['lesAdherents'] = $this->Adherent->retournerAdherent();
        $DonneesInjectees['TitreDeLaPage'] = 'Les Adherent';
        $this->load->view('adherent/afficherLesAdherents', $DonneesInjectees);
        $this->load->view('templates/piedDePage');
    } // listerLesProduits

    public function seConnecter()
    {
        $this->load->helper('form');           
        $DonneesInjectees['TitreDeLaPage'] = 'Se connecter';    
            $Adherent = array( // NUMEROADHERENT, MOTDEPASSE : champs de la table client   
            'NUMEROADHERENT' => $this->input->post('txtNumeroAdherent'),  
            'MOTDEPASSE' => $this->input->post('txtMotDePasse'),   
            ); // on récupère les données du formulaire de connexion   
    
            // on va chercher le responsable correspondant au numero d'adherent et motde passe saisis   
            $AdherentRetourne = $this->Adherent->retournerResponsable($Adherent);   
            if (!($AdherentRetourne == null))   
            {    // on a trouvé, email et profil (droit) sont stockés en session  
                $this->load->library('session');   
                $this->session->numeroAdherent = $AdherentRetourne->NUMEROADHERENT;   
                $this->session->autorisation = $AdherentRetourne->CODEAUTORISATION;   
                $DonneesInjectees['NomAdherent'] = $AdherentRetourne->NOMADHERENT;
                $DonneesInjectees['PrenomAdherent'] = $AdherentRetourne->PRENOMADHERENT ;  
                $this->load->view('adherent/connexionReussie', $DonneesInjectees);   
                $this->load->view('templates/piedDePage');   
            }   
            else   
            {    // client non trouvé on renvoie le formulaire de connexion   
                $this->load->view('adherent/seConnecter', $DonneesInjectees);   
                $this->load->view('templates/piedDePage');   
            }     
    }
        
}