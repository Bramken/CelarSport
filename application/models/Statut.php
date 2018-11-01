<?php
class Statut extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    } // __construct

    public function retournerStatuts()
    {
            $requete = $this->db->get('STATUT');
            return $requete->result_array();
    }
}