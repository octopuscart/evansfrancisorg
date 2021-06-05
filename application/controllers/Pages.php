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

}
