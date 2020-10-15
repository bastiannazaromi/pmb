<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Prodi extends CI_Model {

    public function get()
    {
        $this->db->order_by('nama');
        return $this->db->get('prodi')->result_array();
    }

}

/* End of file M_Prodi.php */