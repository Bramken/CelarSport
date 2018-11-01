<?php
class Gerer extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    } // __construct


    public function retournerGerant($pNoSection=FALSE)
    {
        if ($pNoSection==FALSE)
        {
            $requete = $this->db->get('GERER');
            return $requete->result_array();
        }// retour d'un tableau associatif
            $requete = $this->db->get_where('GERER',array('NUMEROSECTION'=>$pNoSection));
            return $requete->result_array(); // retour d'une seule ligne !
    }
}