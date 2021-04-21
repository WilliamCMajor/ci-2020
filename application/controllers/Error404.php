<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Error404 extends CI_Controller
{
    public function index()
    {
        $data['heading'] = "Error 404 - page not found";
        $data['picture'] = "owl.jpg";
        $data['message'] = "<p>Page not found</p>";
        
        $this->load->view('includes/header');
        $this->load->view('bird_view',$data);
        $this->load->view('includes/footer');
    }

}
