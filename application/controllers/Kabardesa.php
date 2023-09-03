<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kabardesa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_m', 'kategori', true);
        $this->load->model('kabardesa_m');
        $this->load->helper('text');
    }
    public function index()
    {
        $kabardesa = $this->kabardesa_m;
        $data['kategori'] = $this->kategori->getAll();
        $data['kabardesa'] = $kabardesa->getAll();
        $data['title'] = "Kabar Desa";
        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('kabardesa/index');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }

    public function readmores()
    {
        $kabardesa = $this->kabardesa_m;
        $id = $this->uri->segment(3);
        $data['kategori'] = $this->kategori->getAll();
        $data['kabardesa'] = $kabardesa->readMores($id);
        $data['title'] = "Kabar Desa";
        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('kabardesa/readmores');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }
}
