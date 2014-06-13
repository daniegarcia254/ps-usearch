<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editar extends CI_Controller {

  public function index() {

    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->model('microsmodel','',TRUE);

    
    if (isset($_POST['eliminar'])) {
      $this->microsmodel->eliminar($_POST['ref']);
      header( 'Location: ' . base_url() . 'index.php/editar ') ;
      return;
    }

    if (isset($_POST['ref']) && isset($_POST['arch']) &&
        isset($_POST['freq']) && isset($_POST['flash']) &&
        isset($_POST['ram']) && isset($_POST['precio']) &&
        $_POST['ref']!='' && $_POST['arch']!='' &&
        $_POST['freq']!='' && $_POST['flash']!='' &&
        $_POST['ram']!='' && $_POST['precio']!=''

    ){
      // Se ha enviado un micro completo para ser modificado
      $this->microsmodel->modificar(
        $_POST['ref'],$_POST['arch'],
        $_POST['freq'],$_POST['flash'],
        $_POST['ram'],$_POST['precio']);
      header( 'Location: ' . base_url() . 'index.php/editar ') ;
      return;
    }

    if (isset($_POST['ref'])) {
      // Se ha enviado solo la referencia, procedemos a hacer el listado de sus specs
      $def=$this->microsmodel->listar_uno($_POST['ref']);
      $data = array('def'=> $def,
			'campo_busqueda'  => 'arquitectura',
			'string_busqueda' => ''
		);

      if((isset($_POST['freq']) && $_POST['freq']=='')  ||
         (isset($_POST['precio']) && $_POST['precio']=='')  ||
         (isset($_POST['arch']) && $_POST['arch']=='')  ||
         (isset($_POST['flash']) && $_POST['flash']=='')  ||
         (isset($_POST['ram']) && $_POST['ram']=='') 
      ){

        
        $error="";
        $data = array('def'=> $def,'error'=>$error,
			'campo_busqueda'  => 'arquitectura',
			'string_busqueda' => ''
		);
      }

      $this->load->view('adminhead',$data);
      $this->load->view('editar',$data);
      $this->load->view('foot');
    }

    if (! isset($_POST['ref'])) {
      // No hay datos en el post, cargamos la lista para que el usuario elija qué editar
      $resultado=$this->microsmodel->listar_todo();
	  $data = array(
			'resultado'=> $resultado,
			'campo_busqueda'  => 'arquitectura',
			'string_busqueda' => ''
		);
      $this->load->view('adminhead',$data);
      $this->load->view('listar_todo_editar',$data);
      $this->load->view('foot');
    }

  }
}
