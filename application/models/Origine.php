<?php
class Origine extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    } // __construct


    public function retournerOrigine($pNoOrigine=FALSE)
    {
        if ($pNoOrigine==FALSE)
        {
            $requete = $this->db->get('ORIGINE');
            return $requete->result_array();
        }// retour d'un tableau associatif
            $requete = $this->db->get_where('ORIGINE',array('NUMEROORIGINE'=>$pNoOrigine));
            return $requete->row(); // retour d'une seule ligne !
    }
}