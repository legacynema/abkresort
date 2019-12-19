<?php defined('BASEPATH') or exit('No direct script access allowed');
// class Model_rute extends CI_Model
class Model_transport extends CI_Model{


private $_table = "transport";

    public $id_transport;
    public $jenis_transport;
    public $class;
    public $nama_transp;
    public $tanggal;
    public $tempat_asal;
    public $tempat_tujuan;
    public $jam_berangkat;
    public $jam_tiba;
    public $foto;
    public $kisaran;
    public $harga;
    public $post_date;

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

    public function getById($id_transport)
    {
        return $this->db->get_where($this->_table, ["id_transport" => $id_transport])->row();
    }

    public function save()
    {
       
        $post = $this->input->post();
        // $this->id_transport = $post["id_transport"];
        $this->jenis_transport = $post["jenis_transport"];
        $this->class = $post["class"];
        $this->nama_transp = $post["nama_transp"];
        $this->tanggal = $post["tanggal"];
        $this->tempat_asal = $post["tempat_asal"];
        $this->tempat_tujuan = $post["tempat_tujuan"];
        $this->jam_berangkat = $post["jam_berangkat"];
        $this->jam_tiba = $post["jam_tiba"];
        $this->kisaran = $post["kisaran"];
        $this->harga = $post["harga"];
        $this->post_date = date('Y-m-d');

        $this->db->insert($this->_table, $this);
        // var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
         $this->id_transport = $post["id_transport"];
         $this->jenis_transport = $post["jenis_transport"];
         $this->class = $post["class"];
         $this->nama_transp = $post["nama_transp"];
         $this->tempat_asal = $post["tempat_asal"];
         $this->tempat_tujuan = $post["tempat_tujuan"];
         $this->jam_berangkat = $post["jam_berangkat"];
         $this->jam_tiba = $post["jam_tiba"];
         $this->kisaran = $post["kisaran"];

         if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        
         $this->harga = $post["harga"];
         $this->post_date = date('Y-m-d');

        $this->db->update($this->_table, $this, array("id_transport" => $post["id_transport"]));
    }

    public function delete($id_transport)
    {
        $this->_deleteImage($id_transport);
        return $this->db->delete($this->_table, array("id_transport" => $id_transport));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './foto/admin/transport';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->nama_transp;
        $config['overwrite']            = false;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($id_transport)
    {
        $img = $this->getById($id_transport);
        if ($img->foto != "default.jpg") {
            $filename = explode(".", $img->foto)[0];
            return array_map('unlink', glob(FCPATH . "foto/admin/transport/$filename.*"));
        }
    }
}