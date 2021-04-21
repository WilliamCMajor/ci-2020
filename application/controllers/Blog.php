<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    function post($slug){
        $this->load->view('includes/header');
        $this->load->view('includes/footer');
    }
}
?>