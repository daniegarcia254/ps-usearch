<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Microsmodel extends CI_Model {

  var $ref    = '';
  var $arch   = '';
  var $freq   = '';
  var $flash  = '';
  var $ram    = '';
  var $precio = '';

  public function __construct() {
      parent::__construct();
  }

  function insertar ($ref,$arch,$freq,$flash,$ram,$precio) {
    //$this->db->where('ref', $ref);
    //$query=$this->db->get('micros');
    // Comprobamos si la fila existe
    //if ($query->num_rows() == 0){
      $this->ref    = $ref;
      $this->arch   = $arch;
      $this->freq   = $freq;
      $this->flash  = $flash;
      $this->ram    = $ram;
      $this->precio = $precio;
      $this->db->insert('micros', $this);
      echo "Se ha llamado a insertar";
      return TRUE;
    //}
    return FALSE;
  }

  function modificar ($ref,$arch,$freq,$flash,$ram,$precio) {
    $this->db->where('ref', $ref);
    $this->ref   = $ref;
    $this->arch  = $arch;
    $this->freq  = $freq;
    $this->flash = $flash;
    $this->ram   = $ram;
    $this->precio = $precio;
    $this->db->update('micros', $this);
  }

  function eliminar ($ref) {
    $this->db->delete('micros', array('ref' => $ref)); 
  }

  function listar_todo () {
    $query = $this->db->get('micros');
    $i=0;
    foreach($query->result() as $row){
      $lista[$i]=new Microsmodel();
      $lista[$i]->ref=$row->ref;
      $lista[$i]->arch=$row->arch;
      $lista[$i]->freq=$row->freq;
      $lista[$i]->flash=$row->flash;
      $lista[$i]->ram=$row->ram;
      $lista[$i]->precio=$row->precio;
      $i++;
    }
    return $lista;
  }

  function listar_uno ($ref) {
    $this->db->where('ref', $ref);
    $query = $this->db->get('micros');
    $resultado = new Microsmodel();
    if ($query->num_rows() > 0){
      $row=$query->result()[0];
      $resultado->ref=$row->ref;
      $resultado->arch=$row->arch;
      $resultado->freq=$row->freq;
      $resultado->flash=$row->flash;
      $resultado->ram=$row->ram;
      $resultado->precio=$row->precio;
    }
    return $resultado;
  }
  
  function buscar ($campo,$busqueda) {
    // NOTA: Seria mas facil en el formulario llamar a los campos = que en DB
    // Asi no haria falta ese switch, directamente:
	// $this->db->like($campo,$busqueda);	
    switch($campo) {
      case 'arquitectura':
	    $this->db->like('arch', $busqueda);	
  	    break;	
      case 'frecuencia':
        $this->db->like('freq', $busqueda);	
        break;
	  case 'flash':
        $this->db->like('flash', $busqueda);	
        break;
	  case 'ram':
        $this->db->like('ram', $busqueda);	
	  }
      $query = $this->db->get('micros');
      $lista=[];
      foreach($query->result() as $row){
		$lista[]=new Microsmodel();
		end($lista)->ref=$row->ref;
        end($lista)->arch=$row->arch;
        end($lista)->freq=$row->freq;
        end($lista)->flash=$row->flash;
        end($lista)->ram=$row->ram;
        end($lista)->precio=$row->precio;
      }
      return $lista;
    }
}

?>
