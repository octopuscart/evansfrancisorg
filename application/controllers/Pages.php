<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
//        $this->user_id = $this->session->userdata('logged_in')['login_id'];
        $this->bookdata = array(
            "book_wp_1" => array(
                "title" => "Why Pain ",
                "image" => "wp.jpg",
                "bookfile" => "Why_Pain_By_Evans_Francis.pdf"
            ),
            "book_cw_1" => array(
                "title" => "Choose Wisely",
                "image" => "cw.jpg",
                "bookfile" => "Choose_Wisely_By_Neha_Evans_Francis.pdf"
            ),
            "book_bc_1" => array(
                "title" => "Biblical Courtship",
                "image" => "bc.jpg",
                "bookfile" => "Biblical_Courtship_By_Evans_Francis.pdf"
            ),
        );
    }

    public function sendEmail($inputdata, $tamplate, $subject) {

        $emailsender = email_sender;
        $sendername = email_sender_name;
        $email_bcc = email_bcc;
        $this->email->set_newline("\r\n");
        $this->email->from("contact@evansfrancis.org", $sendername);
        $this->email->to("nehaevans831@gmail.com");
        $this->email->cc(email_bcc);
        $this->email->subject($subject);
        $htmlsmessage = $this->load->view("Email/$tamplate", array("inputdata" => $inputdata), true);
        $this->email->message($htmlsmessage);
        $this->email->print_debugger();
        $send = $this->email->send();
        if ($send) {
            
        } else {
            $error = $this->email->print_debugger(array('headers'));
        }
    }

    public function freeBookEmailMail($inputdata, $subject) {
        $isprod = 1;
        if ($isprod) {
            $inputdata = array("first_name" => $inputdata["first_name"], "email" => $inputdata["email"], "booklist" => $inputdata["book_id"]);
        } else {
            $inputdata = array("first_name" => "Pankaj", "email" => "Pankaj", "booklist" => []);
        }
        $emailsender = email_sender;
        $sendername = email_sender_name;
        $email_bcc = email_bcc;
        $this->email->set_newline("\r\n");
        $this->email->from(email_bcc, email_bcc);
        $this->email->to($inputdata["email"]);
        $this->email->cc(email_bcc);
        $this->email->subject("Thank you again for signing up to receive updates");
        foreach ($inputdata["booklist"] as $key => $value) {
            $bookobj = $this->bookdata[$value];
            $this->email->attach("https://www.evansfrancis.org/assets/books/" . $bookobj["bookfile"]);
        }

        $htmlsmessage = $this->load->view("Email/freebookemail", array("inputdata" => $inputdata), true);

        if ($isprod) {
            $this->email->message($htmlsmessage);
            $send = $this->email->send();
            if ($send) {
                
            } else {
                $error = $this->email->print_debugger(array('headers'));
            }
        } else {
            echo $htmlsmessage;
        }
    }

    public function subscribeMailTest() {
        $data["inputdata"] = array("first_name" => "Pankaj Pathak");
        $this->load->view('Email/freebookemail', $data);
    }

    public function index() {
        $input_data = $this->input->post();
        $messagedata = array("title" => "", "message" => "", "type" => "");
        $captchadata = $this->session->userdata("captchacode_subscribe");
        if (isset($input_data["submit"])) {

            if ($input_data["captcha"] == $captchadata) {
                unset($input_data["submit"]);
                unset($input_data["captcha"]);
                $input_data["status"] = "active";
                $input_data["request_date"] = date("Y-m-d");
                $input_data["request_time"] = date("H:m:s A");

                $email = $input_data["email"];
                $this->db->where("email", $email);
                $query = $this->db->get("website_subscribe");
                $checkdata = $query->result();
                if ($checkdata) {
                    $messagedata = array("title" => "Already Subscribed", "message" => "You have already subscribed to our mailing list.", "type" => "info");
                } else {
                    $this->sendEmail($input_data, "subscribe", "Thank you for subscribing our mailing list.");
                    $this->db->insert('website_subscribe', $input_data);
                    $messagedata = array("title" => "Thanks You", "message" => "Thank you for subscribing our mailing list.", "type" => "success");
                }
            } else {
                $messagedata = array("title" => "Invalid Captcha", "message" => "Please enter correct cpatcha", "type" => "error");
            }
            $data["message"] = $messagedata;
        }



        $data["bookdata"] = $this->bookdata;
        if (isset($input_data["submitbooks"])) {
            unset($input_data["submitbooks"]);

            $booklist = [];
            $booklist_name = [];
            if (isset($input_data["book_id"])) {
                $booklist = $input_data["book_id"];
                foreach ($booklist as $key => $value) {
                    $bookobj = $this->bookdata[$value]["title"];
                    array_push($booklist_name, $bookobj);
                }
            }
            $ns_subscribe = "No";
            if (isset($input_data["ns-subscribe"])) {
                $booklist = $input_data["ns-subscribe"];
                $ns_subscribe = "Yes";
            }
            $insertArray = array(
                "first_name" => $input_data["first_name"],
                "last_name" => $input_data["last_name"],
                "email" => $input_data["email"],
                "is_in_updates" => $ns_subscribe,
                "books_name" => implode(", ", $booklist_name),
            );
            $insertArray["status"] = "active";
            $insertArray["request_date"] = date("Y-m-d");
            $insertArray["request_time"] = date("H:m:s A");

            $email = $input_data["email"];
            $this->db->where("email", $email);
            $query = $this->db->get("website_book_request");
            $checkdata = $query->result();
            if ($checkdata) {
                $messagedata = array("title" => "Already Subscribed", "message" => "You have already subscribed to our mailing list.", "type" => "info");
            } else {
                $this->freeBookEmailMail($input_data, "Thank you for subscribing our mailing list.");
                $this->db->insert('website_book_request', $insertArray);
                $messagedata = array("title" => "Thanks You", "message" => "Thank you for subscribing our mailing list.", "type" => "success");
            }

            $data["message"] = $messagedata;
        }


        $this->load->view('home', $data);
    }

    function pillar_of_fire() {
        $input_data = $this->input->post();
        $messagedata = array("title" => "", "message" => "", "type" => "");
        $captchadata = $this->session->userdata("captchacode_pillar_of_fire");

        if (isset($input_data["submit"])) {
            if ($input_data["captcha"] == $captchadata) {
                unset($input_data["submit"]);
                unset($input_data["captcha"]);
                $input_data["request_date"] = date("Y-m-d");
                $input_data["request_time"] = date("H:m:s A");
                $this->db->insert('website_pillar_of_fire', $input_data);
                $this->sendEmail($input_data, "pillar_of_fire", "Pillar of Fire - Your request has been submitted.");
                $messagedata = array("title" => "Thanks You", "message" => "Your request has been submitted.", "type" => "success");
            } else {
                $messagedata = array("title" => "Invalid Captcha", "message" => "Please enter correct cpatcha", "type" => "error");
            }
        }
        $data["message"] = $messagedata;
        $this->load->view('pages/piller_of_fire', $data);
    }

    public function church() {
        $input_data = $this->input->post();
        $messagedata = array("title" => "", "message" => "", "type" => "");
        $captchadata = $this->session->userdata("captchacode_church");

        if (isset($input_data["submit"])) {

            if ($input_data["captcha"] == $captchadata) {
                unset($input_data["submit"]);
                unset($input_data["captcha"]);
                $input_data["request_date"] = date("Y-m-d");
                $input_data["request_time"] = date("H:m:s A");
                $this->db->insert('website_church_rent', $input_data);
                $this->sendEmail($input_data, "church_rent", "SPONSOR OUR CHURCH RENT - Your request has been submitted.");
                $messagedata = array("title" => "Thanks You", "message" => "Your request has been submitted.", "type" => "success");
            } else {
                $messagedata = array("title" => "Invalid Captcha", "message" => "Please enter correct cpatcha", "type" => "error");
            }
        }
        $data["message"] = $messagedata;
        $this->load->view('pages/church', $data);
    }

    public function pastor() {
        $input_data = $this->input->post();
        $messagedata = array("title" => "", "message" => "", "type" => "");
        $captchadata = $this->session->userdata("captchacode_pastor");

        if (isset($input_data["submit"])) {

            if ($input_data["captcha"] == $captchadata) {
                unset($input_data["submit"]);
                unset($input_data["captcha"]);
                $input_data["request_date"] = date("Y-m-d");
                $input_data["request_time"] = date("H:m:s A");
                $this->db->insert('website_pastor', $input_data);
                $this->sendEmail($input_data, "pastor", "SPONSOR A PASTOR - Your request has been submitted.");
                $messagedata = array("title" => "Thanks You", "message" => "Your request has been submitted.", "type" => "success");
            } else {
                $messagedata = array("title" => "Invalid Captcha", "message" => "Please enter correct cpatcha", "type" => "error");
            }
        }
        $data["message"] = $messagedata;
        $this->load->view('pages/pastor', $data);
    }

    public function family() {
        $input_data = $this->input->post();
        $messagedata = array("title" => "", "message" => "", "type" => "");
        $captchadata = $this->session->userdata("captchacode_family");

        if (isset($input_data["submit"])) {

            if ($input_data["captcha"] == $captchadata) {
                unset($input_data["submit"]);
                unset($input_data["captcha"]);
                $input_data["request_date"] = date("Y-m-d");
                $input_data["request_time"] = date("H:m:s A");
                $this->db->insert('website_family_groceries', $input_data);
                $this->sendEmail($input_data, "family_groceries", "SPONSOR A FAMILY'S GROCERIES - Your request has been submitted.");
                $messagedata = array("title" => "Thanks You", "message" => "Your request has been submitted.", "type" => "success");
            } else {
                $messagedata = array("title" => "Invalid Captcha", "message" => "Please enter correct cpatcha", "type" => "error");
            }
        }
        $data["message"] = $messagedata;
        $this->load->view('pages/family', $data);
    }

    public function child() {
        $input_data = $this->input->post();
        $messagedata = array("title" => "", "message" => "", "type" => "");
        $captchadata = $this->session->userdata("captchacode_child");

        if (isset($input_data["submit"])) {

            if ($input_data["captcha"] == $captchadata) {
                unset($input_data["submit"]);
                unset($input_data["captcha"]);
                $input_data["request_date"] = date("Y-m-d");
                $input_data["request_time"] = date("H:m:s A");
                $this->db->insert('website_child_fee', $input_data);
                $this->sendEmail($input_data, "child_fee", "CHILD'S SCHOOL FEE - Your request has been submitted.");
                $messagedata = array("title" => "Thanks You", "message" => "Your request has been submitted.", "type" => "success");
            } else {
                $messagedata = array("title" => "Invalid Captcha", "message" => "Please enter correct cpatcha", "type" => "error");
            }
        }
        $data["message"] = $messagedata;

        $this->load->view('pages/child', $data);
    }

    function pillar_of_cloud() {
        $input_data = $this->input->post();
        $messagedata = array("title" => "", "message" => "", "type" => "");
        $captchadata = $this->session->userdata("captchacode_pillar_of_cloud");

        if (isset($input_data["submit"])) {
            if ($input_data["captcha"] == $captchadata) {
                unset($input_data["submit"]);
                unset($input_data["captcha"]);
                $input_data["request_date"] = date("Y-m-d");
                $input_data["request_time"] = date("H:m:s A");
                $this->db->insert('website_pillar_of_cloud', $input_data);
                $this->sendEmail($input_data, "pillar_of_cloud", "Pillar of Cloud - Your request has been submitted.");
                $messagedata = array("title" => "Thanks You", "message" => "Your request has been submitted.", "type" => "success");
            } else {
                $messagedata = array("title" => "Invalid Captcha", "message" => "Please enter correct cpatcha", "type" => "error");
            }
        }
        $data["message"] = $messagedata;
        $this->load->view('pages/piller_of_cloud', $data);
    }

    function youthretreatregistration() {
        $input_data = $this->input->post();
        $messagedata = array("title" => "", "message" => "", "type" => "");
        $captchadata = $this->session->userdata("captchacode_youthretreatregistration");

        if (isset($input_data["submit"])) {
            if ($input_data["captcha"] == $captchadata) {
                unset($input_data["submit"]);
                unset($input_data["captcha"]);
                $input_data["request_date"] = date("Y-m-d");
                $input_data["request_time"] = date("H:m:s A");

                $possible_letters = '123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $code = '';
                $i = 0;
                while ($i < 6) {
                    $code .= substr($possible_letters, mt_rand(0, strlen($possible_letters) - 1), 1);
                    $i++;
                }
                $code = $code . "" . rand(1000, 9999);
                $input_data['access_code'] = $code;

                $this->db->insert('website_youthretreat', $input_data);
                $this->sendEmail($input_data, "youthretreatregistration", "Youth Retreat - Your request has been submitted.");
                $messagedata = array("title" => "Thanks You", "message" => "Your request has been submitted.", "type" => "success");
            } else {
                $messagedata = array("title" => "Invalid Captcha", "message" => "Please enter correct cpatcha", "type" => "error");
            }
        }
        $data["message"] = $messagedata;
        $data["captchadata"] = $captchadata;
        $this->load->view('pages/youthretreatregistration', $data);
    }

    function youthretreatregistration_1() {
        $data = array();
        $this->load->view('pages/youthretreatregistration_1', $data);
    }

    function contact_us() {
        $contact_data = $this->input->post();
        $messagedata = array("title" => "", "message" => "", "type" => "");
        $captchadata = $this->session->userdata("captchacode_contact_us");

        if (isset($contact_data["submit"])) {
            if ($contact_data["captcha"] == $captchadata) {
                unset($contact_data["submit"]);
                unset($contact_data["captcha"]);
                $contact_data["request_date"] = date("Y-m-d");
                $contact_data["request_time"] = date("H:m:s A");
                $this->db->insert('website_contact_us', $contact_data);
                $this->sendEmail($contact_data, "contact_us", "Thank you for contact us.");
                $messagedata = array("title" => "Thanks You", "message" => "Thank you for contact us.", "type" => "success");
            } else {
                $messagedata = array("title" => "Invalid Captcha", "message" => "Please enter correct cpatcha", "type" => "error");
            }
        }
        $data["message"] = $messagedata;
        $this->load->view('pages/contact_us', $data);
    }

    function invite() {
        $input_data = $this->input->post();
        $messagedata = array("title" => "", "message" => "", "type" => "");

        $captchadata = $this->session->userdata("captchacode_invite");
        if (isset($input_data["submit"])) {
            if ($input_data["captcha"] == $captchadata) {
                unset($input_data["submit"]);
                unset($input_data["captcha"]);
                $input_data["request_date"] = date("Y-m-d");
                $input_data["request_time"] = date("H:m:s A");
                $this->db->insert('website_invite', $input_data);
                $this->sendEmail($input_data, "invite", "Invite Evans - Your request has been submitted.");
                $messagedata = array("title" => "Thanks You", "message" => "Your request has been submitted.", "type" => "success");
            } else {
                $messagedata = array("title" => "Invalid Captcha", "message" => "Please enter correct cpatcha", "type" => "error");
            }
        }
        $data["message"] = $messagedata;
        $this->load->view('pages/invite', $data);
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

    function hexrgb($hexstr) {
        $int = hexdec($hexstr);

        return array("red" => 0xFF & ($int >> 0x10),
            "green" => 0xFF & ($int >> 0x8),
            "blue" => 0xFF & $int);
    }

    function createCaptha($ctype) {
        //Settings: You can customize the captcha here
        $image_width = 120;
        $image_height = 40;
        $characters_on_image = 6;
        $font = APPPATH . '../assets/monofont.ttf';
        $possible_letters = '23456789bcdfghjkmnpqrstvwxyz';
        $random_dots = 0;
        $random_lines = 20;
        $captcha_text_color = "0x142864";
        $captcha_noice_color = "0x142864";
        $code = '';
        $i = 0;
        while ($i < $characters_on_image) {
            $code .= substr($possible_letters, mt_rand(0, strlen($possible_letters) - 1), 1);
            $i++;
        }
        $font_size = $image_height * 0.75;
        $image = @imagecreate($image_width, $image_height);
        $background_color = imagecolorallocate($image, 255, 255, 255);
        $arr_text_color = $this->hexrgb($captcha_text_color);
        $text_color = imagecolorallocate($image, $arr_text_color['red'],
                $arr_text_color['green'], $arr_text_color['blue']);
        $textbox = imagettfbbox($font_size, 0, $font, $code);
        $x = ($image_width - $textbox[4]) / 2;
        $y = ($image_height - $textbox[5]) / 2;
        imagettftext($image, $font_size, 0, $x, $y, $text_color, $font, $code);
        $this->session->set_userdata("captchacode_$ctype", $code);
        /* Show captcha image in the page html page */
        header('Content-Type: image/jpeg'); // defining the image type to be shown in browser widow
        imagejpeg($image); //showing the image
    }

    public function blog_api() {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://dds.christianappdevelopers.com:3000/v1/blogs/archive-dates/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($response, 1);
        return $data;
    }

    function blogApi($selectmonth) {
        $dat = str_replace(" ", "%20", $selectmonth);
        $link1 = "http://dds.christianappdevelopers.com:3000/v1/blogs/blogs-by-month/$dat";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $link1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, 1);
    }

    function blog_report() {
        $input_data = $this->input->get();

        $res = $this->blog_api();
        $tempselectsdates = array();
        $datearrayt = $res[0];
        $datearray = array_reverse($datearrayt);
        $selectedblogindex = 0;
        foreach ($datearray as $key => $value) {
            $tempselectsdates[$value['substr_date']] = $value['substr_date'];
        }
        $data['data'] = $tempselectsdates;
        $selectmonth = $datearray[0]['substr_date'];

        if (isset($input_data["submit"])) {
            $selectmonth = $input_data['blogs-by-month'];
        }
        if (isset($input_data["blog_index"])) {
            $selectedblogindex = $input_data["blog_index"];
        }
        ////////////////
        $blogdata = $this->blogApi($selectmonth);

        $data['selected_blog'] = $blogdata[$selectedblogindex];
        unset($blogdata[$selectedblogindex]);
        $data['blog_data'] = $blogdata;
        $data['select_month'] = $selectmonth;
        $this->load->view('pages/blog_report', $data);
    }

}
