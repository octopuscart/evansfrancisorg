<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

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

    public function contactus() {

        $this->load->view('pages/contactus');
    }

    public function aboutus() {
        $this->load->view('pages/aboutus');
    }

    public function error404() {
        $this->load->view('pages/error404');
    }

    public function faq() {
        // $this->load->view('pages/faq');
    }

    public function catalogue() {
        //  $this->load->view('pages/catalogue');
    }

    function privacy_policy() {
        $this->load->view('pages/pp');
    }

}
