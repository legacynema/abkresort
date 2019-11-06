<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_paket extends CI_Model{


private $_table = "paket";
    public $id_paket;
    public $id_penginapan;
    public $id_rute;
    public $id_wisata;
    public $harga;
    // public $foto = "default.jpg";


   

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
        $this->id_user = $post["id_user"];
        $this->id_paket = $post["id_paket"];
        $this->hari = $post["hari"];
        $this->id_penginapan = $post["id_penginapan"];
        $this->id_wisata = $post["id_wisata"];
        $this->harga = $post["harga"];
        $this->id_admin = $post["id_admin"];
        $this->id_rute = $post["id_rute"];
        // $this->id_paket = $post["id_paket"];
        
        

        // $this->foto = $this->_uploadImage();


        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id_user = $post["id_user"];
        $this->id_paket = $post["id_paket"];
        $this->hari = $post["hari"];
        $this->id_penginapan = $post["id_penginapan"];
        $this->id_wisata = $post["id_wisata"];
        $this->harga = $post["harga"];
        $this->id_admin = $post["id_admin"];
        $this->id_rute = $post["id_rute"];
        $this->id_paket = $post["id_paket"];

        $this->db->update($this->_table, $this, array("id_paket" => $post["id_paket"]));
    }

    public function delete($id_paket)
    {
        return $this->db->delete($this->_table, array("id_paket" => $id_paket));
    }

}