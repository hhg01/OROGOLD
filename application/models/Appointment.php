<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appointment extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function getEmail() {
        $emails = array();
        $query = $this->db->query("select Email from usuarios");
        foreach ($query->result() as $row){
            array_push($emails, $row->Email);
        }
        return $emails;
    }
    
    public function setAppointment($infoClient) {
        $customCliente = $this->db->INSERT('usuarios', 
                                                array('Nombre' => $infoClient['nombre'],
                                                      'Email' => $infoClient['email'],
                                                      'Telefono' => $infoClient['telefono'])
                                                );
        return $customCliente;
    }
}
?>