<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agregar extends CI_Controller {

  public function index() {
  
	$this->load->library('cart');
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->model('microsmodel','',TRUE);

    if (isset($_POST['ref']) && isset($_POST['arch']) &&
        isset($_POST['freq']) && isset($_POST['flash']) &&
        isset($_POST['ram']) && isset($_POST['precio']) &&
        $_POST['ref']!='' && $_POST['arch']!='' &&
        $_POST['freq']!='' && $_POST['flash']!='' &&
        $_POST['ram']!='' && $_POST['precio']!=''
    ){
      // Se ha enviado un micro completo para ser insertado
      if($this->microsmodel->insertar(
        $_POST['ref'],$_POST['arch'],
        $_POST['freq'],$_POST['flash'],
        $_POST['ram'],$_POST['precio'])){
        header( 'Location: ' . base_url() . 'index.php/editar') ;
      }
      else{
        echo "Error";
      }
      return;
    }

    else {
      // No hay datos en el post, cargamos la lista para que el usuario elija qué editar
      $data = array(
			'campo_busqueda'  => 'arquitectura',
			'string_busqueda' => ''
		);
      $this->load->view('adminhead',$data);
      $this->load->view('agregar',$data);
      $this->load->view('foot');
    }

  }
}
