<?php
class Certificat extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    } // __construct
  
    public function retournerCertificat($pNoCertificat=FALSE)
    {
        if ($pNoCertificat==FALSE)
        {
            $requete = $this->db->get('CERTIFICAT');
            return $requete->result_array();
        }// retour d'un tableau associatif
            $requete = $this->db->get_where('CERTIFICAT',array('NUMEROCERTIFICAT'=>$pNoCertificat));
            return $requete->row(); // retour d'une seule ligne !
    }

    public function retournerCertificatValideParAdherent($pNoAdherent=FALSE)
    {
        $requete = $this->db->get_where('CERTIFICAT',array('NUMEROCERTIFICAT'=>$pNoCertificat));
        return $requete->row(); // retour d'une seule ligne !
    }

    public function retournerCertificatAfficher($pNoAdherent=FALSE)
    {
        if($pNoAdherent==FALSE)
        {
            $requete = $this->db->query("SELECT NUMEROCERTIFICAT , certif.NUMEROADHERENT, REMARQUE, DATECERTIFICAT,DATEATTESTATION FROM CERTIFICAT AS certif,ADHERENT ORDER BY `NUMEROCERTIFICAT` ASC");
            return $requete->result_array();
        }
        $requete = $this->db->query("SELECT NUMEROCERTIFICAT,certif.NUMEROADHERENT,`REMARQUE`, `DATECERTIFICAT`,DATEATTESTATION FROM CERTIFICAT AS certif,ADHERENT WHERE certif.NUMEROADHERENT = ADHERENT.NUMEROADHERENT AND certif.NUMEROADHERENT =".$pNoAdherent);
        return $requete->result_array();
        
    }
}