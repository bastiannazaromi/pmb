<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        if (empty($this->session->userdata('log_user'))) {
            redirect('dashboard/login', 'refresh');
        }
        else
        {
            $this->login 	    = $this->session->userdata('log_user')['is_logged_in'];
            $this->id		    = $this->session->userdata('log_user')['username'];
            $this->virtualAkun	= $this->session->userdata('log_user')['virtualAkun'];
            $this->nik	= $this->session->userdata('log_user')['nik'];
        }
        $this->logout   = base_url('dashboard/logout');
        $this->u2		= $this->uri->segment(2);
        $this->u3		= $this->uri->segment(3);
        $this->u4		= $this->uri->segment(4);
        $this->u5		= $this->uri->segment(5);
        $this->u6		= $this->uri->segment(6);

        $this->load->model('M_Universal', 'universal');
    }
    
    public function index()
    {
        $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
        $data['page'] = 'v_dashboard';
        $data['content'] = 'Dashboard';
        $data['mahasiswa'] = $this->universal->getOne(['nik' => $this->nik], 'calon_mhs');

        $this->load->view('template', $data);
    }

}

/* End of file Mahasiswa.php */
 ?>