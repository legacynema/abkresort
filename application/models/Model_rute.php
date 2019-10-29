<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_rute extends CI_Model{


private $_table = "rute";
    public $id_rute;
    public $id_transport;
    public $rute_asal;
    public $rute_tujuan;
    public $harga;
    // public $foto = "default.jpg";


    public function rules()
    {
        return [
            [
                'field' => 'id_transport',
                'label' => 'id_transport',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_rute)
    {
        return $this->db->get_where($this->_table, ["id_rute" => $id_rute])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_transport = $post["id_transport"];
        $this->rute_asal = $post["rute_asal"];
        $this->rute_tujuan = $post["rute_tujuan"];
        $this->harga = $post["harga"];
        
        

        // $this->foto = $this->_uploadImage();


        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id_rute = $post["id_rute"];
        $this->id_transport = $post["id_transport"];
        $this->rute_asal = $post["rute_asal"];
        $this->rute_tujuan = $post["rute_tujuan"];
        $this->harga = $post["harga"];
        // $this->foto = $post["foto"];
        

        
        // if (!empty($_FILES["foto"]["name"])) {
        //     $this->foto = $this->_uploadImage();
        // } else {
        //     $this->foto = $post["old_image"];
        // }

        $this->db->update($this->_table, $this, array("id_rute" => $post["id_rute"]));
    }

    public function delete($id_rute)
    {
        // $this->_deleteImage($id_rute);
        return $this->db->delete($this->_table, array("id_rute" => $id_rute));
    }

    // private function _uploadImage()
    // {
    //     $config['upload_path']          = './foto/user';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['file_name']            = $this->id_transport;
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

    // private function _deleteImage($id_rute)
    // {
    //     $img = $this->getById($id_rute);
    //     if ($img->foto != "default.jpg") {
    //         $filename = explode(".", $img->foto)[0];
    //         return array_map('unlink', glob(FCPATH . "foto/user/$filename.*"));
    //     }
    // }
}