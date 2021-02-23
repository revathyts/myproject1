<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

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
	 */
	
	public function registration()
	{
		$this->load->view('registration');
	}
	public function reg_access()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("fname","firstname",'required');
		$this->form_validation->set_rules("lname","lastname",'required');
		$this->form_validation->set_rules("uname","username",'required');
		$this->form_validation->set_rules("password","password",'required');
		$this->form_validation->set_rules("mobile","mobile",'required');
		$this->form_validation->set_rules("email","email",'required');
		
		if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
			$pass=$this->input->post("password");
			$encpass=$this->mainmodel->encpswd($pass);
			$a= array("firstname" => $this->input->post('fname'),
				"lastname" => $this->input->post('lname'),
				"username" => $this->input->post('uname'),
				"mobile" => $this->input->post('mobile'));
			$b= array("email" => $this->input->post('email'),
				"password" =>$encpass );
			$this->mainmodel->regist($a,$b);
			redirect(base_url().'main/registration');

		}
}
public function view_table()
		{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->view_table();
		$this->load->view('view',$data);
		}
public function approve()
	{
		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);
		$this->mainmodel->approve($id);
		redirect('main/view_table','refresh');
	}
	public function reject()
	{
		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);
		$this->mainmodel->reject($id);
		redirect('main/view_table','refresh');
	}
	public function login()
	{
		$this->load->view('login');
	}
		public function new_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
			$email=$this->input->post("email");
			$pass=$this->input->post("password");
			$rslt=$this->mainmodel->slctpass($email,$pass);
			
				if ($rslt)
				 {
				 	$id=$this->mainmodel->getusrid($email);
				 	$user=$this->mainmodel->getusr($id);
				 	$this->load->library(array('session'));
				 	$this->session->set_userdata(array('id'=>(int)$user->id,
				 	'status'=>$user->status));
				 	if($_SESSION['status']=='1')
				 	{
				 		redirect(base_url().'main/view_table');
				 	}
				
				 	else
				 	{
				 		echo "Waiting for Approval";
				 	}
			     }
			     else
			     {
			     	echo "invalid user";
			     }
			 }
			 else
			 {
			 	redirect('main/login','refresh');
			 }
			}
}
