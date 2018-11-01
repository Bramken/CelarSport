<?php
class Entite extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    } // __construct


    public function retournerEntites()
    {
        $requete = $this->db->get('ENTITE');
        return $requete->result_array();
    }
}