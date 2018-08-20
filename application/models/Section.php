<?php
class Section extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    } // __construct

    public function insererSection($pDonneesAInserer)
    {
        return $this->db->insert('SECTION', $pDonneesAInserer);  
    }
    public function modifierSection($pDonneesAInserer,$pNoSection)
    {
        $this->db->where('NUMEROSECTION', $pNoSection);
        $this->db->update('SECTION', $pDonneesAInserer);
    }
    public function retournerSection($pNoSection=FALSE)
    {
        if ($pNoSection==FALSE)
        {
            $requete = $this->db->get('SECTION');
            return $requete->result_array();
        }// retour d'un tableau associatif
            $requete = $this->db->get_where('SECTION',array('NUMEROSECTION'=>$pNoSection));
            return $requete->row(); // retour d'une seule ligne !
    }

    public function retournerSectionAfficher($pNoSection=FALSE)
    {
        if ($pNoSection==FALSE)
        {
            $requete = $this->db->query("SELECT `NUMEROSECTION`, `LIBELLECATEGORIE`, `LIBELLESECTION`, `CODEFEDERATION` FROM section sec LEFT OUTER JOIN categorie cat ON (sec.NUMEROCATEGORIE = cat.numerocategorie) ORDER BY NUMEROSECTION ASC");
            return $requete->result_array();
        }
            $requete = $this->db->query("SELECT `NUMEROSECTION`, `LIBELLECATEGORIE`, `LIBELLESECTION`, `CODEFEDERATION` FROM section sec LEFT OUTER JOIN categorie cat ON (sec.NUMEROCATEGORIE = cat.numerocategorie) WHERE `NUMEROSECTION`=$pNoSection ORDER BY NUMEROSECTION ASC");
            return $requete->row();

    }

    public function retournerCodeFederation()
    {
        $requete = $this->db->query("SELECT DISTINCT(`CODEFEDERATION`) from `section` ORDER BY CODEFEDERATION ASC");
        return $requete->result_array(); 
    }
    
    public function retournerAdherentSection($pNoSection=FALSE)
    {
        if ($pNoSection==FALSE)
        {
            show_404();
        }
            $requete = $this->db->query("SELECT sous.NUMEROADHERENT,NOM,PRENOM,DATENAISSANCE FROM souscrir sous LEFT OUTER JOIN adherent adh on (sous.NUMEROADHERENT=adh.NUMEROADHERENT) WHERE NUMEROSECTION=$pNoSection");
            return $requete->result_array();

    }
}
