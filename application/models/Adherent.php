<?php
class Adherent extends CI_Model 
{
public function __construct()
    {
        $this->load->database();
    } // __construct
  
    public function retournerAdherent($pNoAdherent=FALSE)
    {
        if ($pNoAdherent==FALSE)
        {
            $requete = $this->db->get('ADHERENT');
            return $requete->result_array();
        }// retour d'un tableau associatif
            $requete = $this->db->get_where('ADHERENT',array('NUMEROADHERENT'=>$pNoAdherent));
            return $requete->row(); // retour d'une seule ligne !
    } // retournerClient

    public function existe($pNoAdherent) // non utilisée retour 1 si connecté, 0 sinon
    {
        $this->db->where($pNoAdherent);
        $this->db->from('ADHERENT');
        return $this->db->count_all_results(); // nombre de ligne retournées par la requeête
    } // existe

    public function insererUnAdherent($pDonneesAInserer)
    {
            return $this->db->insert('CLIENT', $pDonneesAInserer);     
    } // insererUnAdherent
} // Fin Classe