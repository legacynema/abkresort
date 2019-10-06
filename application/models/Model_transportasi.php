<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_transportasi extends CI_Model{


private $_table = "transportasi";
    public $id_transportasi;
    public $id_jenis_transportasi;
    public $keberangkatan;
    public $tujuan;
    public $harga;
    public $foto = "default.jpg";


    public function rules()
    {
        return [
            [
                'field' => 'id_jenis_transportasi',
                'label' => 'id_jenis_transportasi',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_transportasi)
    {
        return $this->db->get_where($this->_table, ["id_transportasi" => $id_transportasi])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_jenis_transportasi = $post["id_jenis_transportasi"];
        $this->keberangkatan = $post["keberangkatan"];
        $this->tujuan = $post["tujuan"];
        $this->harga = $post["harga"];
        
        

        // $this->foto = $this->_uploadImage();


        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id_transportasi = $post["id_transportasi"];
        $this->id_jenis_transportasi = $post["id_jenis_transportasi"];
        $this->keberangkatan = $post["keberangkatan"];
        $this->tujuan = $post["tujuan"];
        $this->harga = $post["harga"];
        // $this->foto = $post["foto"];
        

        
        // if (!empty($_FILES["foto"]["name"])) {
        //     $this->foto = $this->_uploadImage();
        // } else {
        //     $this->foto = $post["old_image"];
        // }

        $this->db->update($this->_table, $this, array("id_transportasi" => $post["id_transportasi"]));
    }

    public function delete($id_transportasi)
    {
        // $this->_deleteImage($id_transportasi);
        return $this->db->delete($this->_table, array("id_transportasi" => $id_transportasi));
    }

    // private function _uploadImage()
    // {
    //     $config['upload_path']          = './foto/user';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['file_name']            = $this->id_jenis_transportasi;
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

    // private function _deleteImage($id_transportasi)
    // {
    //     $img = $this->getById($id_transportasi);
    //     if ($img->foto != "default.jpg") {
    //         $filename = explode(".", $img->foto)[0];
    //         return array_map('unlink', glob(FCPATH . "foto/user/$filename.*"));
    //     }
    // }
}