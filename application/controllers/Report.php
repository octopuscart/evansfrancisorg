<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Report extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    function get_org_data($tablename) {
        $this->db->order_by("id desc");
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0) {
            $attrs = $query->result_array();
            return $attrs;
        } else {
            return array();
        }
    }
    function index(){
        redirect("Report/contact_us");
    }

    function deleteData($tablename, $id, $pagename){
        $this->db->where("id", $id);
        $this->db->delete($tablename);
        redirect("Report/$pagename");
    }
     
    function contact_us() {
        //echo "--------------";
        $result['headings'] = ['Name', 'Email', 'Contact No.', 'Subject', 'Message', 'Request Date', 'Request Time'];
        $result['data'] = $this->get_org_data("website_contact_us");
        $result["title"] = "Contact us - Report Data";
        $result["tablename"] = "website_contact_us";
        $result["page"] = "contact_us";
        //print_r($data);
        $this->load->view('report/reportdata', $result);
    }

    function invite() {
        //echo "--------------";
        $result['headings'] = ['ORG Name', 'Full Name', 'Email', 'Contact No.', 'Address', 'Country', 'State', 'City', 'Zip', 'Website', 'Contact Person', 'Contact', 'Pastor', 'Event Title', 'Theme'
            , 'Date', 'Attendance', 'Status', 'Date', 'Time'];
        $result['data'] = $this->get_org_data("website_invite");
        $result["tablename"] = "website_invite";
        $result["page"] = "invite";
        $result["title"] = "Invite - Report Data";
        $this->load->view('report/reportdata', $result);
    }

    function pillar_of_cloud() {
        //echo "--------------";
        $result['headings'] = ['First Name', 'Last Name', 'Email', 'Contact No.', 'Prayer Time', 'Country', 'Request Date', 'Request Time'];
        $result['data'] = $this->get_org_data("website_pillar_of_cloud");
        //print_r($data);
        $result["title"] = "Pillar Of Cloud - Report Data";
        $result["tablename"] = "website_pillar_of_cloud";
        $result["page"] = "pillar_of_cloud";
        $this->load->view('report/reportdata', $result);
    }

    function pillar_of_fire() {
        //echo "--------------";
        $result['headings'] = ['First Name', 'Last Name', 'Email', 'Contact No.', 'Amount', 'Country', 'Request Date', 'Request Time'];
        $result['data'] = $this->get_org_data("website_pillar_of_fire");
        //print_r($data);
        $result["title"] = "Pillar Of Fire - Report Data";
        $result["tablename"] = "website_pillar_of_fire";
        $result["page"] = "pillar_of_fire";
        $this->load->view('report/reportdata', $result);
    }

    function website_subscribe() {
        $result["title"] = "Subscription - Report Data";
        $result['headings'] = ['Email', 'Status', 'Request Date', 'Request Time'];
        $result['data'] = $this->get_org_data("website_subscribe");
        $result["tablename"] = "website_subscribe";
        $result["page"] = "website_subscribe";
        $this->load->view('report/reportdata', $result);
    }

}

?>