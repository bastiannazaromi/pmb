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
            $this->nik	        = $this->session->userdata('log_user')['nik'];
        }
        $this->logout   = base_url('dashboard/logout');
        $this->u2		= $this->uri->segment(2);
        $this->u3		= $this->uri->segment(3);
        $this->u4		= $this->uri->segment(4);
        $this->u5		= $this->uri->segment(5);
        $this->u6		= $this->uri->segment(6);

        $this->load->model('M_Universal', 'universal');
        $this->load->model('M_Mhs', 'mhs');
    }
    
    public function index()
    {
        if ($this->u2 == null)
        {
            $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
            $data['page'] = 'v_dashboard';
            $data['content'] = 'Dashboard';
            $data['mahasiswa'] = $this->mhs->getFullData($this->nik);
            $data['bukti_tf'] = $this->universal->getOne(['nik' => $this->nik], 'bukti_tf');

            $this->template($data);
        }
        else if ($this->u2 == 'buktiTf')
        {
            $nik = $this->nik;
            $upload_buktiTf = $_FILES['buktiTf']['name'];

            if ($upload_buktiTf) {
                
                $this->load->library('upload');

                $dir = date('Y-m');

                if( is_dir('upload/berkasMhs/buktiTf/'.$dir) === false )
                {
                    mkdir('upload/berkasMhs/buktiTf/'. $dir);
                }

                $config['upload_path']          = './upload/berkasMhs/buktiTf/' . $dir;
                $config['allowed_types']        = 'jpg|jpeg|png';
                $config['max_size']             = 3072; // 3 mb
                $config['remove_spaces']        = TRUE;
                $config['detect_mime']	        = true;
                $config['encrypt_name']         = true;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('buktiTf')) {
                    $this->session->set_flashdata('flash-error', $this->upload->display_errors());
                } else {

                    $upload_data = $this->upload->data();
                    $dataSebelumnya = $this->universal->getOne(['nik' => $nik], 'bukti_tf');

                    if ($dataSebelumnya) {
                        unlink(FCPATH . 'upload/berkasMhs/buktiTf/' . $dataSebelumnya->nama_file);
                        $data = [
                            "nama_file" => $dir. '/' .$upload_data['file_name'],
                            "status"    => 0
                        ];

                        $update = $this->universal->update($data, ['nik' => $nik], 'bukti_tf');
                        
                    } else {
                        $data = [
                            "nik"       => $nik,
                            "nama_file"    => $dir. '/' .$upload_data['file_name'],
                            "status"    => 0
                        ];

                        $this->universal->insert($data, 'bukti_tf');
                    }

                    $this->session->set_flashdata('flash-sukses', 'Bukti Pembayaran berhasil diunggah');
                }
            }

            redirect('dashboard', 'refresh');
        }
        
    }

    public function template($params = array())
    {
        $this->load->view('template', $params);
    }

    private function _lengkapiData()
    {
        $data['title'] = 'PMB POLITEKNIK HARAPAN BERSAMA';
        $data['page'] = 'v_lengkapiData';
        $data['content'] = 'Lengkapi Data';
        $data['mahasiswa'] = $this->mhs->getFullData($this->nik);
        $data['provinsi'] = $this->universal->getOrderBy('', 'provinsi', 'nama', '', '');
        $data['prodi'] = $this->universal->getOrderBy('', 'prodi', 'nama', '', '');
        $data['penghasilan'] = $this->universal->getMulti('', 'penghasilan');
        $data['keb_khusus'] = $this->universal->getMulti('', 'keb_khusus');
        $data['berkas'] = $this->universal->getOne('', 'berkas_mhs');

        if (!$data['berkas'])
        {
            $data['berkas'] = [
                'nik'       => null,
                'ijasah'    => null,
                'akta'      => null,
                'ktp'       => null,
                'kk'        => null
            ];

            $data['berkas'] = (object) $data['berkas'];
        }

        $id_ayah = $data['mahasiswa']->id_ayah;
        $id_ibu = $data['mahasiswa']->id_ibu;
        $data['keb_ayah'] = $this->mhs->getKebKhusus('a'.$id_ayah, 'ayah_calon_mhs', 'id_ayah');
        $data['keb_ibu'] = $this->mhs->getKebKhusus('i'.$id_ibu, 'ibu_calon_mhs', 'id_ibu');
        $data['keb_mhs'] = $this->mhs->getKebKhusus($this->nik, 'calon_mhs', 'nik');
        
        if (!$data['keb_ayah'])
        {
            $data['keb_ayah'] = [];
        }
        else
        {
            foreach ($data['keb_ayah'] as $hasil)
            {
                $data['keb_ayah'][] = $hasil->id_kebKhusus;
            }
        }
        if (!$data['keb_ibu'])
        {
            $data['keb_ibu'] = [];
        }
        else
        {
            foreach ($data['keb_ibu'] as $hasil)
            {
                $data['keb_ibu'][] = $hasil->id_kebKhusus;
            }
        }
        if (!$data['keb_mhs'])
        {
            $data['keb_mhs'] = [];
        }
        else
        {
            foreach ($data['keb_mhs'] as $hasil)
            {
                $data['keb_mhs'][] = $hasil->id_kebKhusus;
            }
        }
        $this->template($data);
    }

    public function lengkapi_data()
    {
        if ($this->u3 == null)
        {
            $this->_lengkapiData();
        }
        else if ($this->u3 == 'simpan')
        {
            // mahasiswa
            $this->form_validation->set_rules('nik', 'NIK', 'required|min_length[16]|max_length[16]|numeric');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required|alpha|min_length[3]');
            $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|min_length[10]|max_length[10]');
            $this->form_validation->set_rules('agama', 'Agama', 'required|min_length[5]');
            $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|min_length[9]');
            $this->form_validation->set_rules('status', 'Status', 'required|alpha|min_length[6]');
            $this->form_validation->set_rules('tempat_tinggal', 'Tempat Tinggal', 'required|min_length[4]');
            $this->form_validation->set_rules('no_hp', 'No Telephon', 'required|numeric|min_length[10]|max_length[13]');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[10]');
            $this->form_validation->set_rules('kps', 'KPS', 'required|trim|alpha|min_length[2]');
            $this->form_validation->set_rules('npsn', 'NPSN Sekolah', 'required|numeric|min_length[8]|max_length[8]');
            $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required|min_length[8]');
            $this->form_validation->set_rules('provinsi', 'Provinsi', 'required|alpha_numeric');
            $this->form_validation->set_rules('kab_kota', 'Kab / Kota', 'required|alpha_numeric');
            $this->form_validation->set_rules('jurusan', 'Jurusan', 'required|min_length[3]');
            $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required|numeric|min_length[4]|max_length[4]');
            $this->form_validation->set_rules('prodi', 'Prodi', 'required|alpha_numeric');
            $this->form_validation->set_rules('kelas', 'Kelas', 'required|alpha_numeric');
            $this->form_validation->set_rules('keb_khusus_mhs[]', 'keb. khusus', 'required');

            // ibu
            $this->form_validation->set_rules('nama_ibu', 'Nama', 'required');
            $this->form_validation->set_rules('tempat_ibu', 'Tempat Lahir', 'required|alpha|min_length[3]');
            $this->form_validation->set_rules('tgl_lahir_ibu', 'Tanggal Lahir', 'required|min_length[10]|max_length[10]');
            $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan', 'required|min_length[5]');
            $this->form_validation->set_rules('pendidikan_ibu', 'Pendidikan', 'required|trim|alpha_numeric|min_length[2]|max_length[3]');
            $this->form_validation->set_rules('penghasilan_ibu', 'Penghasilan', 'required|alpha_numeric');
            $this->form_validation->set_rules('keb_khusus_ibu[]', 'keb. khusus', 'required|alpha_numeric');

            // ayah
            $this->form_validation->set_rules('nama_ayah', 'Nama', 'required');
            $this->form_validation->set_rules('tempat_ayah', 'Tempat Lahir', 'required|alpha|min_length[3]');
            $this->form_validation->set_rules('tgl_lahir_ayah', 'Tanggal Lahir', 'required|min_length[10]|max_length[10]');
            $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan', 'required|min_length[5]');
            $this->form_validation->set_rules('pendidikan_ayah', 'Pendidikan', 'required|trim|alpha_numeric|min_length[2]|max_length[3]');
            $this->form_validation->set_rules('penghasilan_ayah', 'Penghasilan', 'required|alpha_numeric');
            $this->form_validation->set_rules('keb_khusus_ayah[]', 'keb. khusus', 'required|alpha_numeric');

            $nama_wali = $this->input->post('nama_wali', TRUE);
            if ($nama_wali)
            {
                $this->form_validation->set_rules('nama_wali', 'Nama', 'required');
                $this->form_validation->set_rules('tempat_wali', 'Tempat Lahir', 'required|alpha|min_length[3]');
                $this->form_validation->set_rules('tgl_lahir_wali', 'Tanggal Lahir', 'required|min_length[10]|max_length[10]');
                $this->form_validation->set_rules('pekerjaan_wali', 'Pekerjaan', 'required|min_length[5]');
                $this->form_validation->set_rules('pendidikan_wali', 'Pendidikan', 'required|trim|alpha_numeric|min_length[2]|max_length[3]');
                $this->form_validation->set_rules('penghasilan_wali', 'Penghasilan', 'required|alpha_numeric');
            }

            if ($this->form_validation->run() == false) {
                $this->_lengkapiData();
            } else {
                
                $this->_tabelMhs();

                $this->_uploadBerkas();

                $this->_tabelIbu();

                $this->_tabelAyah();

                if($nama_wali)
                {
                    $this->_tabelWali();
                }

                $this->session->set_flashdata('flash-sukses', 'Data berhasil diupdate');
                redirect('dashboard/lengkapi_data', 'refresh');
            }
        }
        
    }

    public function kabupaten()
    {
        $id_prov = $this->input->post('id_prov', TRUE);
        $data['kabupaten'] = $this->universal->getOrderBy(['id_prov' => dekrip($id_prov)], 'kabupaten', 'nama');
        $data['token'] = $this->security->get_csrf_hash();

        echo json_encode($data);
    }

    function get_npsn()
    {
        $npsn = $this->input->post('npsn', TRUE);
        $url = "https://referensi.data.kemdikbud.go.id/tabs.php?npsn=" . $npsn;
        $ch = curl_init($url);
        curl_setopt_array($ch, [CURLOPT_RETURNTRANSFER => true]);
        $get = curl_exec($ch);
        $res = checkNPSN($get);
        if ($res)
        {
            $sekolah = $res['nama'];
        }
        curl_close($ch);
        if (!$res) {
            $hasil = [
                'npsn'              => $npsn,
                'nama_sekolah'      => 'Sekolah tidak ditemunkan',
                'token'             => $this->security->get_csrf_hash(),
            ];
        } else {
            $hasil = [
                'npsn'              => $npsn,
                'nama_sekolah'      => $sekolah,
                'token'             => $this->security->get_csrf_hash(),
            ];
        }
        echo json_encode($hasil);
    }

    private function _tabelMhs()
    {
        $nik_anak = $this->nik;
        // tabel mahasiswa
        $dataMhs = [
            'nama'              => strtoupper($this->input->post('nama', TRUE)),
            'tempat_lahir'      => strtoupper($this->input->post('tempat', TRUE)),
            'tgl_lahir'         => $this->input->post('tgl_lahir', TRUE),
            'agama'             => $this->input->post('agama', TRUE),
            'jk'                => dekrip($this->input->post('jk', TRUE)),
            'status'            => $this->input->post('status', TRUE),
            'tempat_tinggal'    => $this->input->post('tempat_tinggal', TRUE),
            'no_hp'             => $this->input->post('no_hp', TRUE),
            'email'             => $this->input->post('email', TRUE),
            'kps'               => $this->input->post('kps', TRUE),
            'alamat'            => $this->input->post('alamat', TRUE),
            'npsn'              => $this->input->post('npsn', TRUE),
            'nama_sekolah'      => strtoupper($this->input->post('nama_sekolah', TRUE)),
            'jurusan'           => $this->input->post('jurusan', TRUE),
            'tahun_lulus'       => $this->input->post('tahun_lulus', TRUE),
            'tgl_lahir'         => $this->input->post('tgl_lahir', TRUE),
            'provinsi'          => dekrip($this->input->post('provinsi', TRUE)),
            'kab_kota'          => dekrip($this->input->post('kab_kota', TRUE)),
            'prodi'             => dekrip($this->input->post('prodi', TRUE)),
            'kelas'             => dekrip($this->input->post('kelas', TRUE))
        ];

        $updateMhs = $this->universal->update($dataMhs, ['nik' => $nik_anak], 'calon_mhs');
        if ($updateMhs)
        {
            $keb_khusus_mhs = $this->input->post('keb_khusus_mhs', TRUE);

            $data_keb_mhs = array();
            
            foreach ($keb_khusus_mhs as $hasil)
            {
                array_push($data_keb_mhs, [
                    "id_user" => $nik_anak,
                    "id_kebKhusus" => dekrip($hasil)
                ]);
            }

            $hapusKebMhs = $this->universal->delete(['id_user' => $nik_anak], 'kebutuhan_khusus');
            if ($hapusKebMhs)
            {
                $insertKebMhs = $this->universal->insert_batch($data_keb_mhs, 'kebutuhan_khusus');
            }
            else
            {
                $insertKebMhs = $this->universal->insert_batch($data_keb_mhs, 'kebutuhan_khusus');
            }
        }
    }

    private function _uploadBerkas()
    {
        $nik = $this->nik;
        $upload_ijasah = $_FILES['ijasah']['name'];
        $upload_akta = $_FILES['akta']['name'];
        $upload_ktp = $_FILES['ktp']['name'];
        $upload_kk = $_FILES['kk']['name'];

        if ($upload_ijasah) {

            $this->load->library('upload');

            $dir = date('Y-m');

            if( is_dir('upload/berkasMhs/ijasah/'.$dir) === false )
            {
                mkdir('upload/berkasMhs/ijasah/'. $dir);
            }

            $config['upload_path']          = './upload/berkasMhs/ijasah/' . $dir;
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 3072; // 3 mb
            $config['remove_spaces']        = TRUE;
            $config['detect_mime']	        = true;
            $config['encrypt_name']         = true;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('ijasah')) {
                $this->session->set_flashdata('ijasah', $this->upload->display_errors());
            } else {

                $upload_data = $this->upload->data();
                $dataSebelumnya = $this->universal->getOne(['nik' => $nik], 'berkas_mhs');

                if ($dataSebelumnya) {
                    if ($dataSebelumnya->ijasah)
                    {
                        unlink(FCPATH . 'upload/berkasMhs/ijasah/' . $dataSebelumnya->ijasah);
                    }
                    $data = [
                        "ijasah" => $dir. '/' .$upload_data['file_name']
                    ];

                    $update = $this->universal->update($data, ['nik' => $nik], 'berkas_mhs');
                    
                } else {
                    $data = [
                        "nik"       => $nik,
                        "ijasah"    => $dir. '/' .$upload_data['file_name']
                    ];

                    $this->universal->insert($data, 'berkas_mhs');
                }

                $this->session->set_flashdata('ijasah', 'Ijasah berhasil diunggah');
            }
        }

        if ($upload_akta) {
            $this->load->library('upload');

            $dir = date('Y-m');

            if( is_dir('upload/berkasMhs/akta/'.$dir) === false )
            {
                mkdir('upload/berkasMhs/akta/'. $dir);
            }

            $config['upload_path']          = './upload/berkasMhs/akta/' . $dir;
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 3072; // 3 mb
            $config['remove_spaces']        = TRUE;
            $config['detect_mime']	        = true;
            $config['encrypt_name']         = true;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('akta')) {
                $this->session->set_flashdata('akta', $this->upload->display_errors());
            } else {

                $upload_data = $this->upload->data();
                $dataSebelumnya = $this->universal->getOne(['nik' => $nik], 'berkas_mhs');

                if ($dataSebelumnya) {
                    if ($dataSebelumnya->akta)
                    {
                        unlink(FCPATH . 'upload/berkasMhs/akta/' . $dataSebelumnya->akta);
                    }
                    $data = [
                        "akta" => $dir. '/' .$upload_data['file_name']
                    ];

                    $update = $this->universal->update($data, ['nik' => $nik], 'berkas_mhs');
                    
                } else {
                    $data = [
                        "nik"       => $nik,
                        "akta"    => $dir. '/' .$upload_data['file_name']
                    ];

                    $this->universal->insert($data, 'berkas_mhs');
                }

                $this->session->set_flashdata('akta', 'Akta berhasil diunggah');
            }
        }

        if ($upload_ktp) {
            $this->load->library('upload');

            $dir = date('Y-m');

            if( is_dir('upload/berkasMhs/ktp/'.$dir) === false )
            {
                mkdir('upload/berkasMhs/ktp/'. $dir);
            }

            $config['upload_path']          = './upload/berkasMhs/ktp/' . $dir;
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 3072; // 3 mb
            $config['remove_spaces']        = TRUE;
            $config['detect_mime']	        = true;
            $config['encrypt_name']         = true;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('ktp')) {
                $this->session->set_flashdata('ktp', $this->upload->display_errors());
            } else {

                $upload_data = $this->upload->data();
                $dataSebelumnya = $this->universal->getOne(['nik' => $nik], 'berkas_mhs');

                if ($dataSebelumnya) {
                    if ($dataSebelumnya->ktp)
                    {
                        unlink(FCPATH . 'upload/berkasMhs/ktp/' . $dataSebelumnya->ktp);
                    }
                    $data = [
                        "ktp" => $dir. '/' .$upload_data['file_name']
                    ];

                    $update = $this->universal->update($data, ['nik' => $nik], 'berkas_mhs');
                    
                } else {
                    $data = [
                        "nik"       => $nik,
                        "ktp"    => $dir. '/' .$upload_data['file_name']
                    ];

                    $this->universal->insert($data, 'berkas_mhs');
                }

                $this->session->set_flashdata('ktp', 'KTP berhasil diunggah');
            }
        }

        if ($upload_kk) {
            $this->load->library('upload');

            $dir = date('Y-m');

            if( is_dir('upload/berkasMhs/kk/'.$dir) === false )
            {
                mkdir('upload/berkasMhs/kk/'. $dir);
            }

            $config['upload_path']          = './upload/berkasMhs/kk/' . $dir;
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 3072; // 3 mb
            $config['remove_spaces']        = TRUE;
            $config['detect_mime']	        = true;
            $config['encrypt_name']         = true;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('kk')) {
                $this->session->set_flashdata('kk', $this->upload->display_errors());
            } else {

                $upload_data = $this->upload->data();
                $dataSebelumnya = $this->universal->getOne(['nik' => $nik], 'berkas_mhs');

                if ($dataSebelumnya) {
                    if ($dataSebelumnya->kk)
                    {
                        unlink(FCPATH . 'upload/berkasMhs/kk/' . $dataSebelumnya->kk);
                    }
                    $data = [
                        "kk" => $dir. '/' .$upload_data['file_name']
                    ];

                    $update = $this->universal->update($data, ['nik' => $nik], 'berkas_mhs');
                    
                } else {
                    $data = [
                        "nik"       => $nik,
                        "kk"    => $dir. '/' .$upload_data['file_name']
                    ];

                    $this->universal->insert($data, 'berkas_mhs');
                }

                $this->session->set_flashdata('kk', 'KK berhasil diunggah');
            }
        }
    }
    
    private function _tabelIbu()
    {
        $nik_anak = $this->nik;
        // tabel ibu
        $data_ibu = $this->universal->getOne(['nik_anak' => $nik_anak], 'ibu_calon_mhs');

        if($data_ibu)
        {
            $id_ibu = $data_ibu->id_ibu;
            $dataIbu = [
                'nama_ibu'          => strtoupper($this->input->post('nama_ibu', TRUE)),
                'tempat_ibu'        => strtoupper($this->input->post('tempat_ibu', TRUE)),
                'tgl_lahir_ibu'     => $this->input->post('tgl_lahir_ibu', TRUE),
                'pendidikan_ibu'    => $this->input->post('pendidikan_ibu', TRUE),
                'pekerjaan_ibu'     => $this->input->post('pekerjaan_ibu', TRUE),
                'penghasilan_ibu'   => dekrip($this->input->post('penghasilan_ibu', TRUE))
            ];

            $updateDataIbu = $this->universal->update($dataIbu, ['id_ibu' => $id_ibu], 'ibu_calon_mhs');
            
        }
        else
        {
            $hasil = $this->universal->getOrderBy('', 'ibu_calon_mhs', 'id_ibu', 'DESC', 1);
            if ($hasil)
            {
                $id_ibu = $hasil[0]->id_ibu + 1;
            }
            else
            {
                $id_ibu = 1;
            }
            $dataIbu = [
                'id_ibu'            => $id_ibu,
                'nik_anak'          => $this->input->post('nik', TRUE),
                'nama_ibu'          => strtoupper($this->input->post('nama_ibu', TRUE)),
                'tempat_ibu'        => strtoupper($this->input->post('tempat_ibu', TRUE)),
                'tgl_lahir_ibu'     => $this->input->post('tgl_lahir_ibu', TRUE),
                'pendidikan_ibu'    => $this->input->post('pendidikan_ibu', TRUE),
                'pekerjaan_ibu'     => $this->input->post('pekerjaan_ibu', TRUE),
                'penghasilan_ibu'   => dekrip($this->input->post('penghasilan_ibu', TRUE))
            ];

            $insertDataIbu = $this->universal->insert($dataIbu, 'ibu_calon_mhs');
        }

        $keb_khusus_ibu = $this->input->post('keb_khusus_ibu', TRUE);

        $data_keb_ibu = array();
        
        foreach ($keb_khusus_ibu as $hasil)
        {
            array_push($data_keb_ibu, [
                "id_user" => 'i'.$id_ibu,
                "id_kebKhusus" => dekrip($hasil)
            ]);
        }

        $hapusKebIbu = $this->universal->delete(['id_user' => 'i'.$id_ibu], 'kebutuhan_khusus');
        if ($hapusKebIbu)
        {
            $insertKebIbu = $this->universal->insert_batch($data_keb_ibu, 'kebutuhan_khusus');
        }
        else
        {
            $insertKebIbu = $this->universal->insert_batch($data_keb_ibu, 'kebutuhan_khusus');
        }
    }

    private function _tabelAyah()
    {
        $nik_anak = $this->nik;
        // tabel ayah
        $data_ayah = $this->universal->getOne(['nik_anak' => $nik_anak], 'ayah_calon_mhs');

        if($data_ayah)
        {
            $id_ayah = $data_ayah->id_ayah;
            $dataAyah = [
                'nama_ayah'         => strtoupper($this->input->post('nama_ayah', TRUE)),
                'tempat_ayah'       => strtoupper($this->input->post('tempat_ayah', TRUE)),
                'tgl_lahir_ayah'    => $this->input->post('tgl_lahir_ayah', TRUE),
                'pendidikan_ayah'   => $this->input->post('pendidikan_ayah', TRUE),
                'pekerjaan_ayah'    => $this->input->post('pekerjaan_ayah', TRUE),
                'penghasilan_ayah'  => dekrip($this->input->post('penghasilan_ayah', TRUE))
            ];

            $updateDataAyah = $this->universal->update($dataAyah, ['id_ayah' => $id_ayah], 'ayah_calon_mhs');
        }
        else
        {
            $hasil = $this->universal->getOrderBy('', 'ayah_calon_mhs', 'id_ayah', 'DESC', 1);
            if ($hasil)
            {
                $id_ayah = $hasil[0]->id_ayah + 1;
            }
            else
            {
                $id_ayah = 1;
            }
            $dataAyah = [
                'id_ayah'           => $id_ayah,
                'nik_anak'          => $this->input->post('nik', TRUE),
                'nama_ayah'         => strtoupper($this->input->post('nama_ayah', TRUE)),
                'tempat_ayah'       => strtoupper($this->input->post('tempat_ayah', TRUE)),
                'tgl_lahir_ayah'    => $this->input->post('tgl_lahir_ayah', TRUE),
                'pendidikan_ayah'   => $this->input->post('pendidikan_ayah', TRUE),
                'pekerjaan_ayah'    => $this->input->post('pekerjaan_ayah', TRUE),
                'penghasilan_ayah'  => dekrip($this->input->post('penghasilan_ayah', TRUE))
            ];

            $insertDataAyah = $this->universal->insert($dataAyah, 'ayah_calon_mhs');
        }

        $keb_khusus_ayah = $this->input->post('keb_khusus_ayah', TRUE);
        $data_keb_ayah = array();
        
        foreach ($keb_khusus_ayah as $hasil)
        {
            array_push($data_keb_ayah, [
                "id_user" => 'a'.$id_ayah,
                "id_kebKhusus" => dekrip($hasil)
            ]);
        }

        $hapusKebAyah = $this->universal->delete(['id_user' => 'a'.$id_ayah], 'kebutuhan_khusus');
        if ($hapusKebAyah)
        {
            $insertKebIbu = $this->universal->insert_batch($data_keb_ayah, 'kebutuhan_khusus');
        }
        else
        {
            $insertKebIbu = $this->universal->insert_batch($data_keb_ayah, 'kebutuhan_khusus');
        }
    }

    private function _tabelWali()
    {
        $nik_anak = $this->nik;
        // tabel wali
        $data_wali = $this->universal->getOne(['nik_anak' => $nik_anak], 'wali_calon_mhs');

        if($data_wali)
        {
            $id_wali = $data_wali->id_wali;
            $dataWali = [
                'nama_wali'         => strtoupper($this->input->post('nama_wali', TRUE)),
                'tempat_wali'       => strtoupper($this->input->post('tempat_wali', TRUE)),
                'tgl_lahir_wali'    => $this->input->post('tgl_lahir_wali', TRUE),
                'pendidikan_wali'   => $this->input->post('pendidikan_wali', TRUE),
                'pekerjaan_wali'    => $this->input->post('pekerjaan_wali', TRUE),
                'penghasilan_wali'  => dekrip($this->input->post('penghasilan_wali', TRUE))
            ];

            $updateDataAyah = $this->universal->update($dataWali, ['id_wali' => $id_wali], 'wali_calon_mhs');
        }
        else
        {
            $hasil = $this->universal->getOrderBy('', 'wali_calon_mhs', 'id_wali', 'DESC', 1);
            if ($hasil)
            {
                $id_wali = $hasil[0]->id_wali + 1;
            }
            else
            {
                $id_wali = 1;
            }
            $dataWali = [
                'id_wali'           => $id_wali,
                'nik_anak'          => $this->input->post('nik', TRUE),
                'nama_wali'         => strtoupper($this->input->post('nama_wali', TRUE)),
                'tempat_wali'       => strtoupper($this->input->post('tempat_wali', TRUE)),
                'tgl_lahir_wali'    => $this->input->post('tgl_lahir_wali', TRUE),
                'pendidikan_wali'   => $this->input->post('pendidikan_wali', TRUE),
                'pekerjaan_wali'    => $this->input->post('pekerjaan_wali', TRUE),
                'penghasilan_wali'  => dekrip($this->input->post('penghasilan_wali', TRUE))
            ];

            $insertDataWali = $this->universal->insert($dataWali, 'wali_calon_mhs');
        }
    }

    public function berkasMhs($berkas)
    {
        $data = [
            'title'     => 'Berkas Upload',
            'berkas'    => $berkas 
        ];

        $this->load->view('v_berkasView', $data);
    }

    function cek()
    {
        $dir = "new_folder_name";

        if( is_dir($dir) === false )
        {
            mkdir($dir);
        }

        die();

        $data = $this->universal->getMulti('', 'keb_khusus');
        
        foreach ($data as $hasil)
        {
            $people[] = $hasil->nama;
        }

        // echo json_encode($people)

        echo in_array("Tidak Ada", $people) ? 'Match found' : 'Match not found';

    }

    function tes_wa(){
        $curl = curl_init();
        $token = "eM4QnZXld70bK8zMf85t8dznBN27KcQ3n7IFMgRyDgZyiWN3CLKrX7UjzcDbMUTi";
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array(
                "Authorization: $token",
            )
        );
    
            $data = [
            'phone' => '085747771509',
            'message' => 'hallo coba bas',
        ];
    
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_URL, "https://console.wablas.com/api/send-message");
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($curl);
        //curl_close($curl);
        echo "<pre>";
        print_r($result);

        if (curl_errno($curl)) {
            $error_msg = curl_error($curl);
            var_dump($error_msg);
        }
        curl_close($curl);
           
    }

}

/* End of file Mahasiswa.php */
 ?>