<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk_m extends CI_Model
{
    private $_table = "penduduk";

    /*
	 * Start backend 
	 */
    public function rules()
    {
        $this->form_validation->set_rules(
            'nik',
            'Nomor induk kependudukan',
            'trim|required|is_unique[penduduk.nik]',
            ['is_unique' => 'NIK ini sudah terdaftar!']
        );
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'trim|required'
        );

        $this->form_validation->set_rules(
            'gender',
            'Jenis kelamin',
            'trim|required'
        );

        $this->form_validation->set_rules(
            'usia',
            'Tahun lahir',
            'trim|required'
        );

        $this->form_validation->set_rules(
            'pendidikan',
            'Pendidikan',
            'trim|required'
        );

        $this->form_validation->set_rules(
            'pekerjaan',
            'Pekerjaan',
            'trim|required'
        );
    }

    public function editRules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],

            [
                'field' => 'gender',
                'label' => 'Jenis kelamin',
                'rules' => 'trim|required'
            ],

            [
                'field' => 'usia',
                'label' => 'Tahun lahir',
                'rules' => 'trim|required'
            ],

            [
                'field' => 'pendidikan',
                'label' => 'Pendidikan',
                'rules' => 'trim|required'
            ],

            [
                'field' => 'pekerjaan',
                'label' => 'Pekerjaan',
                'rules' => 'trim|required'
            ]
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nik" => $id])->row_array();
    }

    public function save()
    {
        $nik = htmlspecialchars($this->input->post('nik', true));
        $nama = htmlspecialchars($this->input->post('nama', true));
        $gender = htmlspecialchars($this->input->post('gender', true));
        $usia = date('Y') - htmlspecialchars($this->input->post('usia', true));
        $dusun = htmlspecialchars($this->input->post('dusun', true));
        $pendidikan = htmlspecialchars($this->input->post('pendidikan', true));
        $pekerjaan = htmlspecialchars($this->input->post('pekerjaan', true));
        $penduduk = [
            'nik'        => $nik,
            'nama'       => $nama,
            'gender'     => $gender,
            'usia'       => $usia,
            'dusun'      => $dusun,
            'pendidikan' => $pendidikan,
            'pekerjaan'  => $pekerjaan
        ];
        $this->db->insert($this->_table, $penduduk);
    }

    public function update()
    {
        $id = htmlspecialchars($this->input->post('nik', true));
        $nama = htmlspecialchars($this->input->post('nama', true));
        $gender = htmlspecialchars($this->input->post('gender', true));
        $usia = htmlspecialchars($this->input->post('usia', true));
        $dusun = htmlspecialchars($this->input->post('dusun', true));
        $pendidikan = htmlspecialchars($this->input->post('pendidikan', true));
        $pekerjaan = htmlspecialchars($this->input->post('pekerjaan', true));
        $penduduk = [
            'nik'        => $id,
            'nama'       => $nama,
            'gender'     => $gender,
            'usia'       => $usia,
            'dusun'      => $dusun,
            'pendidikan' => $pendidikan,
            'pekerjaan'  => $pekerjaan
        ];
        $this->db->update($this->_table, $penduduk, array('nik' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("nik" => $id));
    }
    /*
	 * End backend 
	 */

    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function countAll()
    {
        return $this->db->get($this->_table)->num_rows();
    }


    //Pria Wanita

    public function getByGenderPria()
    {
        $this->db->where('gender', 'Pria');
        return $this->db->get($this->_table)->num_rows();
    }

    public function getByGenderWanita()
    {
        $this->db->where('gender', 'Wanita');
        return $this->db->get($this->_table)->num_rows();
    }

    //Balita
    public function getByBalitaWanita()
    {
        $start_age='1';
        $end_age='5';
        $this->db->where('gender', 'Wanita');
        $this->db->where('usia BETWEEN "'. $start_age.' " and "'. $end_age.'"');
        return $this->db->get($this->_table)->num_rows();
    }
    
    public function getByBalitaPria()
    {
        $start_age='1';
        $end_age='5';
        $this->db->where('gender', 'Pria');
        $this->db->where('usia BETWEEN "'. $start_age.' " and "'. $end_age.'"');
        return $this->db->get($this->_table)->num_rows();
    }

    public function getByCountBalita()
    {
        $start_age='1';
        $end_age='5';
        $this->db->where('usia BETWEEN "'. $start_age.' " and "'. $end_age.'"');
        return $this->db->get($this->_table)->num_rows();
    }
    
    //Dewasa
    public function getByDewasaWanita()
    {
        $start_age='17';
        $end_age='59';
        $this->db->where('gender', 'Wanita');
        $this->db->where('usia BETWEEN "'. $start_age.' " and "'. $end_age.'"');
        return $this->db->get($this->_table)->num_rows();
    }
    
    public function getByDewasaPria()
    {
        $start_age='17';
        $end_age='59';
        $this->db->where('gender', 'Pria');
        $this->db->where('usia BETWEEN "'. $start_age.' " and "'. $end_age.'"');
        return $this->db->get($this->_table)->num_rows();
    }

    public function getByCountDewasa()
    {
        $start_age='17';
        $end_age='59';
        $this->db->where('usia BETWEEN "'. $start_age.' " and "'. $end_age.'"');
        return $this->db->get($this->_table)->num_rows();
    }

    //Lansia
    public function getByLansiaWanita()
    {
        $start_age='60';
        $end_age='100';
        $this->db->where('gender', 'Wanita');
        $this->db->where('usia BETWEEN "'. $start_age.' " and "'. $end_age.'"');
        return $this->db->get($this->_table)->num_rows();
    }
    
    public function getByLansiaPria()
    {
        $start_age='60';
        $end_age='100';
        $this->db->where('gender', 'Pria');
        $this->db->where('usia BETWEEN "'. $start_age.' " and "'. $end_age.'"');
        return $this->db->get($this->_table)->num_rows();
    }

    public function getByCountLansia()
    {
        $start_age='60';
        $end_age='100';
        $this->db->where('usia BETWEEN "'. $start_age.' " and "'. $end_age.'"');
        return $this->db->get($this->_table)->num_rows();
    }
}
