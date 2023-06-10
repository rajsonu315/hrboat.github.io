<?php
 ob_start();
if (!defined('BASEPATH')) exit('No direct script access allowed');


class Apimodel extends CI_Model {
    function __construct() {
        parent::__construct(); 

    }
   
	
	
	public function user_address($id){
		$this->db->select("lat,longi,address");
		$this->db->from("stellar_international_consumer");
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}
    

}

?>