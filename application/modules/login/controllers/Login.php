<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->u1		= $this->uri->segment(1);
        $this->u2		= $this->uri->segment(2);

        if (!empty($this->session->userdata('log_user'))) {
            if($this->u2 != 'logout')
            {
                redirect('dashboard', 'refresh');
            }
        }

        $this->load->helper(array('string', 'cookie'));
        $this->load->model('M_LoginMhs', 'login');
    }
    
    public function index()
    {
        $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
        $this->load->view('v_login', $data);
    }

    public function proses()
    {
        $username 	= addslashes(trim($this->input->post('username', true)));
        $password 	= addslashes(trim($this->input->post('password', true)));
        $remember = $this->input->post('remember');
        $row = $this->login->validasi($username, $password);

        if ($row != null) {
            $this->_daftarkan_session($row);
        } else {
            $this->notifikasi->failLogin();
            redirect('login', 'refresh');
        }
    }

    public function _daftarkan_session($row)
    {
        array_merge($row, array('is_logged_in' =>true));
        $this->session->set_userdata('log_user', $row);
        redirect('dashboard');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('dashboard/login');
    }

}

/* End of file Login.php */
 ?>