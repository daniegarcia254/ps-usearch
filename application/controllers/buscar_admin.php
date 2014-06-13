<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buscar_admin extends CI_Controller {

  public function index() {	 
      $this->load->library('cart');
      $this->load->helper('url');
      $this->load->helper('html');

      $this->load->model('microsmodel','',TRUE);
	   
      if (!empty($_POST['string_busqueda'])){	
	    $data = array(
	      'resultado'       => $this->microsmodel->buscar($_POST['campo_busqueda'],$_POST['string_busqueda']),
	      'items'           => $this->cart->total_items(),
	      'campo_busqueda'  => $_POST['campo_busqueda'],
	      'string_busqueda' => $_POST['string_busqueda']
	    );
	    $this->load->view('adminhead',$data);
	    $this->load->view('listar_todo_editar',$data);
	    $this->load->view('foot');
      }
	  else {
		  redirect("listar_todo");
  	  }
  }
}