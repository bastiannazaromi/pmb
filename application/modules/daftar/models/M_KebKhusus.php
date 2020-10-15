<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_KebKhusus extends CI_Model {

    public function get()
    {
        return $this->db->get('keb_khusus')->result_array();
    }

}

/* End of file M_KebKhusus.php */

?>