<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Penghasilan extends CI_Model {

    public function get()
    {
        return $this->db->get('penghasilan')->result_array();
    }

}

/* End of file M_Penghasilan.php */
?>