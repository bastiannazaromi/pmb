<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Daftar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->u1		= $this->uri->segment(1);
        $this->u2		= $this->uri->segment(2);
        $this->u3		= $this->uri->segment(3);
        $this->u4		= $this->uri->segment(4);
        $this->u5		= $this->uri->segment(5);
        $this->u6		= $this->uri->segment(6);

        $this->load->model('M_Provinsi', 'provinsi');
        $this->load->model('M_Kabupaten', 'kabupaten');
        $this->load->model('M_Prodi', 'prodi');
        $this->load->model('M_Penghasilan', 'penghasilan');
        $this->load->model('M_KebKhusus', 'keb_khusus');
    }
    public function index()
    {
        $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
        $data['page'] = 'v_home';
        $this->load->view('template', $data);
    }

    public function form_daftar()
    {
        if ($this->u2 != null)
        {
            if ($this->u2 == 'kabupaten')
            {
                $id_prov = $this->input->post('id_prov', TRUE);
                $data['kabupaten'] = $this->kabupaten->getKabupaten($id_prov);
                $data['token'] = $this->security->get_csrf_hash();

                echo json_encode($data);
            }
            elseif ($this->u2 == 'submit')
            {
                echo $this->input->post('no_hp');
            }
        }
        else
        {
            $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
            $data['page'] = 'v_daftar';
            $data['provinsi'] = $this->provinsi->get();
            $data['prodi'] = $this->prodi->get();
            $data['penghasilan'] = $this->penghasilan->get();
            $data['keb_khusus'] = $this->keb_khusus->get();
            $this->load->view('template', $data);
        }

    }

    public function about()
    {
        $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
        $data['page'] = 'v_about';
        $this->load->view('template', $data);
    }
    public function contact()
    {
        $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
        $data['page'] = 'v_contact';
        $this->load->view('template', $data);
    }

}