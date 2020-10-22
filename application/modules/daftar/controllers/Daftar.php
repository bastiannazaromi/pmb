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
        $this->load->model('M_CalonMhs', 'calonMhs');
        $this->load->model('M_Universal', 'universal');
    }
    public function index()
    {
        $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
        $data['page'] = 'v_home';
        $data['slider'] = $this->universal->getOrderBy(['status' => 1], 'slider', 'urut');
        $data['prodi'] = $this->universal->getOrderBy('', 'prodi', 'nama');
        
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
                $this->form_validation->set_rules('nik', 'NIK', 'required|min_length[16]|max_length[16]|numeric');
                $this->form_validation->set_rules('nama', 'Nama', 'required');
                $this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required|alpha|min_length[3]');
                $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
                $this->form_validation->set_rules('agama', 'Agama', 'required|min_length[5]');
                $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|min_length[9]');
                $this->form_validation->set_rules('status', 'Status', 'required|alpha|min_length[6]');
                $this->form_validation->set_rules('jns_tinggal', 'Tempat Tinggal', 'required|min_length[4]');
                $this->form_validation->set_rules('no_hp', 'No Telephon', 'required|numeric|min_length[10]|max_length[13]');
                $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
                $this->form_validation->set_rules('jns_tinggal', 'Tempat Tinggal', 'required|min_length[4]');
                $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[10]');
                $this->form_validation->set_rules('kps', 'KPS', 'required|trim|alpha|min_length[2]');
                $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required|min_length[8]');
                $this->form_validation->set_rules('provinsi', 'Provinsi', 'required|numeric|max_length[2]');
                $this->form_validation->set_rules('kab_kota', 'Kab / Kota', 'required|numeric|max_length[5]');
                $this->form_validation->set_rules('jurusan', 'Jurusan', 'required|min_length[3]');
                $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required|numeric|min_length[4]|max_length[4]');
                $this->form_validation->set_rules('prodi', 'Prodi', 'required|numeric|min_length[5]|max_length[5]');
                $this->form_validation->set_rules('kelas', 'Kelas', 'required|numeric|max_length[1]');
                $this->form_validation->set_rules('sumber_info', 'Sumber Informasi', 'required');
        
                if ($this->form_validation->run() == false) {
                    $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
                    $data['page'] = 'v_daftar';
                    $data['provinsi'] = $this->universal->getOrderBy('', 'provinsi', 'nama');
                    $data['prodi'] = $this->universal->getOrderBy('', 'prodi', 'nama');
                    $this->load->view('template', $data);
                } else {

                    $virtualAkun = $this->_getVirualToken(4);
                    $password = $this->_getPassword(8);
                    $akun = [
                        'virtualAkun'   => $virtualAkun,
                        'username'      => $virtualAkun,
                        'password'      => password_hash($password, PASSWORD_BCRYPT),
                        'nik'           => $this->input->post('nik', TRUE)
                    ];

                    $dataMhs = [
                        'nik'               => $this->input->post('nik', TRUE),
                        'nama'              => strtoupper($this->input->post('nama', TRUE)),
                        'tempat_lahir'      => strtoupper($this->input->post('tempat', TRUE)),
                        'tgl_lahir'         => $this->input->post('tgl_lahir', TRUE),
                        'agama'             => $this->input->post('agama', TRUE),
                        'jk'                => $this->input->post('jk', TRUE),
                        'status'            => $this->input->post('status', TRUE),
                        'tempat_tinggal'    => $this->input->post('jns_tinggal', TRUE),
                        'no_hp'             => $this->input->post('no_hp', TRUE),
                        'email'             => $this->input->post('email', TRUE),
                        'kps'               => $this->input->post('kps', TRUE),
                        'alamat'            => $this->input->post('alamat', TRUE),
                        'nama_sekolah'      => strtoupper($this->input->post('nama_sekolah', TRUE)),
                        'jurusan'           => $this->input->post('jurusan', TRUE),
                        'tahun_lulus'       => $this->input->post('tahun_lulus', TRUE),
                        'tgl_lahir'         => $this->input->post('tgl_lahir', TRUE),
                        'provinsi'          => $this->input->post('provinsi', TRUE),
                        'kab_kota'          => $this->input->post('kab_kota', TRUE),
                        'prodi'             => $this->input->post('prodi', TRUE),
                        'kelas'             => $this->input->post('kelas', TRUE),
                        'sumber_info'       => $this->input->post('sumber_info', TRUE)
                    ];

                    $insertAkun = $this->universal->insert($akun, 'akun_mhs');
                    if ($insertAkun)
                    {
                        $insertCalonMhs = $this->universal->insert($dataMhs, 'calon_mhs');
                        if ($insertCalonMhs)
                        {
                            $this->session->set_flashdata('flash-sukses', 'Pendaftaran berhasil');

                            $akun2 = [
                                'virtualAkun'   => $virtualAkun,
                                'username'      => $virtualAkun,
                                'password'      => $password,
                                'nik'           => $this->input->post('nik', TRUE)
                            ];

                            $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
                            $data['page'] = 'v_suksesDaftar';
                            $data['akun'] = $akun2;
                            $this->load->view('template', $data);
                        }
                        else{
                            $this->session->set_flashdata('flash-error', 'Pendafaran gagal !!');
                            redirect('pendaftaran', 'resfesh');
                        }
                    }
                    else{
                        $this->session->set_flashdata('flash-error', 'Pendafaran gagal !!');
                        redirect('pendaftaran', 'resfesh');
                    }

                }
            }
        }
        else
        {
            $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
            $data['page'] = 'v_daftar';
            $data['provinsi'] = $this->universal->getOrderBy('', 'provinsi', 'nama');
            $data['prodi'] = $this->universal->getOrderBy('', 'prodi', 'nama');
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

    private function _getVirualToken($n) { 
        $characters = '0123456789'; 
        $randomString = ''; 
      
        for ($i = 0; $i < $n; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        }

        $tanggal = date('y-m-d');

        $tanggal = str_replace('-', '', $tanggal);
      
        return $tanggal.$randomString;
    } 

    private function _getPassword($n) { 
        $characters = '0123456789'; 
        $randomString = ''; 
      
        for ($i = 0; $i < $n; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        }
      
        return $randomString;
    } 

    public function cek()
    {
        // $n=8; 
        
        // echo $this->_getPassword($n);
        $this->session->set_flashdata('flash-sukses', 'Pendafataran berhasil');

        $akun = [
            'virtualAkun'   => '123456743',
            'username'      => '123456743',
            'password'      => 'asdfghjkg',
            'nik'           => 'asdfghjyt'
        ];

        $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
        $data['page'] = 'v_suksesDaftar';
        $data['akun'] = $akun;
        $this->load->view('template', $data);
    }

}