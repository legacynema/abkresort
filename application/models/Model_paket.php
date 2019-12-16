<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_paket extends CI_Model{


private $_table = "paket";
    public $id_paket;
    public $id_kota;
    public $nama_paket;
    public $id_penginapan;
    public $id_transport;
    public $id_wisata;
    public $harga;
    public $post_date
    ;
    public $foto = "default.jpg";

    public function rules()
    {
        return [
            [
                'field' => 'id_paket',
                'label' => 'id_paket',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_paket)
    {
        return $this->db->get_where($this->_table, ["id_paket" => $id_paket])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kota = $post["id_kota"];
        $this->nama_paket = $post["nama_paket"];
        $this->id_penginapan = $post["id_penginapan"];
        $this->id_wisata = $post["id_wisata"];
        $this->id_transport = $post["id_transport"];
        $this->harga = $post["harga"];
        $this->post_date = date('Y-m-d');
        $this->foto = $this->_uploadImage();


        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id_paket = $post["id_paket"];
        $this->nama_paket = $post["nama_paket"];
        $this->id_kota = $post["id_kota"];
        $this->id_penginapan = $post["id_penginapan"];
        $this->id_wisata = $post["id_wisata"];
        $this->id_transport = $post["id_transport"];
        $this->harga = $post["harga"];
        $this->post_date = date('Y-m-d');

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array("id_paket" => $post["id_paket"]));
    }

    public function delete($id_paket)
    {
        $this->_deleteImage($id_paket);
        return $this->db->delete($this->_table, array("id_paket" => $id_paket));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './foto/admin/paket';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->nama_paket;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($id_paket)
    {
        $img = $this->getById($id_paket);
        if ($img->foto != "default.jpg") {
            $filename = explode(".", $img->foto)[0];
            return array_map('unlink', glob(FCPATH . "foto/admin/paket/$filename.*"));
        }
    }

}