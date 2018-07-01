<?php
class Autorisation extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    } // __construct


    public function retournerAutorisation($pNoAutorisation=FALSE)
    {
        if ($pNoAutorisation==FALSE)
        {
            $requete = $this->db->get('AUTORISATION');
            return $requete->result_array();
        }// retour d'un tableau associatif
            $requete = $this->db->get_where('AUTORISATION',array('NUMEROAUTORISATION'=>$pNoAutorisation));
            return $requete->row(); // retour d'une seule ligne !
    }
}