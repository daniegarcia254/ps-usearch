<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carrito extends CI_Controller {

  public function index() {
    $this->load->library('cart');
    $this->load->helper('url');       
    $this->load->helper('html');       
    $this->load->helper('form');
    $this->load->model('microsmodel','',TRUE);

    // Comprobar que se han rellenado los campos obligatorios
    if (isset($_POST['pedir']) &&
       ($_POST['nombre']!='' && $_POST['apellidos']!='' && $_POST['direccion']!='' && $_POST['ciudad']!='' && $_POST['provincia']!='' && $_POST['cp']!='' && $_POST['tfn']!='' && $_POST['email']!='' )) {
      $data = array(
        'carro'           => $this->cart->contents(),
  	    'items'           => $this->cart->total_items(),
  	    'campo_busqueda'  => 'arquitectura',
        'string_busqueda' => ''
      );
      $this->load->view('head',$data);
      $this->load->view('hoja_pedido',$data);
      $this->load->view('foot');
      $this->cart->destroy();
      return;
    }

    if ( isset($_POST['vaciar'])) {
      $this->cart->destroy();
    }
    if ( isset($_POST['submit'])){
      $i=1;
      foreach ($this->cart->contents() as $items){
        $data = array(
          'rowid' => $_POST[$i.'rowid'],
          'qty'   => $_POST[$i.'qty']
        );
        $this->cart->update($data); 
        $i++;
      }
    }
    if(isset($_POST['nombre'])){
      $data = array(
	    'carro'           => $this->cart->contents(),
		'items'           => $this->cart->total_items(),
  	    'campo_busqueda'  => 'arquitectura',
  	    'string_busqueda' => '',
		'error'           => ''
	  );
    } else {
	    $data = array(
	      'carro'           => $this->cart->contents(),
		  'items'           => $this->cart->total_items(),
		  'campo_busqueda'  => 'arquitectura',
	      'string_busqueda' => ''
	    );	
    }
    $this->load->view('head',$data);
    $this->load->view('carrito',$data);
    $this->load->view('foot');
  }
}
