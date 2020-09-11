<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller
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
		$this->load->view("home/product/list", $data);
	}
	
	public function show($id = null)
	{
		if (!isset($id)) redirect('home/products');

		$product = $this->product_model;
		
		$data["product"] = $product->getById($id);
		if (!$data["product"]) show_404();

		$this->load->view("home/product/item", $data);
	}
}