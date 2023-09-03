<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('galery_m', 'galery', true);
        $this->load->model('video_m', 'video', true);
        $this->load->model('kategori_m');
    }

    public function foto()
    {
        $kategori = $this->kategori_m;
        $data['title'] = "Foto";
        $data['kategori'] = $kategori->getAll();
        $data['image'] = $this->galery->getAllImage();
        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('galeri/foto');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }

    public function video()
    {
        $kategori = $this->kategori_m;
        $data['title'] = "Video";
        $data['kategori'] = $kategori->getAll();
        $data['video'] = $this->video->getAllVideo();
        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('galeri/video');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }
}
