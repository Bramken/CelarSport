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
 
    public function afficherAdherent($pNoAdherent) // lister tous les Produits
    {
        $DonneesInjectees['adherent'] = $this->Adherent->retournerAdherent($pNoAdherent);
        $DonneesInjectees['TitreDeLaPage'] = 'Adherent';
        $this->load->view('adherent/afficherAdherent', $DonneesInjectees);
        $this->load->view('templates/piedDePage');
    } // listerLesProduits
}