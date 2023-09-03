<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_m', 'galery', true);
        $this->load->model('video_m', 'video', true);
        $this->load->model('menu_m', 'menu', true);
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Galery";
        $data['menu'] = $this->menu->getAll();
        $data['image'] = $this->galery->getAllImage();
        $data['video'] = $this->video->getAllVideo();
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/galery/index');
        $this->load->view('_partials/footer');
    }


    
    // Image

    public function tambahFoto()
    {
        $rules = $this->galery->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $this->index();
        } else {
            $this->galery->saveImage();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Foto berhasil ditambahkan!</div>');
            redirect('admin/galery');
        }
    }

    public function editFoto($id = null)
    {
        $rules = $this->galery->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Galery";
            $data['menu'] = $this->menu->getAll();
            $data['foto'] = $this->galery->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/galery/editFoto');
            $this->load->view('_partials/footer');
        } else {
            $this->galery->updateImage();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Foto berhasil di-update!</div>');
            redirect('admin/galery');
        }
    }

    public function hapusFoto($id = null)
    {
        if (!isset($id))
            show_404();
        $delete = $this->galery->deleteImage($id);

        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Foto berhasil dihapus!</div>');
            redirect('admin/galery');
        }
    }
    
    
    // Video

    public function tambahVideo()
    {
        $rules = $this->video->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $this->index();
        } else {
            $this->video->saveVideo();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Video berhasil ditambahkan!</div>');
            redirect('admin/galery');
        }
    }

    public function editVideo($id = null)
    {
        $rules = $this->video->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Galery";
            $data['menu'] = $this->menu->getAll();
            $data['videos'] = $this->video->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/galery/editVideo');
            $this->load->view('_partials/footer');
        } else {
            $this->video->updateVideo();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Video berhasil di-update!</div>');
            redirect('admin/galery');
        }
    }

    public function hapusVideo($id = null)
    {
        if (!isset($id))
            show_404();
        $delete = $this->video->deleteVideo($id);

        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Video berhasil dihapus!</div>');
            redirect('admin/galery');
        }
    }
}
