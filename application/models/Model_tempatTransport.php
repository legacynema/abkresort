<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_tempatTransport extends CI_Model{


private $_table = "tempat_transport";
    public $id_tempat;
    public $nama_tempat;
    public $jenis_tempat;
    public $id_kota;
    public $post_date;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_tempat)
    {
        return $this->db->get_where($this->_table, ["id_tempat" => $id_tempat])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id_tempat = $post["id_tempat"];
        $this->nama_transport = $post["nama_transport"];
        $this->jenis_tempat = $post["jenis_tempat"];
        $this->id_kota = $post["id_kota"];
        $this->post_date = date('Y-m-d');

        $this->db->insert($this->_table, $this);
        // var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id_tempat = $post["id_tempat"];
        $this->nama_transport = $post["nama_transport"];
        $this->jenis_tempat = $post["jenis_tempat"];
        $this->id_kota = $post["id_kota"];
        $this->post_date = date('Y-m-d');

        $this->db->update($this->_table, $this, array("id_tempat" => $post["id_tempat"]));
    }

    public function delete($id_tempat)
    {
        return $this->db->delete($this->_table, array("id_tempat" => $id_tempat));
    }
}