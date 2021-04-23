<!-- models/Crud_model.php -->
<?php
class Crud_model extends CI_Model
{
    function __construct()
    { // Call the Model constructor 
        parent::__construct();
    }

    function get_animals()
    {
        $query = $this->db->get('ci_animals');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_animal_detail($id)
    {   
        $this->db->where('animal_id', $id);
        $this->db->join('users', 'users.id = ci_animals.animal_id');
        $query = $this->db->get('ci_animals');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function insert_animal($data)
    {
        $this->db->insert('ci_animals', $data);
    }

    function edit_animal($data, $id)
    {
        $this->db->where('animal_id', $id);
        $this->db->update('ci_animals', $data);
    }

    function delete_animal($id)
    {
        $this->db->where('animal_id', $id);
        $this->db->delete('ci_animals');
    }
}

?>