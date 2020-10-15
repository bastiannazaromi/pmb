<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Provinsi extends CI_Model {

    public function get()
    {
        $this->db->group_by('nama');
        return $this->db->get('provinsi')->result_array();
    }

}

/* End of file M_Provinsi.php */