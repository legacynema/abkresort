<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_user extends CI_Model{


private $_table = "user";
    public $id_user;
    public $nama_lengkap;
    public $email;
    public $password;
    public $nomor_hp;
    public $jenis_kelamin;
    public $foto = "default.jpg";

    public function rules()
    {
        return [
            [
                'field' => 'id_user',
                'label' => 'id_user',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_user)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id_user])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->email = $post["email"];
        $this->nomor_hp = $post["nomor_hp"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        
        if (empty($post["password"])){
            $this->password =md5($post["nama_lengkap"]);
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
        $this->id_user = $post["id_user"];
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->email = $post["email"];
        $this->nomor_hp = $post["nomor_hp"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->foto = $post["foto"];

        if (empty($post["password"])){
            $this->password=md5($post["nama_lengkap"]);
        } else {
            $this->password=md5($post["password"]) ;
        }

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array("id_user" => $post["id_user"]));
    }

    public function updatePass()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id_user = $post["id_user"];
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->email = $post["email"];
        $this->nomor_hp = $post["nomor_hp"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->foto = $post["foto"];
        $this->password = md5($post["nama_lengkap"]);

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array("id_user" => $post["id_user"]));
    }    


    public function delete($id_user)
    {
        $this->_deleteImage($id_user);
        return $this->db->delete($this->_table, array("id_user" => $id_user));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './foto/user';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->nama_lengkap;
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

    private function _deleteImage($id_user)
    {
        $img = $this->getById($id_user);
        if ($img->foto != "default.jpg") {
            $filename = explode(".", $img->foto)[0];
            return array_map('unlink', glob(FCPATH . "foto/user/$filename.*"));
        }
    }
}