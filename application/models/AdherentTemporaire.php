<?php
class AdherentTemporaire extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    } // __construct
  
    public function retournerAdherentTemporaire($pNoAdherentTemporaire=FALSE)
    {
        if ($pNoAdherentTemporaire==FALSE)
        {
            $requete = $this->db->get('ADHERENT_TEMPORAIRE');
            return $requete->result_array();
        }// retour d'un tableau associatif
            $requete = $this->db->get_where('ADHERENT_TEMPORAIRE',array('NUMEROADHERENTTEMP'=>$pNoAdherentTemporaire));
            return $requete->row(); // retour d'une seule ligne !
    } // retournerClient

    public function existe($pNoAdherentTemporaire) // non utilisée retour 1 si connecté, 0 sinon
    {
        $this->db->where($pNoAdherentTemporaire);
        $this->db->from('ADHERENT_TEMPORAIRE');
        return $this->db->count_all_results(); // nombre de ligne retournées par la requeête
    } // existe

public function insererUnAdherentTemporaire($pDonneesAInserer)
    {
        return $this->db->insert('ADHERENT_TEMPORAIRE', $pDonneesAInserer);     
    } // insererUnAdherent temporaire

    public function modifierUnAdherentTemporaire($pDonneesAInserer,$pNoAdherentTemporaire)
    {
        $this->db->where('NUMEROADHERENTTEMP', $pNoAdherentTemporaire);
        $this->db->update('ADHERENT_TEMPORAIRE', $pDonneesAInserer);   
    } // modifierUnAdherent


    public function supprimerUnAdherentTemporaire($pNumeroAdherentTemporaire)
    {

    }
}