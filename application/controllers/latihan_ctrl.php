<?php
defined("BASEPATH") OR exit('No direct script access allowed');
class latihan_ctrl extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
    public function index(){
        echo "Ini method index pada controller latihan | cara membuat controller pada framework | Rahmad.com";
    }
    public function hello_world(){
    $this->load->view('view_latihan');
        
    }
}