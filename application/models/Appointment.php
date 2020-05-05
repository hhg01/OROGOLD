<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appointment extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getAppointment() {

		$appointment = "SELECT * FROM citas";
		
		$responce = $this->db->query($appointment);

		return $responce;
	}
}
?>