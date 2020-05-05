<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Appointment');
	}

	public function index(){
		$this->load->view('templates/Header');
		$this->load->view('BodyIndex');
		$this->load->view('templates/Footer');
	}
}
