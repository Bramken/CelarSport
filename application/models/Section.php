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
    public function modifierSection($pDonneesAInserer,$pLibelleSection)
    {
        $this->db->where('LIBELLESECTION', $pLibelleSection);
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
            $requete = $this->db->query("SELECT sous.NUMEROADHERENT,NOM,PRENOM,DATENAISSANCE FROM souscrir sous LEFT OUTER JOIN adherent adh on (sous.NUMEROADHERENT=adh.NUMEROADHERENT) WHERE NUMEROSECTION='$pNoSection'");
            return $requete->result_array();

    }

    public function existe($pLibelleSection) // non utilisée retour 1 si connecté, 0 sinon
    {
        $this->db->where('LIBELLESECTION',$pLibelleSection);
        $this->db->from('SECTION');
        return $this->db->count_all_results(); // nombre de ligne retournées par la requeête
    } // existe
}
