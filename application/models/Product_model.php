<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {


	    public function __construct()
        {

            // Call the CI_Model constructor
            parent::__construct();
        }


        public function get_productos()
        {

            $this->db->order_by("id", "desc"); 
            $query = $this->db->get('productos');
            return $query->result();

        }

        public function get_by_id($id)
        {
                    
           $this->db->select('*');
            $this->db->from('productos');
            $this->db->where('id', $id);
            
                      $query = $this->db->get();

            return $query->result_array(); 

         }
}
 