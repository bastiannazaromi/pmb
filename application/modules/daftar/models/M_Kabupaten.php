<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kabupaten extends CI_Model {

    public function getKabupaten($id_prov)
    {
        $this->db->where('id_prov', $id_prov);
        $this->db->group_by('nama');
        return $this->db->get('kabupaten')->result_array();
    }

}

/* End of file M_Kabupaten.php */