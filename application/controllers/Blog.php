<!-- controllers/Crud.php -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->helper('form'); // loading this for the entire class/controller
        $this->load->library('form_validation'); // loading this for the entire class/controller
        $this->load->database(); // ummm…ditto }
    }

    public function index() {
        $data['heading'] = "Reading from a DB";
        $this->load->model('blog_model');
        $data['results'] = $this->blog_model->query();

        $this->load->view('includes/header', $data);
        $this->load->view('crud_read_view', $data);
        $this->load->view('includes/footer');
    }

    public function detail($id) {
//        if (!$this->ion_auth->logged_in()) {
//            redirect('/auth/login/');
//        }
        if (!is_numeric($id)) {
            redirect('/', 'location');
        }
        $this->load->library('typography');

        $this->load->model('blog_model');
        $data = $this->blog_model->detail($id);
        $data['heading'] = "Popular Tutorials";
        $data['user_id'] = $this->ion_auth->get_user_id();

        $this->load->view('includes/header', $data);
        $this->load->view('crud_detail_view', $data);
        $this->load->view('includes/footer');
    }

    public function write() {
        if (!$this->ion_auth->logged_in()) {
            redirect('/auth/login/');
        }

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('title', 'title', 'required|min_length[4]|max_length[100]');
        $this->form_validation->set_rules('body', 'body', 'required|min_length[20]|max_length[2000]');

        // Validation Library was loaded in the constructor.
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('includes/header');
            $this->load->view('crud_write_view');
            $this->load->view('includes/footer');
        } else {
            // retrieve POSTED form data
            $data['title'] = $this->input->post('title');
            $data['body'] = $this->input->post('body');
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['uid'] = $this->ion_auth->get_user_id();

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '0';
            $config['file_name'] = uniqid();
            $this->load->library('upload', $config);
            $result = $this->upload->do_upload('file');

            if ($result) {
                $data['slug'] = '/uploads/' . $this->upload->data('file_name');;
                $this->load->model('blog_model');
                $this->blog_model->insert($data);
                $this->session->set_flashdata('message', 'Insert Successful');
                redirect("blog/index", 'location');
            } else {
                //if upload fail
                $this->session->set_flashdata('message', 'Upload Error');
            }
        }
    }

    public function edit($id) {
        if (!is_numeric($id)) {
            redirect('/', 'location');
        }

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('title', 'title', 'required|min_length[4]|max_length[100]');
        $this->form_validation->set_rules('body', 'body', 'required|min_length[20]|max_length[2000]');

        $this->load->model('blog_model');

        if ($this->form_validation->run() == FALSE) {
            $data = $this->blog_model->detail($id);
            $this->load->view('includes/header');
            $this->load->view('crud_edit_view', $data);
            $this->load->view('includes/footer');
        } else {
            $data = array(
                "id" => $this->input->post('id'),
                "title" => $this->input->post('title'),
                "body" => $this->input->post('body'),
            );

            $this->load->model('blog_model');

            //file not update
            if (!empty($_FILES['file']['tmp_name'])) {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '0';
                $config['file_name'] = uniqid();
                $this->load->library('upload', $config);
                $result = $this->upload->do_upload('file');
                if ($result) {
                    $data['slug'] = '/uploads/' . $this->upload->data('file_name');;
                    $result = $this->blog_model->update($id, $data);
                    if ($result) {
                        $this->session->set_flashdata('message', 'Update Successful');
                    } else {
                        $this->session->set_flashdata('message', 'Update Error');
                    }
                } else {
                    $this->session->set_flashdata('message', 'Upload Error');
                }
            } else {
                $result = $this->blog_model->update($id, $data);
                if ($result) {
                    $this->session->set_flashdata('message', 'Update Successful');
                } else {
                    $this->session->set_flashdata('message', 'Update Error');
                }
            }
            redirect('blog/edit/' . $id, 'location');
        }
    }

    public function delete($id) {
        $this->load->model('blog_model');
        $this->blog_model->delete($id);
        $this->session->set_flashdata('message', 'Delete Successful');
        redirect('blog/', 'location');
    }
}

?>