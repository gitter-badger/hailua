<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ctr_shop extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function loadshop()
    {
        $this->load->view('shop');
    }
}