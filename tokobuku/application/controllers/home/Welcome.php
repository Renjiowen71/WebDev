<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("product_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data["products"] = $this->product_model->getAll();
		$this->load->view("home/welcome_message", $data);
	}
	
	public function about() 
	{
		// fungsi untuk me-load view about.php     
		$this->load->view('home/about'); 
	} 
 
	public function contact() 
	{     // fungsi untuk me-load view contact.php     
		$this->load->view('home/contact'); 
	}
}