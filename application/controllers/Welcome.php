<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {




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
	 * 
	 * 
	 */

	 
	public function __construct() {
		
		parent::__construct();
		$this->load->model('coupon_model');

	}

	public function index()
	{

		$data['amount'] = "100";
		$data['error'] = "";
		if($value = $this->input->post()){
			if($coupon_details = $this->coupon_model->get_id_wise_register_details('coupon','coupon_code',$value['code']))
			{
				
				if($coupon_details[0]['valid_per_user'] >0){

					if($coupon_details[0]['status'] == 1){

						if($coupon_details[0]['last_date'] > date("Y-m-d")){

								if($coupon_details[0]['amount_limit'] > $data['amount']){

									if($coupon_details[0]['coupon_type'] == "flat"){

										

										$data['final_amount'] = $data['amount'] - $coupon_details[0]['discount'];

									}
									else{

										$data['final_amount'] = $data['amount'] * $coupon_details[0]['discount']/100;

									}

							}else $data['error'] = "amount limit"; 

						}else $data['error'] = "Coupon expired";  

					}else $data['error'] = "Coupon already used"; 

				}else $data['error'] = "Coupon limit exceed"; 
			}else $data['error'] = "Coupon does not exist";
			
		}
		$this->load->view('templates/header');
		$this->load->view('pages/home.php',$data);
		$this->load->view('templates/footer');

		
	}
	


	
}
