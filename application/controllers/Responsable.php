<?php
class Responsable extends CI_Controller {

        public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('assets'); // helper 'assets' ajouté a Application
        $this->load->library("pagination");
        $this->load->model('Adherent'); // chargement modèle, obligatoire
        $this->load->model('AdherentTemporaire');
        $this->load->model('Categorie'); 
        $this->load->model('Section');
        $this->load->model('Autorisation');
        $this->load->model('ClubOrigine');
        $this->load->model('Origine');
        $this->load->model('Certificat');
        $this->load->model('Entite');   
        $this->load->view('templates/entete');

        $this->load->library('session');
        if (!$this->session->autorisation==2 or !$this->session->autorisation==3 or !$this->session->autorisation==6) // 0 : statut visiteur
        {    
            $this->load->view('/adherent/autorisation');
        }
    } // __construct

    public function afficherUnAdherent($pNoAdherent)
    {
        $DonneesInjectees['unAdherent'] = $this->Adherent->retournerAdherent($pNoAdherent);
        $DonneesInjectees['TitreDeLaPage'] = "N° d'adherent: ".$DonneesInjectees['unAdherent']->NUMEROADHERENT;
        $this->load->view('adherent/afficherUnAdherent', $DonneesInjectees);
        $this->load->view('templates/piedDePage');
    } // listerLesProduits

    public function afficherLesAdherents()
    {
        $DonneesInjectees['lesAdherents'] = $this->Adherent->retournerAdherent();
        $DonneesInjectees['TitreDeLaPage'] = 'Les Adherent';
        $this->load->view('adherent/afficherLesAdherents', $DonneesInjectees);
        $this->load->view('templates/piedDePage');
    } // listerLesProduits

    public function ajouterUnAdherent()
    {
        $this->load->helper('form');
        $DonneesInjectees['LesAdherents']=$this->Adherent->retournerAdherent();
        $DonneesInjectees['Autorisations']=$this->Autorisation->retournerAutorisation();
        $DonneesInjectees['ClubOrigines']=$this->ClubOrigine->retournerClubOrigine();
        $DonneesInjectees['Origines']=$this->Origine->retournerOrigine();
        $DonneesInjectees['Entites']=$this->Entite->retournerEntite();
        $DonneesInjectees['TitreDeLaPage'] = "Ajouter un adherent";
 
        if ($this->input->post('BoutonAjouter'))
        {   // formulaire non validé, on renvoie le formulaire
            $donneesAInserer = array(
                'DATEENVOIFEDERATION'=> $this->input->post('txtDateEnvoiFederation'),
                'NUMEROLICENSE'=> $this->input->post('txtNumeroLicense'),
                'DATEEDITIONCARTE'=> $this->input->post('txtDateEditionCarte'),
                'NOM'=> $this->input->post('txtNom'),
                'PRENOM'=> $this->input->post('txtPrenom'),
                'DATENAISSANCE'=> $this->input->post('txtDateNaissance'),
                'GENRE'=> $this->input->post('txtGenre'),
                'CODEPOSTAL'=> $this->input->post('txtCodePostal'),
                'NOMDUSAGE'=> $this->input->post('txtNomDUsage'),
                'NUMEROAUTORISATION'=> $this->input->post('txtAutorisation'),
                'NUMEROORIGINE'=> $this->input->post('txtOrigine'),
                'NUMEROENTITE'=> $this->input->post('txtEntite'),
                'VILLENAISSANCE'=> $this->input->post('txtVilleNaissance'),
                'DEPARTEMENTNAISSANCE'=> $this->input->post('txtDepartementNaissance'),
                'TELEPHONE'=> $this->input->post('txtTelephone'),
                'EMAILEXTERIEUR'=> $this->input->post('txtEmailExterieur'),
                'EMAILPROFESSIONNEL'=> $this->input->post('txtEmailProfessionnel'),
                'NUMEROADHERENT_PARRAINER'=> $this->input->post('txtParrain'),
                'MOTDEPASSE'=> $this->input->post('txtMotDePasse'),
                'NUMEROADHERENT_PARENT'=> $this->input->post('txtParent'),
                'NUMEROADHERENT_COUPLER'=> $this->input->post('txtCouple'),
                'NUMEROCLUB'=> $this->input->post('txtClubOrigine')
            ); // NOM, PRENOM, EMAILPROFESSIONNEL : champs de la table ADHERENT
            if ($this->Adherent->insererUnAdherent($donneesAInserer)) // appel du modèle
            {
                $this->load->view('visiteur/ajoutReussie'); 
                $this->load->view('templates/piedDePage');  
            }
            else
            {
                //redirect('visiteur/ajouterUnClient');
            }
        }
        else
        {   
            $this->load->view('adherent/ajouterUnAdherent', $DonneesInjectees);
            $this->load->view('templates/piedDePage');
        }
    }
    
    public function modifierAdherent($NoAdherent)
    {
        $DonneesInjectees['unAdherent'] = $this->Adherent->retournerAdherent($NoAdherent);
        $DonneesInjectees['LesAdherents']=$this->Adherent->retournerAdherent();
        $DonneesInjectees['Autorisations']=$this->Autorisation->retournerAutorisation();
        $DonneesInjectees['ClubOrigines']=$this->ClubOrigine->retournerClubOrigine();
        $DonneesInjectees['Origines']=$this->Origine->retournerOrigine();
        $DonneesInjectees['Entites']=$this->Entite->retournerEntite();
        var_dump($DonneesInjectees['Entites']);
        if (empty($DonneesInjectees['unAdherent']))   
        {   
            show_404();   
        }
          
        $DonneesInjectees['TitreDeLaPage'] = 'Modifier un Adherent';  
        $this->load->helper('form');
 
        if ($this->input->post('BoutonModifier'))
        {   // formulaire non validé, on renvoie le formulaire
            $donneesAInserer = array(
                'DATEENVOIFEDERATION'=> $this->input->post('txtDateEnvoiFederation'),
                'NUMEROLICENSE'=> $this->input->post('txtNumeroLicense'),
                'DATEEDITIONCARTE'=> $this->input->post('txtDateEditionCarte'),
                'NOM'=> $this->input->post('txtNom'),
                'PRENOM'=> $this->input->post('txtPrenom'),
                'DATENAISSANCE'=> $this->input->post('txtDateNaissance'),
                'GENRE'=> $this->input->post('txtGenre'),
                'CODEPOSTAL'=> $this->input->post('txtCodePostal'),
                'NOMDUSAGE'=> $this->input->post('txtNomDUsage'),
                'NUMEROAUTORISATION'=> $this->input->post('txtAutorisation'),
                'NUMEROORIGINE'=> $this->input->post('txtOrigine'),
                'NUMEROENTITE'=> $this->input->post('txtEntite'),
                'VILLENAISSANCE'=> $this->input->post('txtVilleNaissance'),
                'DEPARTEMENTNAISSANCE'=> $this->input->post('txtDepartementNaissance'),
                'TELEPHONE'=> $this->input->post('txtTelephone'),
                'EMAILEXTERIEUR'=> $this->input->post('txtEmailExterieur'),
                'EMAILPROFESSIONNEL'=> $this->input->post('txtEmailProfessionnel'),
                'NUMEROADHERENT_PARRAINER'=> $this->input->post('txtParrain'),
                'MOTDEPASSE'=> $this->input->post('txtMotDePasse'),
                'NUMEROADHERENT_PARENT'=> $this->input->post('txtParent'),
                'NUMEROADHERENT_COUPLER'=> $this->input->post('txtCouple'),
                'NUMEROCLUB'=> $this->input->post('txtClubOrigine')
            ); // NOM, PRENOM, EMAILPROFESSIONNEL : champs de la table ADHERENT
            $this->Adherent->modifierUnAdherent($donneesAInserer,$NoAdherent); // appel du modèle
            $this->load->view('adherent/modificationReussie');   
        }
        else
        {   
            $this->load->view('adherent/modifierUnAdherent', $DonneesInjectees);
            $this->load->view('templates/PiedDePage');
        }
    }

    public function afficherLesSections()
    {
        $DonneesInjectees['lesSections'] = $this->Section->retournerSectionAfficher();
        $DonneesInjectees['TitreDeLaPage'] = 'Les Sections';
        $this->load->view('adherent/afficherLesSections', $DonneesInjectees);
        $this->load->view('templates/piedDePage');
    } // listerLesProduits

    public function afficherUneSection($pNoSection)
    {
        $DonneesInjectees['UneSection'] = $this->Section->retournerSectionAfficher($pNoSection);
        $DonneesInjectees['AdherentSection'] = $this->Section->retournerAdherentSection($pNoSection);
        $DonneesInjectees['TitreDeLaPage'] ="N° section: ".$DonneesInjectees['UneSection']->NUMEROSECTION;
        $this->load->view('adherent/afficherUneSection', $DonneesInjectees);
        $this->load->view('templates/piedDePage');
    } // listerLesProduits
    
    public function afficherLesAdherentsTemporaire()
    {
        $DonneesInjectees['lesAdherentsTemporaire'] = $this->AdherentTemporaire->retournerAdherentTemporaire();
        $DonneesInjectees['TitreDeLaPage'] = 'Les adherents temporaire';
        $this->load->view('adherent/afficherLesAdherentsTemporaire', $DonneesInjectees);
        $this->load->view('templates/piedDePage');
    } // listerLesProduits

    public function ajouterUnAdherentTemporaire()
    {
        $this->load->helper('form');
        $DonneesInjectees['Origines']=$this->Origine->retournerOrigine();
        $DonneesInjectees['TitreDeLaPage'] = "Ajouter un adherent temporaire";
 
        if ($this->input->post('BoutonAjouter'))
        {   // formulaire non validé, on renvoie le formulaire
            $donneesAInserer = array(
                'NOMTEMP'=> $this->input->post('txtNomTemp'),
                'PRENOMTEMP'=> $this->input->post('txtPrenomTemp'),
                'DATENAISSANCETEMP'=> $this->input->post('txtDateNaissanceTemp'),
                'LIEUNAISSANCETEMP'=> $this->input->post('txtVilleNaissanceTemp'),
                'DATEPAIEMENTEVENEMENT'=> $this->input->post('txtDatePaiementEvenement'),
                'NUMEROORIGINE'=> $this->input->post('txtOrigineTemp')
            ); // NOM, PRENOM, EMAILPROFESSIONNEL : champs de la table ADHERENT
            if ($this->AdherentTemporaire->insererUnAdherentTemporaire($donneesAInserer)) // appel du modèle
            {
                $this->load->view('adherent/ajoutReussie'); 
                $this->load->view('templates/piedDePage');  
            }
            else
            {
                redirect('visiteur/ajouterUnAdherentTemporaire');
            }
        }
        else
        {   
            $this->load->view('adherent/ajouterUnAdherentTemporaire', $DonneesInjectees);
            $this->load->view('templates/piedDePage');
        }
    }

    public function listerAdherentRecherche()
    {
        $this->load->helper('form');           
        $DonneesInjectees['TitreDeLaPage'] = 'Resultat de recherche';    
        $Recherche = $this->input->post('txtRecherche'); // on récupère les données du formulaire de recherche
        $Colonne = $this->input->post('txtColonne');   
        $DonneesInjectees['lesAdherents']= $this->Adherent->retournerAdherentRecherche($Colonne,$Recherche);        
        $this->load->view('adherent/afficherLesAdherents', $DonneesInjectees);   
        $this->load->view('templates/PiedDePage');  
    }

    public function afficherEtatCertificat()
    {
        $DonneesInjectees['lesCertificats'] = $this->Certificat->retournerCertificatAfficher();
        $DonneesInjectees['TitreDeLaPage'] = 'Les Certificats';
        $this->load->view('adherent/afficherEtatCertificat', $DonneesInjectees);
        $this->load->view('templates/piedDePage');
    } 
    public function ajouterUneAttestation()
    {
        $this->load->helper('form');
        $DonneesInjectees['LesAdherents']=$this->Adherent->retournerAdherentDropdown();
        $DonneesInjectees['LesCategories']=$this->Categorie->retournerCategorie();
        $DonneesInjectees['LesCodesFederation']=$this->Section->retournerCodeFederation();
        $DonneesInjectees['TitreDeLaPage'] = "Ajouter une section";
 
        if ($this->input->post('BoutonAjouter'))
        {   // formulaire non validé, on renvoie le formulaire
            $DonneesAInsererCertificat = array(
                'NUMEROADHERENT'=> $this->input->post('txtNumeroAdherent'),
                'REMARQUE'=> $this->input->post('txtRemarque'),
                'DATECERTIFICAT'=> $this->input->post('txtDateCertificat'),
                'NOMDUFICHIER'=> $this->input->post('txtNomDuFichier')
            );
            $DonneesAInsererDetenir = array(
                'NUMEROCERTIFICAT'=> $this->input->post('txtNumeroCertificat'),
                'NUMEROSPORT'=> $this->input->post('txtNumeroSport')
            );
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
            $this->load->view('adherent/ajouterUneSection', $DonneesInjectees);
            $this->load->view('templates/piedDePage');
        }
    }
}