<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function registro($categoria,$subcategoria,$nombres,$cedula,$celular,$correo,$ciudad,$dia,$mes,$año,$disponibilidad,$sexo){

		$datos = array(
				'categoria' => $categoria,
				'subcategoria' => $subcategoria, 
				'nombres' => $nombres,
				'cedula' => $cedula,
				'celular' => $celular,
				'correo' => $correo,
				'ciudad' => $ciudad,
				'dia' => $dia,
				'mes' => $mes,
				'año' => $año,
				'disponibilidad' => $disponibilidad,
				'sexo' => $sexo	
				);

		return $this->db->insert('jobbers', $datos);
	}

	public function correo_existe($correo)
	{
		$this->db->where('correo', $correo);
		$query = $this->db->get('jobbers');
		if( $query->num_rows() > 0 ){ return TRUE; } else { return FALSE; }
	}

}
