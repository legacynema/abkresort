<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_jenisTransport extends CI_Model{


private $_table = "jenis_transport";
    public $id_transport;
    public $nama_transport;


    public function rules()
    {
        return [
            [
                'field' => 'nama_transport',
                'label' => 'nama_transport',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_transport)
    {
        return $this->db->get_where($this->_table, ["id_transport" => $id_transport])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_transport = $post["nama_transport"];

        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id_transport = $post["id_transport"];
        $this->nama_transport = $post["nama_transport"];

        $this->db->update($this->_table, $this, array("id_transport" => $post["id_transport"]));
    }

    public function delete($id_transport)
    {
        // $this->_deleteImage($id_transport);
        return $this->db->delete($this->_table, array("id_transport" => $id_transport));
    }

    // private function _uploadImage()
    // {
    //     $config['upload_path']          = './foto/user';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['file_name']            = $this->nama_transport;
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

    // private function _deleteImage($id_transport)
    // {
    //     $img = $this->getById($id_transport);
    //     if ($img->foto != "default.jpg") {
    //         $filename = explode(".", $img->foto)[0];
    //         return array_map('unlink', glob(FCPATH . "foto/user/$filename.*"));
    //     }
    // }
}