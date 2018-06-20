<?php
class Section extends CI_Model 
{
public function __construct()
    {
        $this->load->database();
    } // __construct

    public function insererSection()
    {
        return $this->db->insert('ADHERENT', $pDonneesAInserer);  
    }
    public function modifierSection($pDonneesAInserer,$pNoSection)
    {
        $this->db->where('NUMEROSECTION', $pNoSection);
        $this->db->update('SECTION', $pDonneesAInserer);
    }
}
