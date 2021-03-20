<?php

		defined('BASEPATH') OR exit('No direct script access allowed');

	class Datos extends CI_Controller {

		public function __construct(){
			parent::__construct ();
			$this->load->model("datosModel");
			$this->load->helper(array('form','url'));
		}
		public function index()
		{
			//array donde guardare la informacion
			$data = array();
			//obtengo datos del modelo
			$data['usuarios'] = $this -> datosModel -> consultarTodo();
			//envio datos a la vista
			$this -> load -> view('welcome_message',$data);
		}
		public function mostrarUsuario($login = null){
			$data = array();
			$data['usuarios'] = $this-> datosModel -> consultarPorLogin($login);
			$this->load->view('vistas_crud/buscar', $data);
		}
		public function cargarform(){
			echo "cargarform";
			$this -> load -> view('vistas_crud/insertar');
		}
		public function registrar()
		{
			$login = $this->input->post("login");
			$password = $this->input->post("password");
			$email = $this->input->post("email");
			$rol = $this->input->post("rol");

			$resultado = $this->datosModel->registro($login, $password, $email, $rol);

			if($resultado){
				echo "operacion exitosa";
				}else{
			}
		}
	
	}
?>