<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');
		$this->load->library('image_lib');
		$this->db1 = $this->load->database('otherdb', TRUE);
	}
	public function index()
	{
		$data = $this->input->post();
		$data['error']='';
		if($this->input->post('submit')!=NULL)
		{
		
			$check = $this->db1->get_where('c_login', array('Name' => $data['Name'],'Email' => $data['Email'],'Mobile' => $data['Mobile']));
					if ($check->num_rows() > 0) 
					{
						$fetch_data = $check->row_array();
						$payload =$fetch_data['id'];
						$t_id = rand(1111111111,9999999999);
						$data =	array(
						'payload'         =>$payload,
						'Name'         =>$data['Name'],
						'Email'         =>$data['Email'],
						't_id'         => $t_id,
						'is_logged_in' => TRUE
					      );
					    $this->session->set_userdata($data);
						redirect('Home');
					}
					else
					{
						
						$data = array('Name' => $data['Name'],'Email' => $data['Email'],'Mobile' => $data['Mobile']);
	                 	$this->db1->insert('c_login', $data);
						$id= $this->db1->insert_id();
						
						$payload =$id;
						$t_id = rand(1111111111,9999999999);
						$data =	array(
						'payload'         =>$payload,
						'Name'         =>$data['Name'],
						't_id'         => $t_id,
						'is_logged_in' => TRUE
					      );
						  $this->session->set_userdata($data);
						redirect('Home');
						/*$data['error'] ='Wrong credential';
						 $this->load->view('wlogin',$data); */
					}
		
		}
		
		$this->load->view('login',$data);
	}
}
