<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

  /**
   * Controlador principal, el que se carga al Index Page for this controller.
   */
  public function index() {
    $this->load->library('cart');
    $this->load->helper('url');       
    $this->load->helper('html');     
    $data = array(
	  'items'           => $this->cart->total_items(),
	  'campo_busqueda'  => 'arquitectura',
	  'string_busqueda' => ''
	);	
    $this->load->view('head',$data);
    $this->load->view('home');
    $this->load->view('foot');
  }
}

