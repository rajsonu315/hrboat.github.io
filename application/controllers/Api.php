<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	function __construct()
	{
		parent::__construct();
			
			$this->load->model('Apimodel');
          
		ini_set('post_max_size', '100000000');
		ini_set('upload_max_filesize', '100000000');
		ini_set('memory_limit', -1);
		ini_set('max_input_time', -1);
	} 

	public function user_address()	
		{ 
			$json = trim(file_get_contents('php://input'));		
			$inputData['user_id']    =  $this->input->get_post('user_id', TRUE);	
			$inputData['user']    =  $this->input->get_post('user', TRUE);	
			$inputData['key']    =  $this->input->get_post('key', TRUE);	
			
			$input_data = json_decode($json, TRUE);	
			if(!$inputData['user_id'] && !empty($input_data))			
				$inputData['user_id'] = $input_data['user_id'];
			if(!$inputData['user'] && !empty($input_data))			
				$inputData['user'] = $input_data['user'];
			if(!$inputData['key'] && !empty($input_data))			
				$inputData['key'] = $input_data['key'];
			//print_r($inputData); die;
			if (!empty($inputData['user']) && !empty($inputData['key']) && ($inputData['user'] == 'DATABASE_chat') && ($inputData['key'] == '1B8892')) {	
			if (!empty($inputData['user_id'])) {	
			if ($address = $this->Apimodel->user_address($inputData['user_id'])) 		
			{
				if(!empty($address[0]->address)){
					//echo "<pre>"; print_r($address[0]->address); die;
					$add = explode(",",$address[0]->address);
					$count = count($add);
					
					$country = $add[$count-1];
					$state = $add[$count-2];
					$city = $add[$count-3];
					
					$result['Success'] = 'TRUE';				
					$result['Message'] = 'User Address';		
					$result['country'] = trim($country);		
					$result['state'] = trim($state);		
					$result['city'] = trim($city);	
					$result['Result'] = $address;	
				}else{
					$result['Success'] = "FALSE";	
					$result['Message'] = 'Address Not Found';	
					$result['Result'] = array(); 
				}
				
			} 
			else 
			{ 				
					$result['Success'] = "FALSE";	
					$result['Message'] = 'Failed';	
					$result['Result'] = array(); 
			}	
					
			return die(json_encode($result));	
			}else{			
			echo json_encode(array('Success' => "FALSE", 'Message' => 'Please Insert Valid number', 'Result' => array($inputData)));exit; 		
			}  

		}else{			
			echo json_encode(array('Success' => "FALSE", 'Message' => 'Please Insert Valid Authentication', 'Result' => array($inputData)));exit; 		
			}
		}


}