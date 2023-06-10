<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function __construct() {
        parent::__construct();
		
		$this->load->library('session');
		$this->load->library('image_lib');
		$this->db1 = $this->load->database('otherdb', TRUE);
    }
	
	public function index()
	{
		date_default_timezone_set('Asia/Kolkata');
		$payload = @$_REQUEST['payload'];
		$newdata = array('payload'  => $payload); 
		$this->session->set_userdata($newdata);
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$detail = $data['detail'] = $result = $check->row_array();
			$obdData = $this->db1->order_by('id','desc')->get_where('sms_data',array('number' => $detail['number']))->row_array();
			$time = 1*60; //1 minutes
			$start_time = date('Y-m-d H:i:s', time());
			$end_time = date('Y-m-d H:i:s', time() + $time);
			
			if($detail['click_date'] < $start_time){
				$arr['no_of_bot'] = $detail['no_of_bot'] + 1;
				$arr['click_date'] = $end_time;
				$this->db->where('id',$detail['id']);
				$this->db->update('stellar_international_consumer',$arr);
				
				if($detail['no_of_bot'] > 0){
					$res = $this->link_click($detail['number'],$detail['id'],$obdData['template_id'],$obdData['comp_id'],$obdData['cp_id'],$obdData['tpid'],$obdData['tp'],$obdData['cp_type'],$detail['link']);
				}
			}
			
			if($result['name'] != NULL){
				
				$this->load->view('bot',$data);
				
			}else{
				
				$this->load->view('first_page',$data);
			}
				
		}else{
				$this->load->view('sorry');
		}
	}
	
	public function location()
	{
		$data = $this->input->post();
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$detail = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload))->row_array();
		$address = $this->geolocationaddress($data['latitude'],$data['longitude']);
		$arr = array('lat' => $data['latitude'],'longi' => $data['longitude'],'address' => $address);
		$this->db->where('id',$payload);
		$this->db->update('stellar_international_consumer',$arr);
		if($address){
			$this->user_address($detail['number'],$detail['id'],$data['latitude'],$data['longitude'],$address);
		}
		
		return true;
	}
	
	public function get_address(){
		$address = $this->geolocationaddress(28.58266987639722,77.31907240947457);
		$add = explode(",",$address);
		$count = count($add);
		//print_r($add); die;
		echo $add[$count-1];
		echo "<br>";
		echo $add[$count-2];
		echo "<br>";
		echo $add[$count-3];
	}
	public static function geolocationaddress($lat, $long)
	{
		$geocode = "https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$long&sensor=false&key=AIzaSyA-L5B5HPeiPIL7dTMmXrNXdRnZfRuH6gI";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $geocode);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		$response = curl_exec($ch);
		curl_close($ch);
		$output = json_decode($response);
		$dataarray = get_object_vars($output);
		if ($dataarray['status'] != 'ZERO_RESULTS' && $dataarray['status'] != 'INVALID_REQUEST') {
			//echo "<pre>"; print_r($dataarray['results'][0]); die;
			if (isset($dataarray['results'][0]->formatted_address)) {

				$address = $dataarray['results'][0]->formatted_address;

			} else {
				$address = 'address Not Found';

			}
		} else {
			$address = 'data Not Found';
		}

		return $address;
	}
	
	public function store($lat=30.92010558,$long=75.84292587,$distance=8)
	{
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		//$lat = ($this->session->userdata('lat'))?$this->session->userdata('lat'):0;
		//$long = ($this->session->userdata('longi'))?$this->session->userdata('longi'):0;
		
		$query = $this->db->query("SELECT *,distance FROM ( SELECT *,(((acos(sin(( $lat * pi() / 180))* sin(( `lat` * pi() / 180)) + cos(( $lat * pi() /180 ))* cos(( `lat` * pi() / 180)) * cos((( $long - `longi`) * pi()/180)))) * 180/pi()) * 60 * 1.1515 * 1.609344) as distance FROM `retailer_detail`) retailer_detail WHERE distance <= $distance ORDER BY distance ASC LIMIT 20");
		if($query->num_rows() > 0)
		{
			
			$data['store'] = $query->result_array(); 
		
		}else{
			$data['store'] = array();
		}
		
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$fetch_data = $check->row_array();
			
			$arr = array('store' => $fetch_data['store']+1);
			$this->db->where('id',$payload);
			$this->db->update('stellar_international_consumer',$arr);
		}
		$this->load->view('store',$data);
	}
	
	public function home()
	{
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$fetch_data = $check->row_array();
			$replay = '<p>Hi '.$fetch_data["name"].', what can we help you with today?</p>
						<button type="button" class="removebtn upload_pick" id="upload_pick">Upload Pic</button>
					  <button type="button" class="removebtn point_tally" id="point_tally">Points Tally</button>
					  <button type="button" class="removebtn program_faq" id="program_faq">Program FAQs</button>
					  <button type="button" class="removebtn feedback" id="feedback">Product Feedback</button>
					  <button type="button" class="removebtn friend" id="friend">Refer a friend</button>
					  <button type="button" class="removebtn help" id="help">Speak to help desk</button>';
			
			echo $replay;
			
		}else{
				echo "Sorry can't be able to understand you!";
		}
	}
	public function sorry_message(){
		$getMessage = $this->input->post('text');
		$check = $this->db->order_by('id','desc')->get_where('chatbot',array('queries' => $getMessage));
		if($check->num_rows() > 0){
			$fetch_data = $check->row_array();
			$replay = $fetch_data['replies'];
			echo $replay;
		}else{
			echo "Sorry can't be able to understand you!";
		}
	}
	
	public function registration()
	{
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$res = $check->row_array();
			$data = $this->input->post();
			$arr = array('name' => $data['text'],'enrollment_date' => date('Y-m-d'),'engagement_time' => date('H:i:s'));
			$this->db->where('id',$payload);
			$this->db->update('stellar_international_consumer',$arr);
			
			$check_paytm_count = $this->db->select('consumer_number_id')->get_where('consumer_number',array('consumer_number' => $res['number'],'type' => 'registration'))->num_rows();
			if($check_paytm_count <= 0){
				$amount = 10;
				$paytmStatus = $this->kompaifyPaytm($res['number'],$amount);
				$arr = array('consumer_number' => $res['number'],'type' => 'registration','paytm_trns_id' => $paytmStatus->txnid,'rs' => $amount,'call_date' => date('Y-m-d'));
				$this->db->insert('consumer_number',$arr);
			}
			
			
			echo "Okay";
			
		}else{
				echo "Sorry can't be able to understand you!";
		}
	}
	
	public function popup_close()
	{
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$data = $this->input->post();
			$arr = array('pop' => $data['value']);
			$this->db->where('id',$payload);
			$this->db->update('stellar_international_consumer',$arr);
			
			echo "Okay";
		}else{
			echo 0;
		}
		
	}
	public function upload_pick()
	{
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$fetch_data = $check->row_array();
			$replay = '<form method="post" id="upload_form" class="upload_form" enctype="multipart/form-data"> 
						<div id="divMsg" class="alert alert-success" style="display: none">
						<span id="msg"></span>
						</div>
						<img id="blah" src="'.base_url().'assets/ii.png" alt="your image" />
						
						<span class="upload_txt removebtn"><input type="file" name="image_file" accept="camera/*" id="finput" onchange="readURL(this);" capture><span>Upload your experience</span></span>
						</br>
						<button class="btn btn-success removebtn">Submit</button>
					</form>';
			
			echo $replay;
			
		}else{
				echo "Sorry can't be able to understand you!";
		}
	}
	
	public function point_tally()
	{
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$fetch_data = $check->row_array();
			$replay = "<p>Your reward points as of today are ".$fetch_data['point']." You have won Rs.60 Paytm Cashback (Rs.40 Reward & Rs.20 sign-up bonus) & you are 27 sticks away from your next slab where you can win Spotify Subscription for 1 month or Rs.140 Paytm Cashback.</p>
						<button type='button' class='home removebtn' id='home'>Home</button>";
			
			echo $replay;
			
		}else{
				echo "Sorry can't be able to understand you!";
		}
	}
	
	public function program_faq()
	{
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$fetch_data = $check->row_array();
			$replay = '<p>Below are some general faqs for you</p>
					<button type="button" class="what_src removebtn" id="what_src">What is SRC?</button>
					  <button type="button" class="join_src removebtn" id="join_src">How do I join SRC?</button>
					  <button type="button" class="src_work removebtn" id="src_work">How does SRC Work?</button>';
			
			echo $replay;
			
		}else{
				echo "Sorry can't be able to understand you!";
		}
	}
	
	public function faq_details()
	{
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$fetch_data = $check->row_array();
			$text = $this->input->post('text');
			if($text == 'What is SRC?'){
				$replay = "<p>The STYLE REWARDS CLUB (SRC) is  customer loyalty program that allows our patrons to earn PayTM Cash and Rewards that can be redeemed for various perks / cashback.</p>
							 <button type='button' class='removebtn program_faq' id='program_faq'>Program FAQs</button>
							<button type='button' class='home removebtn' id='home'>Home</button>";
			}elseif($text == 'How do I join SRC?'){
				$replay = "<p>Eligible individuals may enroll in the Program by creating an account, and agreeing to the PROGRAM TERMS. You may be required to provide mandatory details in order to create an account.</p>
							<button type='button' class='removebtn program_faq' id='program_faq'>Program FAQs</button>
							<button type='button' class='home removebtn' id='home'>Home</button>";
			}
			elseif($text == 'How does SRC Work?'){
				$replay = "<p>The Program is very simple and straightforward, you just need to register and keep sharing your experience via your loyalty account.  The more you share the faster you can earn Rewards to unlock Rewards. Rewards can be used towards the perks mentioned in our STYLE REWARDS CLUB (SRC) program feature list.</p>
							<button type='button' class='removebtn program_faq' id='program_faq'>Program FAQs</button>
							<button type='button' class='home removebtn' id='home'>Home</button>";
			}else{
				$replay = "Sorry can't be able to understand you!";
			}
			
			echo $replay;
			
		}else{
				echo "Sorry can't be able to understand you!";
		}
	}
	
	public function feedback()
	{
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$fetch_data = $check->row_array();
			$replay = '<p>Please rate your experience</p>
					<button type="button" class="excelelnt removebtn" id="excelelnt_experience">Excellent</button>
					  <button type="button" class="good removebtn" id="good_experience">Good</button>
					  <button type="button" class="average removebtn" id="average_experience">Average</button>
					  <button type="button" class="poor removebtn" id="poor_experience">Poor</button>';
			
			echo $replay;
			
		}else{
				echo "Sorry can't be able to understand you!";
		}
	}
	
	public function feedback_suggestion()
	{
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$data = $this->input->post();
			if($data['text'] == ''){
				$replay = "<p>How likely are yourecomment to your smoker friend.</p>
							<button type='button' class='one removebtn' id='one'>1</button>
							<button type='button' class='one removebtn' id='one'>2</button>
							<button type='button' class='one removebtn' id='one'>3</button>
							<button type='button' class='one removebtn' id='one'>4</button>
							<button type='button' class='one removebtn' id='one'>5</button>
							<button type='button' class='one removebtn' id='one'>6</button>
							<button type='button' class='one removebtn' id='one'>7</button>
							<button type='button' class='one removebtn' id='one'>8</button>
							<button type='button' class='one removebtn' id='one'>9</button>
							<button type='button' class='one removebtn' id='one'>10</button>";
			}
			
			echo $replay;
			
		}else{
				echo "Sorry can't be able to understand you!";
		}
	}
	
	public function feedback_store()
	{
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$data = $this->input->post();
			$arr = array('feedback' => $data['text'],'consumer_id' => $payload);
			$this->db->insert('consumer_feedback',$arr);
			$replay = "<p>Thanks for sharing your feedback, your feedback is precious to us.</p>
			<button type='button' class='home removebtn' id='home'>Home</button>";
			echo $replay;
			
		}else{
				echo "Sorry can't be able to understand you!";
		}
	}
	
	public function refer_friend()
	{
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$fetch_data = $check->row_array();
			$replay = '<p>Please enter the name and number of your friend</p>
			<input type="text" name="name" class="removebtn" id="name" placeholder="Enter Name">
			<input type="text" name="number" id="number" class="removebtn" placeholder="Enter Number">
			<button id="refer_friend_store" class="refer_friend_store removebtn">Send</button>';
			
			echo $replay;
			
		}else{
				echo "Sorry can't be able to understand you!";
		}
	}
	
	public function refer_friend_store(){
		
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			
			$data = $this->input->post();
			$arr = array('name' => $data['name'],'number' => $data['number'],'consumer_id' => $payload,'date' => date('Y-m-d'),'time' => date('H:i:s'));
			$this->db->insert('consumer_refer_friend',$arr);
			$replay = "<p>Your reffer details has been stored successfully.</p>
			<button type='button' class='home removebtn' id='home'>Home</button>";
			
			echo $replay;
			
		}else{
				echo "Sorry can't be able to understand you!";
		}
	}
	
	public function registrationold()
	{
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$data = $this->input->post();
			$arr = array('name' => $data['name']);
			$this->db->where('id',$payload);
			$this->db->update('stellar_international_consumer',$arr);
			redirect(base_url().'?payload='.$payload);
		}else{
				redirect(base_url().'?payload='.$payload);
		}
	}
	
	function ajaxImageStore()  
    {  
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
         if(isset($_FILES["image_file"]["name"]))  
         {  
              $config['upload_path'] = '/var/www/html/chatboat/uploads';  
              $config['allowed_types'] = 'JPG|PNG|jpg|jpeg|png|gif';  
              $this->load->library('upload', $config);  
              if(!$this->upload->do_upload('image_file'))  
              {  
                  $error =  $this->upload->display_errors(); 
                  echo json_encode(array('msg' => $error, 'success' => false));
              }  
              else 
              {  
                   $data = $this->upload->data(); 
                   $insert['bill'] = $data['file_name'];
                   $insert['consumer_id'] = $payload;
                   $this->db->insert('consumer_bill',$insert);
                   $getId = $this->db->insert_id();
 
                   $arr = array('msg' => 'Image has not uploaded successfully', 'success' => false);
 
                   if($getId){
                    $arr = array('msg' => 'You’re image uploaded successfully. Your points will be rewarded post approval in next 24 hours.', 'success' => true);
                   }
                   echo json_encode($arr);
              }  
         }  
    } 
	
	function check_store()  
    {  
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		
		
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
		$fetch_data = $check->row_array();
		$lat = ($fetch_data['lat'])?$fetch_data['lat']:0;
		$long = ($fetch_data['longi'])?$fetch_data['longi']:0;
		$lat=30.92010558;
		$long=75.84292587;
		$distance=8;
		$query = $this->db->query("SELECT *,distance FROM ( SELECT *,(((acos(sin(( $lat * pi() / 180))* sin(( `lat` * pi() / 180)) + cos(( $lat * pi() /180 ))* cos(( `lat` * pi() / 180)) * cos((( $long - `longi`) * pi()/180)))) * 180/pi()) * 60 * 1.1515 * 1.609344) as distance FROM `retailer_detail`) retailer_detail WHERE distance <= $distance ORDER BY distance ASC LIMIT 20");
		if($query->num_rows() > 0)
		{
			 $arr = array('msg' => 'store found', 'success' => true);
			echo json_encode($arr); 
		
		}else{
			echo json_encode(array('msg' => 'store not found', 'success' => false));
		}  
		}else{
			echo json_encode(array('msg' => 'user not found', 'success' => false));
		}
    }
	
	public function clickstore()
	{
		 $firstcount = $this->db->get_where('user_detail',array('number' => $this->session->userdata('number')))->num_rows();
		 if($firstcount <= 0)
		 {
			$value = 1;
			$arr = array('click_Locate_Store' =>$value,'number' =>$this->session->userdata('number'));
			$this->db->insert('user_detail',$arr);
		 }
		 else
		 {
			$query = $this->db->get_where('user_detail',array('number' => $this->session->userdata('number')))->row_array();
			$value = $query['click_Locate_Store'] + 1;
			$arr = array('click_Locate_Store' =>$value);
			$this->db->where('number',$this->session->userdata('number'));
			$this->db->update('user_detail',$arr);
			 
		 }
		
	}
	
	public function clicklocation()
	{
		 $firstcount = $this->db->get_where('user_detail',array('number' => $this->session->userdata('number')))->num_rows();
		 if($firstcount <= 0)
		 {
			$value = 1;
			$arr = array('google' =>$value,'number' =>$this->session->userdata('number'));
			$this->db->insert('user_detail',$arr);
		 }
		 else
		 {
			$query = $this->db->get_where('user_detail',array('number' => $this->session->userdata('number')))->row_array();
			$value = $query['google'] + 1;
			$arr = array('google' =>$value);
			$this->db->where('number',$this->session->userdata('number'));
			$this->db->update('user_detail',$arr);
			 
		 }
		
	}
	
	public function clickorder()
	{
	     $number = isset($_REQUEST['phone'])?$_REQUEST['phone']:0;
		 $firstcount = $this->db->get_where('user_detail',array('number' => $this->session->userdata('number')))->num_rows();
		 if($firstcount <= 0)
		 {
			$value = 1;
			$arr = array('order_now' =>$value,'number' =>$this->session->userdata('number'));
			$this->db->insert('user_detail',$arr);
		 }
		 else
		 {
			$query = $this->db->get_where('user_detail',array('number' => $this->session->userdata('number')))->row_array();
			$value = $query['order_now'] + 1;
			$arr = array('order_now' =>$value);
			$this->db->where('number',$this->session->userdata('number'));
			$this->db->update('user_detail',$arr);
			 
		 }
		
	}
	
	public function calltoorder()
	{
	    	$data = $this->input->post();
	    	$arr = array('retailer_number' => $data['number'],'consumer_number' => $data['cnumber']);
	    	$this->db->insert('calltoorder',$arr);
	}
	
	public function clicktostore()
	{
	    	$data = $this->input->post();
	    	$arr = array('retailer_number' => $data['number'],'consumer_number' => $data['cnumber'],'store_name' => $data['name'],'distance' => $data['distance']);
	    	$this->db->insert('clicktolocation',$arr);
	}
	
	public function clickhelp()
	{
		 $firstcount = $this->db->get_where('user_detail',array('number' => $this->session->userdata('number')))->num_rows();
		 if($firstcount <= 0)
		 {
			$value = 1;
			$arr = array('helpdesk' =>$value,'number' =>$this->session->userdata('number'));
			$this->db->insert('user_detail',$arr);
		 }
		 else
		 {
			$query = $this->db->get_where('user_detail',array('number' => $this->session->userdata('number')))->row_array();
			$value = $query['helpdesk'] + 1;
			$arr = array('helpdesk' =>$value);
			$this->db->where('number',$this->session->userdata('number'));
			$this->db->update('user_detail',$arr);
			 
		 }
		
	}
	
	public function question_1()
	{
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$fetch_data = $check->row_array();
			$data = $this->input->post();
			$arr = array('q1'=>$data['text']);
			$this->db->where('id',$payload);
			$this->db->update('stellar_international_consumer',$arr);
			$rs = $this->question_1_event($fetch_data['number'],$data['text'],$payload);
			echo "thank you ".$rs;
			
		}else{
				echo "Sorry can't be able to understand you!";
		}
	}
	
	public function question_2()
	{
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$fetch_data = $check->row_array();
			$data = $this->input->post();
			$arr = array('q2'=>$data['text']);
			$this->db->where('id',$payload);
			$this->db->update('stellar_international_consumer',$arr);
			$rs = $this->question_2_event($fetch_data['number'],$data['text'],$payload);
			echo "thank you ".$rs;
			
		}else{
				echo "Sorry can't be able to understand you!";
		}
	}
	
	public function question_3()
	{
		$nm = isset($_REQUEST['payload'])?$_REQUEST['payload']:0;
		$payload = ($this->session->userdata('payload'))?$this->session->userdata('payload'):$nm;
		$check = $this->db->order_by('id','desc')->get_where('stellar_international_consumer',array('id' => $payload));
		if($check->num_rows() > 0){
			$fetch_data = $check->row_array();
			$data = $this->input->post();
			$arr = array('q3'=>$data['text']);
			$this->db->where('id',$payload);
			$this->db->update('stellar_international_consumer',$arr);
			$rs = $this->question_2_event3($fetch_data['number'],$data['text'],$payload);
			echo "thank you ".$rs;
			
		}else{
				echo "Sorry can't be able to understand you!";
		}
	}
	
	public function short_url($id)
	{
		$url = 'https://smartdecisionpoints.com/chatboat/?payload='.$id;
		$json = file_get_contents("https://cutt.ly/api/api.php?key=0e8f6498d34ed84008f398748285efc0b8931&short=$url");
		$data = json_decode ($json, true);
		return $data['url']['shortLink'];
		//print_r($data['url']['shortLink']);die;
	}
	
	public function user_address($number,$id,$lat,$long,$address){
		$url ="https://evbk.gamooga.com/evwid/?c=1f90211a-dee3-4dab-9dcc-906f3d0e2d27&u=".$number."&e=user_address&tp=s&ky=mobile_num&vl=".$number."&tp=s&ky=enroll_id&vl=".$id."&tp=s&ky=lat&vl=".$lat."&tp=s&ky=long&vl=".$long."&tp=s&ky=address&vl=".$address."&tp=s&tm=".(time()*1000);
	
		//echo $url; die; 
		$curl = curl_init();		
		curl_setopt_array($curl, array(			
		CURLOPT_URL => $url,			
		CURLOPT_RETURNTRANSFER => true,	
		CURLOPT_ENCODING => "",			
		CURLOPT_MAXREDIRS => 10,	
		CURLOPT_TIMEOUT => 30,			
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,		
		CURLOPT_CUSTOMREQUEST => "GET",		
		CURLOPT_SSL_VERIFYPEER =>false,		
		));	
		$response = curl_exec($curl);	
		$err = curl_error($curl);	
		curl_close($curl);	


		if ($err) {			
		echo "cURL Error #:" . $err;	
		} else {			
			return json_decode($response);	
		}	
	
		
	}
	public function link_click($number,$id,$temId,$camId,$cp_id,$tpid,$tp,$cp_type,$surl){	
	
	$url ="https://evbk.gamooga.com/evwid/?c=1f90211a-dee3-4dab-9dcc-906f3d0e2d27&u=".$number."&e=success_link_click&tp=s&ky=mobile_num&vl=".$number."&tp=s&ky=temp_id&vl=".$temId."&tp=s&ky=camp_id&vl=".$camId."&tp=s&ky=cp_id&vl=".$cp_id."&tp=s&ky=tpid&vl=".$tpid."&tp=s&ky=tp&vl=".$tp."&tp=s&ky=cp_type&vl=".$cp_type."&tp=s&ky=enroll_id&vl=".$id."&tp=s&ky=messanger_url&vl=".$surl."&ky=enrolled&vl=yes&tp=s&ky=correct&vl=yes&tp=s&tm=".(time()*1000);
	
	//echo $url; die; 
	$curl = curl_init();		
	curl_setopt_array($curl, array(			
	CURLOPT_URL => $url,			
	CURLOPT_RETURNTRANSFER => true,	
	CURLOPT_ENCODING => "",			
	CURLOPT_MAXREDIRS => 10,	
	CURLOPT_TIMEOUT => 30,			
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,		
	CURLOPT_CUSTOMREQUEST => "GET",		
	CURLOPT_SSL_VERIFYPEER =>false,		
	));	
	$response = curl_exec($curl);	
	$err = curl_error($curl);	
	curl_close($curl);	


		if ($err) {			
		echo "cURL Error #:" . $err;	
		} else {			
			return json_decode($response);	
		}	
		
	}
	
	public function question_1_event($number,$ans,$consumer_id){	
	
	$url ="http://evbk.gamooga.com/evwid/?c=1f90211a-dee3-4dab-9dcc-906f3d0e2d27&u=".$number."&e=popup1_response&ky=mobile&vl=".$number."&tp=s&ky=response1&vl=".$ans."&tp=s&ky=enroll_id&vl=".$consumer_id."&tp=s&tm=".(time()*1000);
	//echo $url; die;
	$curl = curl_init();		
	curl_setopt_array($curl, array(			
	CURLOPT_URL => $url,			
	CURLOPT_RETURNTRANSFER => true,	
	CURLOPT_ENCODING => "",			
	CURLOPT_MAXREDIRS => 10,	
	CURLOPT_TIMEOUT => 30,			
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,		
	CURLOPT_CUSTOMREQUEST => "GET",		
	CURLOPT_SSL_VERIFYPEER =>false,		
	));	
	$response = curl_exec($curl);	
	$err = curl_error($curl);	
	curl_close($curl);	


		if ($err) {			
		echo "cURL Error #:" . $err;	
		} else {			
			echo $response;	
		}	
		
	}
	
	public function question_2_event($number,$ans,$consumer_id){	
	
	$url ="http://evbk.gamooga.com/evwid/?c=1f90211a-dee3-4dab-9dcc-906f3d0e2d27&u=".$number."&e=popup2_response&ky=mobile&vl=".$number."&tp=s&ky=response2&vl=".$ans."&tp=s&ky=enroll_id&vl=".$consumer_id."&tp=s&tm=".(time()*1000);
	//echo $url; die;
	$curl = curl_init();		
	curl_setopt_array($curl, array(			
	CURLOPT_URL => $url,			
	CURLOPT_RETURNTRANSFER => true,	
	CURLOPT_ENCODING => "",			
	CURLOPT_MAXREDIRS => 10,	
	CURLOPT_TIMEOUT => 30,			
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,		
	CURLOPT_CUSTOMREQUEST => "GET",		
	CURLOPT_SSL_VERIFYPEER =>false,		
	));	
	$response = curl_exec($curl);	
	$err = curl_error($curl);	
	curl_close($curl);	


		if ($err) {			
		echo "cURL Error #:" . $err;	
		} else {			
			echo $response;	
		}	
		
	}
	
	public function question_2_event3($number,$ans,$consumer_id){	
	
	$url ="http://evbk.gamooga.com/evwid/?c=1f90211a-dee3-4dab-9dcc-906f3d0e2d27&u=".$number."&e=popup3_response&ky=mobile&vl=".$number."&tp=s&ky=response2&vl=".$ans."&tp=s&ky=enroll_id&vl=".$consumer_id."&tp=s&tm=".(time()*1000);
	//echo $url; die;
	$curl = curl_init();		
	curl_setopt_array($curl, array(			
	CURLOPT_URL => $url,			
	CURLOPT_RETURNTRANSFER => true,	
	CURLOPT_ENCODING => "",			
	CURLOPT_MAXREDIRS => 10,	
	CURLOPT_TIMEOUT => 30,			
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,		
	CURLOPT_CUSTOMREQUEST => "GET",		
	CURLOPT_SSL_VERIFYPEER =>false,		
	));	
	$response = curl_exec($curl);	
	$err = curl_error($curl);	
	curl_close($curl);	


		if ($err) {			
		echo "cURL Error #:" . $err;	
		} else {			
			echo $response;	
		}	
		
	}
	
	public function question_3_event($number,$ans,$consumer_id){	
	
	$url ="http://evbk.gamooga.com/evwid/?c=1f90211a-dee3-4dab-9dcc-906f3d0e2d27&u=".$number."&e=popup3_response&ky=mobile&vl=".$number."&tp=s&ky=response3&vl=".$ans."&tp=s&ky=enroll_id&vl=".$consumer_id."&tp=s&tm=".(time()*1000);
	$curl = curl_init();		
	curl_setopt_array($curl, array(			
	CURLOPT_URL => $url,			
	CURLOPT_RETURNTRANSFER => true,	
	CURLOPT_ENCODING => "",			
	CURLOPT_MAXREDIRS => 10,	
	CURLOPT_TIMEOUT => 30,			
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,		
	CURLOPT_CUSTOMREQUEST => "GET",		
	CURLOPT_SSL_VERIFYPEER =>false,		
	));	
	$response = curl_exec($curl);	
	$err = curl_error($curl);	
	curl_close($curl);	


		if ($err) {			
		echo "cURL Error #:" . $err;	
		} else {			
			echo $response;	
		}	
	}
	
	private function kompaifyPaytm($customerMobile,$amount){		
	$txnid  = uniqid();	
	//$amount=10;		
	$apisecret = "HVQ2cpJ772jFNYeWN9xs8zhJZtFeXSHFYCF94mtzevqH3xm3";	
	$extnid = "qYnCWV78S3sqYqcpmhWLYc57yYUcuMEP4zH3UpQVrnVB2YJq"; 
	$concat = $amount."|".$extnid."|".$txnid."|".$apisecret;	
	$hash = hash("sha512",$concat);		
	$operator = 2002;	
	$connType = 1;
	$rechargeType = "R";			
	$results = "";	
	$url = "https://api.komparify.com/api/v2/recharge?search_type=voucher&number=$customerMobile&value=$amount&api_user_id=$extnid&txnid=$txnid&securehash=$hash&operator=$operator&recharge_type=$rechargeType&letitgothrough=1&connection_type=$connType";		
	$curl = curl_init();		
	curl_setopt_array($curl, array(			
	CURLOPT_URL => $url,			
	CURLOPT_RETURNTRANSFER => true,	
	CURLOPT_ENCODING => "",			
	CURLOPT_MAXREDIRS => 10,	
	CURLOPT_TIMEOUT => 30,			
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,		
	CURLOPT_CUSTOMREQUEST => "GET",		
	CURLOPT_SSL_VERIFYPEER =>false,		
	CURLOPT_HTTPHEADER => array(		
	"cache-control: no-cache",			
	"postman-token: 54e51a0d-8350-71e9-bb66-ec853284bc8b"		
	),		));	
	$response = curl_exec($curl);	
	$err = curl_error($curl);	
	curl_close($curl);		
	if ($err) {			
	echo "cURL Error #:" . $err;	
	} else {			
	return json_decode($response);	
	}	}
	
	
}
