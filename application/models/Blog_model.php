<!-- models/Crud_model.php -->
<?php

class Blog_model extends CI_Model
{
    function __construct() { // Call the Model constructor
        parent::__construct();
    }

    function query() {
        $query = $this->db->get('article');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function detail($id = '') {
        $this->db->from('article a')->where('a.id', $id);
        $this->db->join('users u', 'u.id = a.uid', 'left');
        $query = $this->db->select('a.*,u.username,u.id as uid')->get();
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return FALSE;
        }
    }

    function insert($data) {
        return $this->db->insert('article', $data);
    }

    function update($id, $data) {
        return $this->db->where('id', $id)->update('article', $data);
    }

    function delete($id) {
        return $this->db->where('id', $id)->delete('article');
    }
}

?>