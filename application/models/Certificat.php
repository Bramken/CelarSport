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

    public function retournerCertificatAfficher()
    {
        $requete = $this->db->query("SELECT certi.NUMEROCERTIFICAT , `NUMEROADHERENT`, `REMARQUE`, `DATECERTIFICAT`,`LIBELLESPORT`,`NUMEROATTESTATION`,`DATEATTESTATION` FROM CERTIFICAT certi LEFT OUTER JOIN DETENIR dtn ON (certi.NUMEROCERTIFICAT = dtn.NUMEROCERTIFICAT) LEFT OUTER JOIN SPORT spo ON (dtn.NUMEROSPORT = spo.NUMEROSPORT) LEFT OUTER JOIN attestation ats ON (certi.NUMEROCERTIFICAT = ats.NUMEROCERTIFICAT)  
        ORDER BY `certi`.`NUMEROCERTIFICAT`  ASC");
        return $requete->result_array();
    }

    public function retournerCertificatParAdherentAfficher($pNoAdherent)
    {
        $requete = $this->db->query("SELECT certi.NUMEROCERTIFICAT , `NUMEROADHERENT`, `REMARQUE`, `DATECERTIFICAT`,`LIBELLESPORT`,`NUMEROATTESTATION`,`DATEATTESTATION` 
        FROM CERTIFICAT certi 
        LEFT OUTER JOIN DETENIR dtn ON (certi.NUMEROCERTIFICAT = dtn.NUMEROCERTIFICAT) 
        LEFT OUTER JOIN SPORT spo ON (dtn.NUMEROSPORT = spo.NUMEROSPORT) 
        LEFT OUTER JOIN attestation ats ON (certi.NUMEROCERTIFICAT = ats.NUMEROCERTIFICAT) 
        WHERE NUMEROADHERENT=".$pNoAdherent);
        return $requete->result_array();
    }
}