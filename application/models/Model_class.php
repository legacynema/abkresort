<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_class extends CI_Model{


private $_table = "class";
    public $id_class;
    public $nama_class;



    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_class)
    {
        return $this->db->get_where($this->_table, ["id_class" => $id_class])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_class = $post["nama_class"];

        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id_class = $post["id_class"];
        $this->nama_class = $post["nama_class"];

        $this->db->update($this->_table, $this, array("id_class" => $post["id_class"]));
    }

    public function delete($id_class)
    {
        return $this->db->delete($this->_table, array("id_class" => $id_class));
    }
}