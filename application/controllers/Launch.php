<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Launch extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('modelo');
		$this->load->helper(array('url'));
	}

	function index(){
		$this->load->helper('form');
		$this->load->library('form_validation');

	//Reglas para la validación de datos por parte del servidor.
	$this->form_validation->set_rules('categoria', 'categoria', 'trim|required');
	$this->form_validation->set_rules('subcategoria', 'subcategoria', 'trim|required');
	$this->form_validation->set_rules('nombres','nombres','trim|required|min_length[5]|max_length[50]');
	$this->form_validation->set_rules('cedula', 'cedula', 'trim|required|min_length[5]|max_length[20]');
	$this->form_validation->set_rules('celular','celular','trim|required|min_length[9]|max_length[13]');
	$this->form_validation->set_rules('correo', 'correo', 'trim|required');
	$this->form_validation->set_rules('ciudad', 'ciudad', 'trim|required');


		if ($this->form_validation->run() === false){
			$this->load->view('header');
			$this->load->view('index');
			$this->load->view('footer'); 
		}else{	
			//Se mandan variables del formulario
			$categoria= $this->input->post('categoria');
			$subcategoria = $this->input->post('subcategoria');
			$nombres = $this->input->post('nombres');
			$cedula = $this->input->post('cedula');
			$celular = $this->input->post('celular');
			$correo = $this->input->post('correo');
			$ciudad = $this->input->post('ciudad');
			$dia = $this->input->post('dia');
			$mes = $this->input->post('mes');
			$año = $this->input->post('año');
			$disponibilidad = $this->input->post('disponibilidad');
			$sexo = $this->input->post('sexo');
			

			if($this->modelo->registro($categoria,$subcategoria,$nombres,$cedula,$celular,$correo,$ciudad,$dia,$mes,$año,$disponibilidad,$sexo)){

				$this->enviar_correo($correo);
				//if($enviar_correo){

				$this->load->view('header');
				$this->load->view('registro_ok');
				$this->load->view('footer'); 
				//}
			}else{
				//echo "<script language='JavaScript'>alert('No se registró correctamente');</script>";
			}
		}
	}
	
	function verificar_correo()
	{
		if (array_key_exists('correo',$_POST)) {
			if ($this->modelo->correo_existe($this->input->post('correo')) == TRUE ) {
				echo json_encode(FALSE);
			} else {
				echo json_encode(TRUE);
			}
		}
	}

	function enviar_correo($correo){
		$this->load->library('email');
		$configuraciones['mailtype']='html';
		$this->email->initialize($configuraciones);
		$this->email->from('info@microempleo.co','microempleo.co');
		$this->email->to($correo);
		$this->email->subject('Bienvenido a microempleo.co');
		$this->email->message("Te damos la bienvenida a microempleo.co. Dentro de poco te estaremos enviando fecha, hora y lugar para una cita en persona e informarte cómo trabajaremos contigo. Queremos conocerte!<br><br><br><br>
			<img src='http://microempleo.co/assets/img/logo.png'><br>Cll 17 #5a-33<br>Neiva<br>Cel:3175486194");
		$this->email->send();
	}

	


}