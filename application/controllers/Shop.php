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
        if (isset($_POST['submit'])) {
            $web_enquiry = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'contact_no' => $this->input->post('contact_no'),
                'source' => $this->input->post('source'),
                'destination' => $this->input->post('destination'),
                'select_date' => $this->input->post('select_date'),
                'select_time' => $this->input->post('select_time'),
                'note' => $this->input->post('note'),
                'datetime' => date("Y-m-d H:i:s a"),
            );
            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('name');
            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from($emailsender, $sendername);
                $this->email->to(email_bcc);
                $this->email->cc($this->input->post('email')); 
                $this->email->bcc("m.sirajbtc@gmail.com");


                $subject = "Quotation request from website";
                $this->email->subject($subject);

                $htmlsmessage = $this->load->view('Email/web_enquiry', array("appointment" => $web_enquiry), true);
                if (REPORT_MODE == 1) {
                    $this->email->message($htmlsmessage);

                    $this->email->print_debugger();
                    $send = $this->email->send();
                    if ($send) {
                        redirect(site_url("/"));
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        redirect(site_url("/"));
                    }
                } else {
                    echo $htmlsmessage;
                }
            }
        }
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
