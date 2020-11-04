<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mhs extends CI_Model {

    public function getFullData($nik)
    {
        $this->db->select('calon_mhs.*, provinsi.nama as nama_provinsi, kabupaten.nama as nama_kab, prodi.nama as nama_prodi, ayah_calon_mhs.*, ibu_calon_mhs.*, wali_calon_mhs.*');
        $this->db->from('calon_mhs');
        $this->db->join('provinsi', 'calon_mhs.provinsi = provinsi.id_prov', 'left');
        $this->db->join('kabupaten', 'calon_mhs.kab_kota = kabupaten.id_kab', 'left');
        $this->db->join('prodi', 'calon_mhs.prodi = prodi.kd_prodi', 'left');
        $this->db->join('ayah_calon_mhs', 'calon_mhs.nik = ayah_calon_mhs.nik_anak', 'left');
        $this->db->join('ibu_calon_mhs', 'calon_mhs.nik = ibu_calon_mhs.nik_anak', 'left');
        $this->db->join('wali_calon_mhs', 'calon_mhs.nik = wali_calon_mhs.nik_anak', 'left');
        $this->db->where('nik', $nik);

        $data = $this->db->get()->row();
        return (count( (array)$data) > 0) ? $data : false;
    }

    public function getKebKhusus($id, $tabel, $onJoin)
    {
        $this->db->select('kebutuhan_khusus.*');
        $this->db->from('kebutuhan_khusus');
        $this->db->join($tabel, 'kebutuhan_khusus.id_user = ' . $tabel . "." . $onJoin, 'left');
        $this->db->where('id_user', $id);

        $data = $this->db->get()->result();
        return (count( (array)$data) > 0) ? $data : false;
    }

}

/* End of file M_Mhs.php */
 ?>