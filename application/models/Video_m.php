<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Video_m extends CI_Model
{
    private $_table = "video";

    /*
	 * Start backend 
	 */
    public function rules()
    {
        return [
            [
                'field' => 'title',
                'label' => 'Judul',
                'rules' => 'trim|required'
            ],

            [
                'field' => 'keterangan',
                'label' => 'Keterangan',
                'rules' => 'trim|required'
            ]
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row_array();
    }


    //VIDEO

    public function saveVideo()
    {
        $title = htmlspecialchars($this->input->post('title', true));
        $keterangan = htmlspecialchars($this->input->post('keterangan', true));
        $video = $this->_uploadVideo();
        $videos = [
            'title'        => $title,
            'keterangan'   => $keterangan,
            'video'        => $video,
            'date_created' => time()
        ];
        $this->db->insert($this->_table, $videos);
    }

    public function updateVideo()
    {
        if (!empty($_FILES["video"]["name"])) {
            $video = $this->_uploadVideo();
        } else {
            $video = $this->input->post('old_video');
        }
        $id = $this->input->post('id');
        $title = htmlspecialchars($this->input->post('title', true));
        $keterangan = htmlspecialchars($this->input->post('keterangan', true));
        $videos = [
            'id'           => $id,
            'title'        => $title,
            'keterangan'   => $keterangan,
            'video'        => $video,
            'date_created' => time()
        ];
        $this->db->update($this->_table, $videos, array('id' => $id));
    }


    private function _uploadVideo()
    {
        $configVideo['upload_path']          = './upload_file/videos/';
        $configVideo['allowed_types']        = 'mp4|mkv|mov|avi|wmv';
        $configVideo['overwrite']            = FALSE;
        $configVideo['max_size']             = 102400;

        $this->load->library('upload', $configVideo);
        $this->load->initialize($configVideo);

        if ($this->upload->do_upload('video')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

    private function _deleteVideo($id)
    {
        $video = $this->getById($id);
        if ($video['video'] != "default.jpg") {
            $filename = explode(".", $video['video'])[0];
            return array_map('unlink', glob(FCPATH . "upload_file/videos/$filename.*"));
        }
    }

    public function getAllVideo()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get($this->_table)->result_array();
    }

    public function deleteVideo($id)
    {
        $this->_deleteVideo($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }
}