<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mobil extends CI_Controller {
public function warma(){
echo "Mobil itu Berwarna " . $this->uri->segment('3');
}
}