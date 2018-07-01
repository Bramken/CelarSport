<?php
class Entite extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    } // __construct


    public function retournerEntite($pNoEntite=FALSE)
    {
        if ($pNoEntite==FALSE)
        {
            $requete = $this->db->get('ENTITE');
            return $requete->result_array();
        }// retour d'un tableau associatif
            $requete = $this->db->get_where('ENTITE',array('NUMEROENTITE'=>$pNoEntite));
            return $requete->row(); // retour d'une seule ligne !
    }
}