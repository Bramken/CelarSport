<?php
class ClubOrigine extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    } // __construct

    public function retournerClubsOrigine()
    {
            $requete = $this->db->get('CLUB_ORIGINE');
            return $requete->result_array();
    }
}