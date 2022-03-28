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

        if ($query) {
            $attrs = $query->result_array();
            return $attrs;
        } else {
            return array();
        }
    }

    function index() {
        redirect("Report/contact_us");
    }

    function deleteData($tablename, $id, $pagename) {
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

    function youthretreat_report() {
        //echo "--------------";
        $result["columns"] = ["id", "full_name", "contact_no", "email", "church_name", "age", "gender", "city", "food_preference", "request_date", "request_time"];
        $result['headings'] = ['Full Name', 'Contact No.', 'Email', 'Church Name', 'Age', 'Gender', 'City', 'Food Preference', 'Request Date', 'Request Time'];
        $result['data'] = $this->get_org_data("website_youthretreat");

        $result["title"] = "Youth Retreat - Report Data";
        $result["tablename"] = "website_youthretreat";
        $result["page"] = "website_youthretreat";
        $this->load->view('report/youthretreat', $result);
    }

    function eyr_pass($codepass) {
        $this->db->where('access_code', $codepass); //set column_name and value in which row need to update
        $query = $this->db->get('website_youthretreat');
        $access_data = $query->row_array();
        $columns = ["full_name", "contact_no", "gender",];
        $headings = ['Full Name', 'Contact No.', 'Gender',];

//        print_r($access_data);

        $font_size = 10;
        if ($access_data) {
            header('Content-type: image/jpeg');
            $font_path1 = APPPATH . "../assets/card/fonts/ABeeZee-Regular.otf";
            $jpg_image = imagecreatefromjpeg(APPPATH . "../assets/images/passtemplate.jpg");
            $black = imagecolorallocate($jpg_image, 0, 0, 0);
            $white = imagecolorallocate($jpg_image, 255, 255, 255);
            $black12 = imagecolorallocate($jpg_image, 239, 54, 59);
            $image_width = imagesx($jpg_image);
            $image_height = imagesy($jpg_image);
            $x = 650;
            $y = 18;
            foreach ($columns as $key => $cvalue) {
                imagettftext($jpg_image, $font_size, 0, $x - 80, $y + ($key * 20), $black12, $font_path1, $headings[$key]);

                imagettftext($jpg_image, $font_size, 0, $x, $y + ($key * 20), $black, $font_path1, $access_data[$cvalue]);
            }
            imagettftext($jpg_image, 15, 0, 330, 300, $black, $font_path1, $codepass);
            imagettftext($jpg_image, 15, 90, 100, 240, $white, $font_path1, $codepass);

// Output the image
            imagejpeg($jpg_image);
            imagedestroy($jpg_image);
        } else {
            echo "No Data Found";
        }
// Free up memory
    }

    function website_subscribe() {
        $result["title"] = "Subscription - Report Data";
        $result['headings'] = ['Email', 'Status', 'Request Date', 'Request Time'];
        $result['data'] = $this->get_org_data("website_subscribe");
        $result["tablename"] = "website_subscribe";
        $result["page"] = "website_subscribe";
        $this->load->view('report/reportdata', $result);
    }

    function child_fee() {
        //echo "--------------";
        $result['headings'] = ['First Name', 'Last Name', 'Email', 'Contact No.', 'Amount', 'Donation Period', 'Country', 'Request Date', 'Request Time'];
        $result['data'] = $this->get_org_data("website_child_fee");
        //print_r($data);
        $result["title"] = "Child's Fee - Report Data";
        $result["tablename"] = "website_child_fee";
        $result["page"] = "website_child_fee";
        $this->load->view('report/reportdata', $result);
    }

    function church_rent() {
        //echo "--------------";
        $result['headings'] = ['First Name', 'Last Name', 'Email', 'Contact No.', 'Amount', 'Donation Period', 'Country', 'Request Date', 'Request Time'];
        $result['data'] = $this->get_org_data("website_church_rent");
        //print_r($data);
        $result["title"] = "Church Rent - Report Data";
        $result["tablename"] = "website_church_rent";
        $result["page"] = "website_church_rent";
        $this->load->view('report/reportdata', $result);
    }

    function family_grocery() {
        //echo "--------------";
        $result['headings'] = ['First Name', 'Last Name', 'Email', 'Contact No.', 'Amount', 'Donation Period', 'Country', 'Request Date', 'Request Time'];
        $result['data'] = $this->get_org_data("website_family_groceries");
        //print_r($data);
        $result["title"] = "Family Grocery - Report Data";
        $result["tablename"] = "website_family_groceries";
        $result["page"] = "website_family_groceries";
        $this->load->view('report/reportdata', $result);
    }

    function website_pastor() {
        //echo "--------------";
        $result['headings'] = ['First Name', 'Last Name', 'Email', 'Contact No.', 'Amount', 'Donation Period', 'Country', 'Request Date', 'Request Time'];
        $result['data'] = $this->get_org_data("website_pastor");
        //print_r($data);
        $result["title"] = "Pastor - Report Data";
        $result["tablename"] = "website_pastor";
        $result["page"] = "website_pastor";
        $this->load->view('report/reportdata', $result);
    }

}

?>