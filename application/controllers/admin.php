<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function index() {

    $this->load->helper('url');
    $this->load->helper('html');

	$data = array(
  	    'campo_busqueda'  => 'arquitectura',
        'string_busqueda' => ''
      );
	
      $this->load->view('adminhead', $data);
      $this->load->view('adminhome', $data);
      $this->load->view('foot');
    }

}
