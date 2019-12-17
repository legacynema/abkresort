<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_jenisTempat extends CI_Model{


private $_table = "jenis_tempat";
    public $id_jenis;
    public $nama;


    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_jenis)
    {
        return $this->db->get_where($this->_table, ["id_jenis" => $id_jenis])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];

        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id_jenis = $post["id_jenis"];
        $this->nama = $post["nama"];

        $this->db->update($this->_table, $this, array("id_jenis" => $post["id_jenis"]));
    }

    public function delete($id_jenis)
    {
        // $this->_deleteImage($id_jenis);
        return $this->db->delete($this->_table, array("id_jenis" => $id_jenis));
    }

    // private function _uploadImage()
    // {
    //     $config['upload_path']          = './foto/user';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['file_name']            = $this->nama;
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

    // private function _deleteImage($id_jenis)
    // {
    //     $img = $this->getById($id_jenis);
    //     if ($img->foto != "default.jpg") {
    //         $filename = explode(".", $img->foto)[0];
    //         return array_map('unlink', glob(FCPATH . "foto/user/$filename.*"));
    //     }
    // }
}