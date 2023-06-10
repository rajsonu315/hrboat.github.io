<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');
		$this->load->library('image_lib');
		$this->db1 = $this->load->database('otherdb', TRUE);
	}


	public function index()
	{
		date_default_timezone_set('Asia/Kolkata');
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('t_id' => $t_id));
		if ($check->num_rows() == 0) {
			$data = array('number' => $payload, 't_id' => $t_id);


			$this->db1->insert('c_user', $data);
		}
		$this->load->view('bot', $payload);
		/* 	print_r($this->session->userdata());die; */
	}


	public function Furtherdes()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;

		$value = $this->input->post('text');
		$data = array('query_d' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);


		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Thank You We will get in touch with you soon.

 </p>

			
							';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}


	public function Work_From_Home()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Please select one option to proceed 
			</p>
			<div class="myty" style=" display: grid; width: 246px; margin: auto;">

			<div class="form-group" >
				<input type="radio" name="h4" class="radio removebtn Apply_WFH hcs" id="Apply_WFH" value="Apply_WFH">
				<label for="Apply_WFH" class="removebtn">Apply Work from home</label>
			</div>
			<div class="form-group" >
				<input type="radio" name="h4" class="radio removebtn WFH_Summary hcs" id="WFH_Summary" value="WFH_Summary">
				<label for="WFH_Summary" class="removebtn">Work from home Summary</label>
			</div>
			





		</div>

	
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}


	public function Apply_WFH()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Please select Start Date & End Date to apply for work from home.

			</p>
			<div class="myty" style=" display: grid; width: 200px; margin: auto;">

			<div class="form-group" style="margin: 0;margin-right: 48px;">
				<i class="text-dark">Start Dtae
		
				</i>
				<div class="  calendars ">
		
		
					<input type="date" placeholder="Date" class="date" style="width: 205px;   height: 50px; " id="date">
				</div>
				<i class="text-dark">End Date
		
				</i>
		
		
				<div class="  calendars ">
		
		
					<input type="date" placeholder="Date" class="date" style="width: 205px;   height: 50px; " id="date">
				</div>
			</div>
		
			<div class="form-group" style="margin: 0;margin-right: 48px;">
				<input type="radio" name="h4" class="radio removebtn  hcs Apply_Yes" id="Apply_Yes" value="Submit">
				<label for="Apply_Yes" class="removebtn">Submit</label>
			</div>
		</div>
	
		 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}

	/////////////////////////

public function Apply_Yes()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>To track the status you can check from WFH Summary
			</p>
			<div class="myty" style=" display: grid; width: 200px; margin: auto;">
			<div class="form-group" style="margin: 0;margin-right: 48px;">
				<i class="text-dark">Do you still need my help?</i>
				<a href="?" class="badge badge-pill hrbutton  btn-outline-dark WFH_Summary">Yes</a>
				<a href="#" class="badge badge-pill hrbutton  btn-outline-dark Apply_No">No</a>
				</div
			</div>
	
		 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}


/////////////////////////

public function Apply_No()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Thankyou!
			</p>
			
	
		 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}


/////////////////////////

public function WFH_Summary()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Below is you summary for WFH</p>
			
		<div class="myty" style="  width: 100%; margin: auto;">
			<table class="table">
			<thead>
			  <tr>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Status</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>11-01-23</td>
				<td>16-01-23</td>
				<td>Test</td>
			  </tr>
			</tbody>
		  </table>

		  <div class="form-group" style="margin: 0;margin-right: 48px;">
			<i class="text-dark d-block">To download WFH summary click on download button</i>
			<a href="https://brit-idea.com/hrbot/assets/Salary.pdf" download class="badge badge-pill hrbutton  btn-outline-dark">Download</a>
			<a href="?" class="badge badge-pill hrbutton  btn-outline-dark">Return</a>
			</div>
		</div>
		 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}

	public function Applay_leave()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Please select Start Date & End Date to apply for the leave
			</p>
			<div class="myty" style=" display: grid; width: 200px; margin: auto;">

			<div class="form-group" style="margin: 0;margin-right: 48px;">

			<div class="form-group">
			<label class="text-dark" for="sel1">Select Leave:</label>
			<select class="form-control" id="sel1">
			  <option>Casual Leave</option>
			  <option>Earned Leave</option>
			  <option>Sick leave</option>
		   
			</select>
		  </div>
				<i>Start Date
				</i>
				<div class="  calendars ">
	
	
					<input type="date" placeholder="Date" class="date" style="width: 205px;   height: 50px; " id="date">
				</div>
				<i>End Date
				</i>
	
	
				<div class="  calendars ">
	
	
					<input type="date" placeholder="Date" class="date" style="width: 205px;   height: 50px; " id="date">
				</div>
			</div>
	
			<div class="form-group" style="margin: 0;margin-right: 48px;">
				<input type="radio" name="h4" class="radio removebtn Leave_request hcs" id="Leave_request" value="">
				<label for="Leave_request" class="removebtn">save</label>
			</div>
		</div>
	
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}




	
	public function Leave_request()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Your Leave request has been submitted. To track the status you can check from Leave Summary

			</p>
			<div class="myty" style=" display: grid; width: 200px; margin: auto;">

			<div class="form-group" style="margin: 0;margin-right: 48px;">
				<i>Do you still need my help?
	
				</i>
	
				<div class="form-group" style="margin: 0;margin-right: 48px; display: contents;">
					<a href="?" class="badge badge-pill hrbutton  btn-outline-dark">Yes</a>

					<a href="#" class="badge badge-pill hrbutton  btn-outline-dark Norequest" >No</a>

				</div>
				
	
	
			</div>
	
	
		</div>


	

	
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}





	public function norequest()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Thanku

			</p>



	

	
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}




	
	public function Documents()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>What would you like to do with Documents?</p>
			<div class="myty" style=" display: grid; width: 246px; margin: auto;">
			<i class="text-dark">Please select document you want:</i>
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<a href="#" class="badge badge-pill hrbutton btn-outline-dark Request_Documents" >Request for Documents</a>
			<a href="#" class="badge badge-pill hrbutton btn-outline-dark View_my_documents" >View my documents</a>

			<a href="#" class="badge badge-pill hrbutton btn-outline-dark Document_Trackerbtn" >Document Tracker</a>

			</div>

		</div>
	
		 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}


	public function Request_Documents()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Please select document you want:
			</p>
			<div class="myty" style=" display: grid; width: 246px; margin: auto;">
			<i class="text-dark">Please select document you want:</i>
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<a href="#" class="badge badge-pill hrbutton btn-outline-dark Pay_Slip" >Salary Slip
			</a>
		

			<a href="#" class="badge badge-pill hrbutton btn-outline-dark Form_16" >PF
			</a>

			</div>

		</div>
	
		 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}


	/////////////////


	public function Pay_Slip()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Please select month for which you want to generate your Salary Slip

			</p>
			<div class="myty" style=" display: grid; width: 200px; margin: auto;">

			<div class="form-group" style="margin: 0;margin-right: 48px;">
				<i class="text-dark">Select Month
	
				</i>
				<div class="  calendars ">
	
	
					<input type="date" placeholder="Date" class="date" style="width: 205px;   height: 50px; " id="date">
				</div>
	
			</div>
	
			<div class="form-group" style="margin: 0;margin-right: 48px;">
				<input type="radio" name="h4" class="radio removebtn submitteddattes hcs" id="submitteddattes" value="">
				<label for="submitteddattes" class="removebtn">save</label>
			</div>
		</div>
	
		 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}////////////////////



	public function submitteddattes()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Please check document tracker to track
			the status of your request
			

			</p>
			<div class="myty" style=" display: grid; width: 246px; margin: auto;">
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<a href="#" class="badge badge-pill hrbutton btn-outline-dark Document_Trackerbtn" >Document Tracker
			</a>
			<a href="?" class="badge badge-pill hrbutton btn-outline-dark Relieving_Letter" >Return
			</a>

			</div>

			</div>
	
		 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}////////////////////




	public function Relieving_Letter()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Please Enter Joining Date, Date of Exit

			</p>
			<div class="myty" style=" display: grid; width: 200px; margin: auto;">

			<div class="form-group" style="margin: 0;margin-right: 48px;">
				<i class="text-dark">Joining Dtae
		
				</i>
				<div class="  calendars ">
		
		
					<input type="date" placeholder="Date" class="date" style="width: 205px;   height: 50px; " id="date">
				</div>
				<i class="text-dark">Exit Date
		
				</i>
		
		
				<div class="  calendars ">
		
		
					<input type="date" placeholder="Date" class="date" style="width: 205px;   height: 50px; " id="date">
				</div>
			</div>
		
			<div class="form-group" style="margin: 0;margin-right: 48px;">
				<input type="radio" name="h4" class="radio removebtn  hcs submitteddattes" id="submitteddattes" value="">
				<label for="submitteddattes" class="removebtn">Submit</label>
			</div>
		</div>
	
		 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}





	/////////////////////////



	public function Form_16()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Please Select Year for which you want Form 16

			</p>
			<div class="myty" style=" display: grid; width: 200px; margin: auto;">

			<div class="form-group" style="margin: 0;margin-right: 48px;">
		
				<div class="form-group">
					<label class="text-dark" for="sel1">Select Year:</label>
					<select class="form-control" id="sel1">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					</select>
				  </div>
		
			</div>
		
			<div class="form-group" style="margin: 0;margin-right: 48px;">
				<input type="radio" name="h4" class="radio removebtn  hcs submitteddattes" id="submitteddattes" value="">
				<label for="submitteddattes" class="removebtn">save</label>
			</div>
		</div>
		
	
		 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}


	public function View_my_documents()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>View my documents
			</p>
			<div class="myty" style=" display: grid; width: 246px; margin: auto;">
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<a href="#" class="badge badge-pill hrbutton btn-outline-dark Request_Documents" > Download Document 1
			</a>
			<a href="#" class="badge badge-pill hrbutton btn-outline-dark View_my_documents" >Download Document 2
			</a>
			<i class="text-dark d-block">Do you want ot return to previous
			 page or go back to home page?</i>
			<a href="?" class="badge badge-pill hrbutton btn-outline-dark" >Return
			</a>
			</div>

		</div>
	
		 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}


	public function Document_Tracker()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>What would you like to do with Documents?</p>
			<div class="myty" style=" display: grid; width: 246px; margin: auto;">
			<i class="text-dark">Please select document you want:</i>
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<a href="#" class="badge badge-pill hrbutton btn-outline-dark Request_Documents" >Request for Documents</a>
			<a href="#" class="badge badge-pill hrbutton btn-outline-dark View_my_documents" >View my documents</a>
			<a href="#" class="badge badge-pill hrbutton btn-outline-dark submitteddattes" >Document Tracker</a>
			</div>
		</div>
	
		 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}




	




	public function Leavestart()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Please select one option to proceed 
			</p>
			<div class="myty" style=" display: grid; width: 246px; margin: auto;">

			<div class="form-group" >
				<input type="radio" name="h4" class="radio removebtn hrtest1 hcs" id="hrtest1" value="hrtest1">
				<label for="hrtest1" class="removebtn">What is the leave policy?</label>
			</div>
			<div class="form-group" >
				<input type="radio" name="h4" class="radio removebtn hrtest2 hcs" id="hrtest2" value="hrtest2">
				<label for="hrtest2" class="removebtn">Availabe leave</label>
			</div>
			<div class="form-group" >
				<input type="radio" name="h4" class="radio removebtn Check_Summary hcs" id="Check_Summary" value="hrtest3">
				<label for="Check_Summary" class="removebtn">Check Summary.
				</label>
			</div>

			<div class="form-group" >
			<input type="radio" name="h4" class="radio removebtn Applay_leave hcs" id="Applay_leave" value="save">
			<label for="Applay_leave" class="removebtn">Applay leave.
			</label>
		</div>
		</div>

	
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}





	public function Leave()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Availabe leave

		</p>

		
			<div class="myty" style=" display: grid; width: 246px; margin: auto;">
			<p>You can take:


			</p>

			<div class="form-group" >
				<input type="radio" name="h4" class="radio removebtn hrtest1 hcs" id="hrtest1" value="hrtest1">
				<label for="hrtest1" class="removebtn">start date</label>
			</div>
			<div class="form-group" >
				<input type="radio" name="h4" class="radio removebtn hrtest2 hcs" id="hrtest2" value="hrtest2">
				<label for="hrtest2" class="removebtn">end date </label>
			</div>
			<div class="form-group" >
				<input type="radio" name="h4" class="radio removebtn hrtest3 hcs" id="hrtest3" value="save">
				<label for="hrtest3" class="removebtn">submit
				</label>
			</div>
		</div>

	
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}




	public function Personal_Detaits()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Personal Detaits</p>
			<div class="myty" style=" display: grid; width: 246px; margin: auto;">
			<ul class="personal-d">
			<li><span>Name:</span>Text</li>
			<li><span>Email ID:</span>test@gmail.com</li>
			<li><span>Personal Email:</span>test@gmail.com</li>
			<li><span>Contact No.:</span>1234567890</li>
			<li><span>Role:</span>SS</li>
			<li><span>Department:</span>TT</li>
			<li><span>State:</span>Delhi</li>
			<li><span>Employee ID:</span>0221</li>
			</ul>
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<a href="#" class="badge badge-pill hrbutton btn-outline-dark Personal_Detaits_Edit">Edit
			</a>
			<a href="?" class="badge badge-pill hrbutton btn-outline-dark">Return
			</a>
			</div>
			</div

	
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}



	public function Personal_Detaits_Edit()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Please select if you want to change your Email or Phone number</p>
			<div class="myty" style=" display: grid; width: 246px; margin: auto;">

			<div class="form-group" >
				<input type="email" name="personal-email" class="form-control" placeholder="Personal Email">
			</div>
			<div class="form-group" >
				<input type="tel" name="Contact" class="form-control" placeholder="Contact No. ">
			</div>
			
			<div class="form-group" >
			<input type="radio" name="Update" class="radio removebtn Personal_Detaits_Thnku hcs" id="Personal_Detaits_Thnku" value="save">
			<label for="Personal_Detaits_Thnku" class="removebtn">Update
			</label>
		</div>
		</div>

	
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}


	public function Personal_Detaits_Thnku()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Thank you! your data is Successfully submitted</p>
			

		<div class="myty" style=" display: grid; width: 246px; margin: auto;">
			
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<a href="?" class="badge badge-pill hrbutton btn-outline-dark">Return
			</a>
			
			</div>
			
		</div
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}



	public function hrtest1()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Here is the link of the detailed Leave Policy : 
			Click here (Url to be placed where it will take to leave policy document)
			
			</p>
			<div class="myty" style=" display: grid; width: 200px; margin: auto;">

			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<a href="#" class="badge badge-pill hrbutton btn-outline-dark" >Thanku</a>
			</div>

	
		</div>

	
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}


	public function hrtest2()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>You can take:

			</p>
		
			<div class="myty" style=" display: grid; width: 200px; margin: auto;">
			
			<b class="text-dark">Personal Leave: XX </b>
			<b class="text-dark">Sick Leave      : YY </b>
			<b class="text-dark">Casual Leave  : ZZ </b>
        

			<div class="myty" style=" display: grid; width: 200px; margin: auto;">
		


			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<a href="?" class="badge badge-pill hrbutton  btn-outline-dark" >Return</a>

			</div>
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark Applay_leave" >Applay Leave</a>

			</div>


		</div>

	
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}


	public function Reimbursements()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>What would you like to do in reimbursement?


			</p>
			
			
			
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<a href="https://www.google.com/webhp?hl=en&sa=X&ved=0ahUKEwiSoMr7zfP8AhWc9DgGHUQVB14QPAgI" class="badge badge-pill hrbutton  btn-outline-dark Claim_Reimbursements" >Claim Reimbursements
			</a>
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark Reimbursement_tracker" >Reimbursement tracker
			</a>

		


			</div>
			
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}



	
	public function Advance_Salary()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>What you want to do in Salary Advance?


			</p>
			
			
			
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<a href="#"  class="badge badge-pill hrbutton  btn-outline-dark eligibility_policys " >Salary Advance Policy
			</a>
			<a href="https://www.google.com/" class="badge badge-pill hrbutton  btn-outline-dark " >Apply for Salary Advance
			</a>

			<a href="?" class="badge badge-pill hrbutton  btn-outline-dark " >Home 
			</a>


			</div>
			
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}






	public function eligibility_policy()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Please select an option to proceed:


			</p>

			<a href="https://brit-idea.com/hrbot/assets/salary.pdf" download class="badge badge-pill hrbutton  btn-outline-success  " style="    background: #fdbfbf;" ><i class="fa fa-download" aria-hidden="true"></i>
			&nbsp; &nbsp;	What is salary advance policy?
			</a>
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark salary1"  >Am I eligible for salary advance ? 
			</a>
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark salary2" >For what reasons I can apply for the same ? 
			</a>
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark salary3" >What is my eligible amount ?
 
			</a>
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark salary4 " >Is it Interest free ? 
			</a>
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark salary5" >What is the deduction process? 
			</a>
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark salary6" >How to apply for salary advance? 
			</a>
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark salary7" >What happens if I exit from the organization ? 
			</a>

			
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark SalaryAdvancehome" >Home 
			</a>
		
			</div>
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}



	
	public function salary1()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Am I eligible for salary advance ?


			</p>
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<b>Yes if you had completed 6 months tenure with Britannia as a new joinee or (workmen)promoted to 
			Management Staff ( Officer Grade IV (F) /V )</b>
	
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark eligibility_policy" >NEXT 
			</a>

			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark SalaryAdvancehome" >Home 
			</a>
	
			</div>
			
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}

	public function salary2()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>For what reasons I can apply for the same ?



			</p>
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<b>To mitigate financial requirement in case of emergency (such as bereavement in the family, prolonged sickness of a 
			family member, accident, hospitalization, marriage, loss due to any natural calamity)</b>
	
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark eligibility_policy" >NEXT 
			</a>

			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark SalaryAdvancehome" >Home 
			</a>
	
			</div>
			
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}

	public function salary3()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>What is my eligible amount ?



			</p>
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<b>Maximum Salary Advances shall be up to 3 months Basic salary.
			</b>
	
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark eligibility_policy" >NEXT 
			</a>

			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark SalaryAdvancehome" >Home 
			</a>
	
			</div>
			
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}

	public function salary4()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Is it Interest free ?



			</p>
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<b>Yes It is</b>
	
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark eligibility_policy" >NEXT 
			</a>

			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark SalaryAdvancehome" >Home 
			</a>
	
			</div>
			
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}

	public function salary5()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>What is the deduction process?



			</p>
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<b>Advance given during the financial year will be recovered within the same financial year through payroll.
			</b>
			<b>Ex: If employee takes loan in Jan 23 then the same will be recovered in Mar 23.

			</b>
	
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark eligibility_policy" >NEXT 
			</a>

			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark SalaryAdvancehome" >Home 
			</a>
	
			</div>
			
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}

	public function salary6()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>How to apply for salary advance?



			</p>
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<b>Employee raises a Salary Advance Request in http://ibps.britindia.com  Basic Salary will be picked from SAP Master 
			Data  HRBP  HR Op’s Manager  Head – HR  EO Payroll  SSC team will disburse the amount through Employee 
			vendor or through Payroll.
			</b>
	
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark eligibility_policy" >NEXT 
			</a>

			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark SalaryAdvancehome" >Home 
			</a>
	
			</div>
			
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}

	public function salary7()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>What happens if I exit from the organization ?

			</p>
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<b>In the event that employee terminates employment with the Company prior to repayment of the entire advance, any 
			unpaid balance will then become immediately due and payable to the Company / will be adjusted from employees full 
			and final settlement.</b>
	
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark eligibility_policys" >Next 
			</a>

			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark SalaryAdvancehome" >Home 
			</a>
	
			</div>
			
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}










































































































	
	public function Holiday_list()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>date fir occasion for day


			</p>
			
			
		
			<div class="myty" style="  width: 100%; margin: auto;">
	
		
			<table class="table">
			<thead>
			  <tr>
				<th>Date</th>
				<th>Holiday</th>
				<th>Day</th>

			
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>1 January 2023</td>
				<td>Doe</td>
				<td>Sunday</td>
			
			  </tr>
			  <tr>
				<td>2 January 2023</td>
				<td>New Year Holiday	</td>
				<td>Monday</td>
			
			  </tr>
			  <tr>
				<td>4 January 2023</td>
				<td>Gaan-Ngai	</td>
				<td>Wednesday</td>
			
			  </tr>
			</tbody>
		  </table>
		</div>





			<a href="?" class="badge badge-pill hrbutton  btn-outline-dark " >Home
			
		</a>
		
	
		
		</div>
			
			
			

		
		

	
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}






	
	public function Learning_Management()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>What would you like to do in reimbursement?


			</p>
			
			
			
	

			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark " >Go To Learning & Management   
			</a>


			</div>
			
			
			

		
		

	
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}


	// Claim_Reimbursements////Reimbursement_tracker

	public function Claim_Reimbursements()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Please enter Reimbursement type



			</p>
			
			
			
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<div class="input-group mb-3">
			<textarea class="form-control" aria-label="With textarea"></textarea>

			<div class="input-group-append">
			  <button class="btn btn-success next_upload_image" type="submit" >Save</button>
			</div>
		  </div>


			</div>
			
		
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}




	
	public function next_upload_image()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Please enter Reimbursement type



			</p>
			
			
			
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<div class="custom-file">
			<input type="file"  id="validatedCustomFile" required>
			<button type="submit" class="btn btn-primary mb-2 image_upload_saved">Save</button>

		  </div>


			</div>
			
		
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}






	
	public function image_upload_saved()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Your Request has been submitted




			</p>

			<i class="text-dark">Please check Reimbursement tracker to track
			the status of your request</>
			
			
			
			
			<div class="form-group" style="margin: 0;margin-right: 48px;">
			<a href="#" class="badge badge-pill hrbutton  btn-outline-dark Reimbursement_Tracker
			" >Reimbursement Tracker

			</a>
			<a href="?" class="badge badge-pill hrbutton  btn-outline-dark " >Return
			</a>


			</div>
			
			
		
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}










	public function Reimbursement_tracker()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Below is you summary for
			reimbursements
		   


			</p>
			
			
		
			<div class="myty" style="  width: 100%; margin: auto;">
	
		
			<table class="table">
			<thead>
			  <tr>
				<th>Reimburse</th>
				<th>Amount</th>
				<th>Date</th>
				  <th>Status</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>John</td>
				<td>Doe</td>
				<td>pending</td>
				  <th>Status</th>
			  </tr>
			  <tr>
				<td>Mary</td>
				<td>Moe</td>
				<td>pending</td>
				  <th>Status</th>
			  </tr>
			  <tr>
				<td>July</td>
				<td>Dooley</td>
				<td>pending</td>
				  <th>Status</th>
			  </tr>
			</tbody>
		  </table>
		</div>



				<a href="https://brit-idea.com/hrbot/assets/Salary.pdf" download class="badge badge-pill hrbutton  btn-outline-dark Reimbursement_tracker" >To download Reimbursement 
				summary click on download button
				
			</a>

			<a href="?" class="badge badge-pill hrbutton  btn-outline-dark Reimbursement_tracker" >Home
			
		</a>
		
	
		
		</div>
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}


	/////end 




public function Document_Trackerbtn()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	
			
			
		
			<div class="myty" style="  width: 100%; margin: auto;">
	
		
			<table class="table">
			<thead>
			  <tr>
				<th>Document Name</th>
				<th>Request Date</th>
				<th>Status</th>
				 
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>John</td>
				<td>Doe</td>
				<td>pending</td>
				
			  </tr>
			  <tr>
				<td>Mary</td>
				<td>Moe</td>
				<td>pending</td>
				
			  </tr>
			
			</tbody>
		  </table>
		</div>



				

			<a href="?" class="badge badge-pill hrbutton  btn-outline-dark Reimbursement_tracker" >Return
			
		</a>
		
	
		
		</div>
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}


	/////end 



	public function Reimbursements_change()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>User details:

			</p>
			
			
			
			
			
			
			
			
			<div class="myty" style="  width: 100%; margin: auto;">
	
		
		
<table class="table">

<tbody>
	<tr>
		<td>Name:</td>
		<td>sonu:</td>

	</tr>
	<tr>
		<td>Email ID:</td>
		<td>admin@gmail.com</td>

	</tr>
	<tr>

		<td>Personal Email:</td>
		<td>admin@gmail.com</td>

	</tr>
	<tr>

		<td>Contact No. :</td>
		<td>1234567889</td>

	</tr>
	<tr>

		<td>Role:</td>
		<td>web</td>

	</tr>
	<tr>

		<td>Department:</td>
		<td>web</td>

	</tr>
	<tr>

		<td>State:</td>
		<td>bihar</td>
	</tr>
	<tr>

		<td>Employee ID:</td>
		<td>123</td>
	</tr>


</tbody>
</table>
		
		
	
		
		</div>
		
		

	
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}








	
	public function dateandtimesave()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Your application has been submitted to HR Kindly wait for approval


			</p>
			
	<div class="myty" style=" display: grid; width: 200px; margin: auto;">

	<div class="form-group" style="margin: 0;margin-right: 48px;">

		<i>Thanku
		</i>


	</div>

</div>
		


	
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}





	public function Check_Summary()
	{
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('text');
		$data = array('p_ty' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Below is your summary for Leave applications

			</p>
			<div class="myty" style="  width: 100%; margin: auto;">
	<i class="icontext">Status of Latest Application:
	</i>

	<table class="table">
		<thead>
		  <tr>
			<th>Start date
			</th>
			<th>End date
			</th>
			<th>Status</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td>John</td>
			<td>Doe</td>
			<td>pending</td>
		  </tr>
		  <tr>
			<td>Mary</td>
			<td>Moe</td>
			<td>approved</td>
		  </tr>
		  <tr>
			<td>July</td>
			<td>Dooley</td>
			<td>approved</td>
		  </tr>
		</tbody>
	  </table>


	  <a href="https://brit-idea.com/hrbot/assets/Salary.pdf" download style="text-align: center;position: relative;align-items: center; class="badge badge-pill hrbutton btn-outline-dark">Download summary
	</a>

</div>
		

	
	
							 ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}



















































































































	public function Further()
	{
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$Name = ($this->session->userdata('Name')) ? $this->session->userdata('Name') : 1;
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;

		$value = $this->input->post('text');
		$data = array('query' => 'Further');
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);


		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Hi, ' . $Name . ', Please type your query below and click on submit
        </p>

			
							<div class="radio-btn removebtn" style="position: fixed;bottom: 82px;width: 96%;left: 0;background: #fff;margin: 6px;">
							
                               <input type="text" autocomplete="off" name="name" class="form-control" id="Further" placeholder="Please enter your query">
							
					       <button id="Further" class="submit Further"  style="position: absolute;right: 0;top: -3px;"><i class="fa fa-paper-plane" aria-hidden="true"></i>
							</button>';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}



	public function Operations()
	{
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;



		$value = $this->input->post('text');
		$data = array('text' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);



		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		//print_r($payload);die;
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		//print_r($this->db->last_query());die;
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '<p class="text-break">Great , I would like you to give a title on your incredible idea
			</p>

							<div class="radio-btn removebtn" style="position: fixed;bottom: 82px;width: 96%;left: 0;background: #fff;margin: 6px;">
							
                               <input type="text" autocomplete="off" name="name" class="form-control" id="Operationstitle" placeholder="Enter your title">
							
					       <button id="Operationstitle" class="submit Operationstitle"  style="position: absolute;right: 0;top: -3px;"><i class="fa fa-paper-plane" aria-hidden="true"></i>
							</button>';

			echo $replay;
		} else {


			echo "<p>Sorry can't be able to understand you..!
			</p>";
		}
	}

	public function Operationsdes()
	{
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('title');
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;
		//print_r($value);die;
		$data = array('title' => $value);

		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);


		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;


		//print_r($payload);die;
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		//print_r($this->db->last_query());die;
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '<p class="text-break">Great, Please provide a description on ' . $value . '
			</p>

							<div class="radio-btn removebtn" style="position: fixed;bottom: 82px;width: 96%;left: 0;background: #fff;margin: 6px;">
							
                               <input type="text" autocomplete="off" name="name" class="form-control" id="Operationsdes" placeholder="Enter your description">
							
					       <button id="Operationsdes" class="submit Operationsdes"  style="position: absolute;right: 0;top: -3px;"><i class="fa fa-paper-plane" aria-hidden="true"></i>
							</button>';

			echo $replay;
		} else {
			echo "<p>Sorry can't be able to understand you..!
			</p>";
		}
	}
	public function Operations_q()
	{
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$value = $this->input->post('Operationsdes');
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;

		$data = array('description' => $value);
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);

		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		//print_r($payload);die;
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay = '	<p>Would you like to submit any attachment

			</p>

			<div class="myty" style=" display: grid; width: 200px; margin: auto;">
			<div class="form-group" style="margin: 0;margin-right: 48px;">
				<input type="radio" name="h4" class="radio removebtn imgselectyes hcs" id="imgselect" value="Yes">
				 <label for="imgselect"
					class="removebtn">Yes</label>
			</div>
			<div class="form-group" style="margin: 0;margin-right: 48px;">
				<input type="radio" name="h4" class="radio removebtn imgselectno hcs" id="imgselectno" value="No">
				 <label for="imgselectno"
					class="removebtn">No</label>
			</div>
	

		</div>
							
			
					  ';

			echo $replay;
		} else {
			echo "Sorry can't be able to understand you!";
		}
	}


	public function imgselectyes()
	{

		$data = $this->input->post();
		$nm = isset($_REQUEST['payload']) ? $_REQUEST['payload'] : 0;
		$t_id = ($this->session->userdata('t_id')) ? $this->session->userdata('t_id') : 1;

		$payload = ($this->session->userdata('payload')) ? $this->session->userdata('payload') : 1;
		$data = array('q_q' => 'yes');
		$this->db1->where('number', $payload);
		$this->db1->where('t_id', $t_id);
		$this->db1->update('c_user', $data);
		$check = $this->db1->order_by('id', 'desc')->get_where('c_user', array('number' => $payload));
		//print_r($this->db->last_query());die;
		if ($check->num_rows() > 0) {
			$fetch_data = $check->row_array();
			$replay =

				'<p class="text-break">Please attach a file.
 
</p>


<form method="post" id="upload_form2" class="upload_form2" enctype="multipart/form-data">
<div class="radio-btn removebtn" style="position: relative;
width: 100%;
right: 18px;
background: #fff;
bottom: 0;
">
	<div id="divMsg" class="alert alert-success" style="display: none">
		<span id="msg"></span>
	</div>

	<input id="demo1" class="demo1" type="file" multiple placeholder="Select Files" name="demo1[]" />



	<button class="submit " style="position: absolute;right: 0;top: 3px;"><i class="fa fa-paper-plane"
			aria-hidden="true"></i>
	</button>
</div>
</form>';

			echo $replay;
		} else {
			echo "<p>Sorry can't be able to understand you..!
			</p>";
		}
	}









	private function mailsend($otp, $email)
	{

		if ($email !== '' && $otp != "") {



			/* $url = "http://smsbox.in/api/sms/SendSMS.aspx?usr=Majai&key=B62BEB5D-2D6F-4B87-B5AA-AA3343002169&smstype=TextSMS&to=".$to."&msg=".$msg."&rout=Transactional&from=SMSBOX&templateid=".$temId; */

			$url = "https://projectweedout.com/Api/chartdid?otp=" . $otp . "&email=" . $email;
			//echo $url;die;


			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$curl_scraped_page = curl_exec($ch);
			//echo $curl_scraped_page;
			curl_close($ch);
			$data['message'] = 'Successfully sent';
			//$data['message'] = $url;
			return $data;
		} else {
			$data['message'] = 'Mobile no or message could not blank.';
			return $data;
		}
	}
}
