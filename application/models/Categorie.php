<?php
class Categorie extends CI_Model 
{
public function __construct()
    {
        $this->load->database();
    } // __construct

public function retournerCategorieDropDown()
    {
        $this->db->select('NUMEROCATEGORIE,LIBELLECATEGORIE'); 
        $this->db->from('CATEGORIE');
        $query=$this->db->get();
        $results=$query->result_array();
        $i=0;
        /*foreach($results as $UneLigne):
            {
                $section[$i]['nomPrenomAdherent']=$UneLigne['NUMEROADHERENT']." ".$UneLigne['NOMADHERENT']." ".$UneLigne['PRENOMADHERENT'];
                $section[$i]['numeroAdherent']=$UneLigne['NUMEROADHERENT'];
                $i=$i+1;
            } 
        endforeach;*/
        return $results;/*array_column($autre,'nomPrenomAdherent','numeroAdherent');*/
    }
}