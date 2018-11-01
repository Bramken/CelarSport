<?php
class Administrateur extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('assets'); // helper 'assets' ajouté a Application
        $this->load->library("pagination");
        $this->load->model('Adherent'); // chargement modèle, obligatoire
        $this->load->model('Section');
        $this->load->model('Statut');
        $this->load->model('ClubOrigine');
        $this->load->model('Origine');
        $this->load->model('Entite');   
        $this->load->view('templates/entete');

        $this->load->library('session');
        if (!isset($this->session->statut)) // 0 : statut visiteur
        {
            redirect('/visiteur/seConnecter'); // pas les droits : redirection vers connexion
        }
    } // __construct

    public function ajouterUneSection()
    {
        $this->load->helper('form');
        $DonneesInjectees['LesAdherents']=$this->Adherent->retournerAdherentDropdown();
        $DonneesInjectees['LesCodesFederation']=$this->Section->retournerCodeFederation();
        $DonneesInjectees['TitreDeLaPage'] = "Ajouter une section";
 
        if ($this->input->post('BoutonAjouter'))
        {   // formulaire non validé, on renvoie le formulaire
            $donneesAInserer = array(
                'LIBELLESECTION'=> $this->input->post('txtSection'),
                'CODEFEDERATION'=> $this->input->post('txtCodeFederation'),
            ); // NOM, PRENOM, EMAILPROFESSIONNEL : champs de la table ADHERENT
            if($this->Section->existe($this->input->post('txtSection'))!=1)
            {
                if ($this->Section->insererSection($donneesAInserer)) // appel du modèle
                {
                   $this->load->view('adherent/ajoutReussie'); 
                    $this->load->view('templates/piedDePage');  
                }
                else
                {
                    redirect('administrateur/ajouterUneSection');
                }
                
            }
            else
            {
                $this->load->view('adherent/sectionExistante'); 
                $this->load->view('templates/piedDePage');  
            }
        }
        else
        {   
            $this->load->view('adherent/ajouterUneSection', $DonneesInjectees);
            $this->load->view('templates/piedDePage');
        }
    }
}