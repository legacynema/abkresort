<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_wisata extends CI_Model{


private $_table = "wisata";
    public $id_wisata;
    public $nama_wisata;
    public $id_kota;
    public $harga;
    // public $foto = "default.jpg";


    public function rules()
    {
        return [
            [
                'field' => 'nama_wisata',
                'label' => 'nama_wisata',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_wisata)
    {
        return $this->db->get_where($this->_table, ["id_wisata" => $id_wisata])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_wisata = $post["nama_wisata"];
        $this->id_kota = $post["id_kota"];
        $this->harga = $post["harga"];

        // $this->foto = $this->_uploadImage();


        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id_wisata = $post["id_wisata"];
        $this->nama_wisata = $post["nama_wisata"];
        $this->id_kota = $post["id_kota"];
        $this->harga = $post["harga"];
        // $this->foto = $post["foto"];
        

        // if (!empty($_FILES["foto"]["name"])) {
        //     $this->foto = $this->_uploadImage();
        // } else {
        //     $this->foto = $post["old_image"];
        // }

        $this->db->update($this->_table, $this, array("id_wisata" => $post["id_wisata"]));
    }

    public function delete($id_wisata)
    {
        // $this->_deleteImage($id_wisata);
        return $this->db->delete($this->_table, array("id_wisata" => $id_wisata));
    }

    // private function _uploadImage()
    // {
    //     $config['upload_path']          = './foto/user';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['file_name']            = $this->nama_wisata;
    //     $config['overwrite']            = true;
    //     $config['max_size']             = 1024; // 1MB
    //     // $config['max_width']            = 1024;
    //     // $config['max_height']           = 768;

    //     $this->load->library('upload', $config);

    //     if ($this->upload->do_upload('foto')) {
    //         return $this->upload->data("file_name");
    //     }

    //     return "default.jpg";
    // }

    // private function _deleteImage($id_wisata)
    // {
    //     $img = $this->getById($id_wisata);
    //     if ($img->foto != "default.jpg") {
    //         $filename = explode(".", $img->foto)[0];
    //         return array_map('unlink', glob(FCPATH . "foto/user/$filename.*"));
    //     }
    // }
}