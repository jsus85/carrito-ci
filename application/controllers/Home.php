<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function  __construct(){
        parent::__construct();
        

        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('Product_model');
        

    }

	public function index()
	{	
		$data['products'] = $this->Product_model->get_productos();        
		$this->load->view('index' , $data);
	}


}
