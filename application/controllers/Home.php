<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function index()
    {
        //echo "This is home";
        $this->load->view('includes/header');
        $this->load->view('home_view');
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
