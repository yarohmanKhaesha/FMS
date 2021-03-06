<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Province extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('parser');
		
		if($this->session->userdata('logged_in') == FALSE){
			redirect("login");
		}
	}

	public function index()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "key: c0c507bd3ab1ca7bf80af1a2a7aac1a0"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
			$a = json_decode($response,true);
			$a = $a['rajaongkir'];
			$a = $a['results'];
		}



		$data = array(			
			'breadcrumb' => 'Province'
		);
		
		$data['page'] = $this->load->view('page/province/list',array('data_province'=>$a),true);
		$this->parser->parse('template/layout_admin',$data);
	}

}
