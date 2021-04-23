<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
	function __construct() {
        parent::__construct();
        $this->load->helper('form'); // loading this for the entire class/controller
        $this->load->library('form_validation'); // loading this for the entire class/controller
        $this->load->database(); // ummm…ditto }
    }
    
    public function index()
    {
        $data['heading'] = "Popular Tutorials";
        $this->load->model('blog_model');
        $data['results'] = $this->blog_model->query();

        $this->load->view('includes/header', $data);
        $this->load->view('crud_read_view', $data);
        $this->load->view('includes/footer');
    }

    public function test()
    {
        $this->load->view('includes/header');
        $this->load->view('test_view');
        $this->load->view('includes/footer');
        //echo "<h1>This is TEST function in Home controller</h1>";
    }
}
