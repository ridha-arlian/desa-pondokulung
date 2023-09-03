<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_m');
        $this->load->model('artikel_m');
        $this->load->model('penduduk_m');
    }
    public function index()
    {
        $penduduk = $this->penduduk_m;
        
        $gender = $this->penduduk_m;
        $genders = $this->penduduk_m;
        
        $balita = $this->penduduk_m;
        $balitas = $this->penduduk_m;
        $balitass = $this->penduduk_m;
        
        $dewasa = $this->penduduk_m;
        $dewasas = $this->penduduk_m;
        $dewasass = $this->penduduk_m;
        
        $lansia = $this->penduduk_m;
        $lansias = $this->penduduk_m;
        $lansiass = $this->penduduk_m;
        
        $data['penduduk'] = $penduduk->countAll();
        
        $data['gender'] = $gender->getByGenderPria();
        $data['genders'] = $genders->getByGenderWanita();
        
        $data['balita'] = $balita->getByCountBalita();
        $data['balitas'] = $balitas->getByBalitaPria();
        $data['balitass'] = $balitass->getByBalitaWanita();
        
        $data['dewasa'] = $dewasa->getByCountDewasa();
        $data['dewasas'] = $dewasas->getByDewasaPria();
        $data['dewasass'] = $dewasass->getByDewasaWanita();

        $data['lansia'] = $lansia->getByCountLansia();
        $data['lansias'] = $lansias->getByLansiaPria();
        $data['lansiass'] = $lansiass->getByLansiaWanita();
        
        
        $kategori = $this->kategori_m;
        $artikel = $this->artikel_m;
        $data['kategori'] = $kategori->getAll();
        $data['news'] = $artikel->kabarTerkini();
        $data['recent'] = $artikel->recentArtikel();
        $data['title'] = "Selamat Datang";
        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/slide-show');
        $this->load->view('themes/kabar-terkini', $data);
        $this->load->view('themes/struktur-organisasi');
        $this->load->view('themes/jumlah-penduduk');
        $this->load->view('themes/footer');
    }
}
