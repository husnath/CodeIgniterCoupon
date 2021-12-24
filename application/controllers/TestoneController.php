<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestoneController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('coupon_model');
        $this->load->helper('string');
	}

    public function index()
    {
        // auto generate coupon code

        echo random_string('alnum');

       
    }


}

?>