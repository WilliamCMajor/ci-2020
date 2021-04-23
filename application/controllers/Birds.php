<?php
//controllers/Birds.php
defined('BASEPATH') or exit('No direct script access allowed');
class Birds extends CI_Controller
{
    public function index()
    {
        $data['heading'] = "The Birds of Alberta";
        $data['picture'] = "owl.jpg";
        $data['message'] = "<p>Birds (class Aves or clade Avialae) are feathered, winged, two-legged, warmblooded, egg-laying vertebrates. Aves ranks as the tetrapod class with the most living species, approximately ten thousand. </p>
        <p>Extant birds belong to the subclass Neornithes, living worldwide and ranging in size from the 5 cm (2
        in) Bee Hummingbird to the 2.75 m (9 ft) Ostrich. The fossil record indicates that birds emerged within the
        theropod dinosaurs during the Jurassic period, around 150 million years ago. <br>Most researchers agree that
        modern-day birds are the only living members of the Dinosauria clade.</p>";

        $this->load->view('includes/header');
        $this->load->view('bird_view',$data); // we need to pass the array to the view
        $this->load->view('includes/footer');
    }
    public function loon()
    {
        $data['heading'] = "The Loon";
        $data['picture'] = "loon.jpg";
        $data['message'] = "<p>The loon, the size of a large duck or small goose, resembles these birds in
        shape when swimming. Like ducks and geese but unlike coots (which are Rallidae) and grebes (Podicipedidae), the
        loon's toes are connected by webbing. The bird may be confused with cormorants (Phalacrocoracidae), not too
        distant relatives of divers and like them are heavy set birds whose bellies - unlike those of ducks and geese - are
        submerged when swimming.</p>
        <p> Flying loons resemble a plump goose with a seagull's wings, relatively small in proportion to
        the bulky body. The bird holds its head pointing slightly upwards during swimming, but less so than cormorants do.
        In flight the head droops more than in similar aquatic birds.</p>";
        
        $this->load->view('includes/header');
        $this->load->view('bird_view',$data);
        $this->load->view('includes/footer');
    }
    public function sparrow()
    {
        echo "Birds - Sparrow";
    }
    public function falcon()
    {
        $data['heading'] = "The Falcon";
        $data['picture'] = "falcon.jpg";
        $data['message'] = "<p>The loon, the size of a large duck or small goose, resembles these birds in
        shape when swimming. Like ducks and geese but unlike coots (which are Rallidae) and grebes (Podicipedidae), the
        loon's toes are connected by webbing. The bird may be confused with cormorants (Phalacrocoracidae), not too
        distant relatives of divers and like them are heavy set birds whose bellies - unlike those of ducks and geese - are
        submerged when swimming.</p>";

        $this->load->view('includes/header');
        $this->load->view('bird_view',$data);
        $this->load->view('includes/footer');
    }
}
