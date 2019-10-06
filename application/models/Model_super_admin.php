<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_super_admin extends CI_Model{


private $_table = "super_admin";
    public $id_super_admin;
    public $nama;
    public $email;
    public $password;
    public $nomor_hp;
    public $jenis_kelamin;
    public $foto = "default.jpg";


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

    public function getById($id_super_admin)
    {
        return $this->db->get_where($this->_table, ["id_super_admin" => $id_super_admin])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->nomor_hp = $post["nomor_hp"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        
        if (empty($post["password"])){
            $this->password =md5($post["nama"]);
        } else {
            $this->password=md5($post["password"]) ;
        }

        $this->foto = $this->_uploadImage();


        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id_super_admin = $post["id_super_admin"];
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->nomor_hp = $post["nomor_hp"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->foto = $post["foto"];
        

        if (empty($post["password"])){
            $this->password =md5($post["nama"]);
        } else {
            $this->password=md5($post["password"]) ;
        }

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array("id_super_admin" => $post["id_super_admin"]));
    }

    public function delete($id_super_admin)
    {
        $this->_deleteImage($id_super_admin);
        return $this->db->delete($this->_table, array("id_super_admin" => $id_super_admin));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './foto/user';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->nama;
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

    private function _deleteImage($id_super_admin)
    {
        $img = $this->getById($id_super_admin);
        if ($img->foto != "default.jpg") {
            $filename = explode(".", $img->foto)[0];
            return array_map('unlink', glob(FCPATH . "foto/user/$filename.*"));
        }
    }
}