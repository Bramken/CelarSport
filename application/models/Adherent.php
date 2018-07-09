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
            return $this->db->insert('ADHERENT', $pDonneesAInserer);     
    } // insererUnAdherent

    public function modifierUnAdherent($pDonneesAInserer,$pNoAdherent)
    {
        $this->db->where('NUMEROADHERENT', $pNoAdherent);
        $this->db->update('ADHERENT', $pDonneesAInserer);   
    } // modifierUnAdherent

    public function retournerResponsable($pAdherent)
    {
        $requete = $this->db->get_where('ADHERENT',$pAdherent);
        return $requete->row(); // retour d'une seule ligne !
        // retour sous forme d'objets
    } // retournerClient

    public function retournerAdherentDropdown()
    {
        $this->db->select('NUMEROADHERENT,NOM,PRENOM'); 
        $this->db->from('ADHERENT');
        $query=$this->db->get();
        $results=$query->result_array();
        $i=0;
        /*foreach($results as $UneLigne):
            {
                $autre[$i]['nomPrenomAdherent']=$UneLigne['NUMEROADHERENT']." ".$UneLigne['NOM']." ".$UneLigne['PRENOM'];
                $autre[$i]['numeroAdherent']=$UneLigne['NUMEROADHERENT'];
                $i=$i+1;
            } 
        endforeach;*/
        return $results;/*array_column($autre,'nomPrenomAdherent','numeroAdherent');*/
    }

    public function retournerAdherentRecherche($pColonne,$pRecherche)
    {
        $this->db->select('*');
        $this->db->from('ADHERENT');
        $this->db->like ($pColonne,$pRecherche);
        $requete = $this->db->get();
        return $requete->result_array();
    }
} // Fin Classe