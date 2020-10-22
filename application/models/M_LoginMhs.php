<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_LoginMhs extends CI_Model {

    public function validasi($username, $password)
    {
        $data = $this->db->get_where('akun_mhs', array('username' => $username))->result();

        if (count($data) === 1) {
            if (password_verify($password, $data[0]->password)) {
                return $dt		=	array(
                    'is_logged_in'	=> true,
                    'username'  	=> $username,
                    'virtualAkun'   => $data[0]->virtualAkun,
                    'nik'		    => $data[0]->nik
                );
            } else {
                return 0;
            }
        }
    }

}

/* End of file M_LoginMhs.php */
 ?>