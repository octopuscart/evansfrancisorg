<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        $data = array();
        $this->load->view('home', $data);
    }

    function pillar_of_fire() {
        $this->load->view('pages/piller_of_fire');
    }

    function pillar_of_cloud() {
        $this->load->view('pages/piller_of_cloud');
    }

    function contact_us() {
        $this->load->view('pages/contact_us');
    }

    function invite() {
        $this->load->view('pages/invite');
    }

    public function aboutus() {
        $this->load->view('pages/aboutus');
    }

    public function love_offering() {
        $this->load->view('pages/love_offering');
    }

    public function error404() {
        $this->load->view('pages/error404');
    }

}
