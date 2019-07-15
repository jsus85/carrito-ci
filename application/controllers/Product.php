<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller{


	function  __construct(){
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('Product_model');
    }


    function addToCart($proID){


        // Fetch specific product by ID
        $product = $this->Product_model->get_by_id($proID);

        // Add product to the cart
        $data = array(
            'id'    => $product[0]['id'],
            'qty'    => 1,
            'price'    => $product[0]['precio'],
            'name'    => $product[0]['nombres'],
            'image' => $product[0]['imagen']
        );
        $this->cart->insert($data);
        
        // Redirect to the cart page
        redirect('cart/');

    }


}