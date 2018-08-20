<?php
class ClubOrigine extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    } // __construct


    public function retournerClubOrigine($pNoClubOrigine=FALSE)
    {
        if ($pNoClubOrigine==FALSE)
        {
            $requete = $this->db->get('CLUB_ORIGINE');
            return $requete->result_array();
        }// retour d'un tableau associatif
            $requete = $this->db->get_where('CLUB_ORIGINE',array('NUMEROCLUB'=>$pNoClubOrigine));
            return $requete->row(); // retour d'une seule ligne !
    }
}