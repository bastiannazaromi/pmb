<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_CalonMhs extends CI_Model {

    public function insert($data, $tabel)
    {
        return ($this->db->insert($tabel, $data)) ? true : false ;
    }

}

/* End of file M_CalonMhs.php */
 ?>