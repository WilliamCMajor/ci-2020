<!-- controllers/Crud.php -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Crud extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form'); // loading this for the entire class/controller 
        $this->load->library('form_validation'); // loading this for the entire class/controller 
        $this->load->database(); // ummm…ditto }
    }

    public function index()
    {
        $data['heading'] = "Reading from a DB";
        $this->load->model('crud_model');
        $data['results'] = $this->crud_model->get_animals();

        $this->load->view('includes/header', $data);
        $this->load->view('crud_read_view', $data);
        $this->load->view('includes/footer');
    }

    public function detail($id)
    {
        if (!is_numeric($id)) {
            redirect('/', 'location');
        }
        $this->load->library('typography');
        $data['heading'] = "Reading from a DB";
        $this->load->model('crud_model');
        $data['results'] = $this->crud_model->get_animal_detail($id);

        $this->load->view('includes/header', $data);
        $this->load->view('crud_detail_view', $data);
        $this->load->view('includes/footer');
    }

    public function write()
    {
        /* if (!$this->ion_auth->logged_in()) {
            redirect('/auth/login/');
        } else {
            $data['author_id'] = $this->ion_auth->user()->row()->id;
        } */

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('animal_name', 'Animal Name', 'required|min_length[4]|max_length[100]');
        $this->form_validation->set_rules('description', 'Description', 'required|min_length[20]|max_length[2000]');
        // Validation Library was loaded in the constructor.
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('includes/header');
            $this->load->view('crud_write_view');
            $this->load->view('includes/footer');
        } else {
            //echo "SUCCESS";
            // retrieve POSTED form data 
            $data['animal_name'] = $this->input->post('animal_name');
            $data['description'] = $this->input->post('description');
            $this->load->model('crud_model');
            $this->crud_model->insert_animal($data);

            $this->session->set_flashdata('message', 'Insert Successful');
            redirect("crud/index", 'location');
        }
    }

    public function edit($id)
    {
        if (!is_numeric($id)) {
            redirect('/', 'location');
        }

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('animal_name', 'Animal Name', 'required|min_length[3]|max_length[40]');
        $this->form_validation->set_rules('description', 'Description', 'required|min_length[20]|max_length[2000]');

        $this->load->model('crud_model');

        if ($this->form_validation->run() == FALSE) {

            $data['results'] = $this->crud_model->get_animal_detail($id);
            $this->load->view('includes/header');
            $this->load->view('crud_edit_view', $data);
            $this->load->view('includes/footer');
        } else {
            // $data['animal_name'] = $this->input->post('animal_name');
            // $data['description'] = $this->input->post('description');

            $data = array(
                "animal_name" => $this->input->post('animal_name'),
                "description" => $this->input->post('description')
            );

            if ($this->input->post("update")) {
                $this->crud_model->edit_animal($data, $id);
                $this->session->set_flashdata('message', 'Update Successful');
                redirect('crud/edit/' . $id, 'location');
            }
        }
    }

    public function delete($id)
    {
        $this->load->model('crud_model');
        $this->crud_model->delete_animal($id);
        $this->session->set_flashdata('message', 'Delete Successful');
        redirect('crud/', 'location');
    }
}
?>