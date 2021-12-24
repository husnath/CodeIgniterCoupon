<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct() {
		parent::__construct();
		$this->load->model('coupon_model');
	}

	public function coupon()
	{
		
		
		if($data = $this->input->post())
		{

			if(! $this->coupon_model->get_id_wise_register_details('coupon','coupon_code',strtoupper(trim($data['code']))))
			{
				$insert['coupon_code'] = strtoupper(trim($data['code']));
				$insert['coupon_type'] = $data['ctype'];
				$insert['valid_per_user'] = $data['count'];
				$insert['last_date'] = date('Y-m-d',strtotime($data['end_date']));
				$insert['discount'] = $data['discount'];			
				$insert['status'] = 1;
				$insert['coupon_creator'] = "vendor";
				$insert['amount_limit'] = $data['amount_limit'];
				$insert['max_discount'] = $data['max_discount'];
	
				if($this->coupon_model->insert($insert)){
					$data['success'] = "Coupon code added successfully. do you want add more???";
				}
			}
			

			else $data['error'] = "invalid coupon code";
		}
		
			$this->load->view('Admin/coupon',$data);
		
	}

	public function auto_generate() {
		// $data['code'] = random_string('alnum');
		// $this->load->view('Admin/coupon',$data);
		echo random_string('alnum');
	}


	

}
