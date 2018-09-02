<?php
class Sport extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    } // __construct

    public function retournerSportDropdown()
    {
        $this->db->select('NUMEROSPORT,LIBELLESPORT,PRENOM'); 
        $this->db->from('SPORT');
        $query=$this->db->get();
        $results=$query->array_column($autre,'nomPrenomAdherent','numeroAdherent');
        /*$i=0;
        foreach($results as $UneLigne):
            {
                $autre[$i]['nomPrenomAdherent']=$UneLigne['NUMEROADHERENT']." ".$UneLigne['NOM']." ".$UneLigne['PRENOM'];
                $autre[$i]['numeroAdherent']=$UneLigne['NUMEROADHERENT'];
                $i=$i+1;
            } 
        endforeach;*/
        return $results;/*array_column($autre,'nomPrenomAdherent','numeroAdherent');*/
    }
}