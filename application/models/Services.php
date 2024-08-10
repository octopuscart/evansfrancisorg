<?php

require_once __DIR__ .'/../libraries/sendgrid/sendgrid-php.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    function sendmail() {


        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("contact@evansfrancis.org", "Evans Francis");
        $email->setSubject("Sending with Twilio SendGrid is Fun");
        $email->addTo("pankaj21pathak@gmail.com", "Pankaj Pathak");
        $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
// $email->addContent(
//     "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
// ); 
        $sendgrid = new \SendGrid(EMAIL_PASS);
        try {
            $response = $sendgrid->send($email);
            print $response->statusCode() . "\n";
            print_r($response->headers());
            print $response->body() . "\n";
        } catch (Exception $e) {
            echo 'Caught exception: ' . $e->getMessage() . "\n";
        }
    }
}
