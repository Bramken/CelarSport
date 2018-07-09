<?php
class Attestation extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    } // __construct
  
    public function retournerAttestation($pNoCertificat=FALSE)
    {
        if ($pNoCertificat==FALSE)
        {
            $requete = $this->db->get('ATTESTATION');
            return $requete->result_array();
        }// retour d'un tableau associatif
            $requete = $this->db->get_where('ATTESTATION',array('NUMEROCERTIFICAT'=>$pNoCertificat));
            return $requete->row(); // retour d'une seule ligne !
    }

    public function insererUneAttestation($pDonneesAInserer)
    {
            $this->db->insert('ATTESTATION', $pDonneesAInserer); 
            $id=$this->db->insert_id();
            return $id;
    } 

}