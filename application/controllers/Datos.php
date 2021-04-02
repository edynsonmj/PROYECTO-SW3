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
			$data['usuarios'] = $this -> datosModel -> getAll();
			$this -> load -> view('principal',$data);
		}
		/**
		 * obtiene un usuario dado un login y carga una vista con la informacion obtenida
		 */
		public function getUsuario(){
			$login = $this -> input -> post("login");
			$data['usuarios'] = $this -> datosModel -> getUsuario($login);
			$this -> load -> view('vistas_crud/buscar',$data);
		}
		/**
		 * carga el formulario para llenar los campos del nuevo registro
		 */
		public function cargarform(){
			$this -> load -> view('vistas_crud/insertar');
		}
		/**
		 * captura los datos ingresado en el formulario de registro
		 */
		public function insertUsuario()
		{
			$login = $this->input->post("login");
			$password = $this->input->post("password");
			$email = $this->input->post("email");
			$rol = $this->input->post("rol");

			$resultado = $this->datosModel->addUsuario($login, $password, $email, $rol);
			if($resultado){
				$this->index();
				}else{
				echo "error al insertar";
			}
		}
		/**
		 * obtiene los campos de un usuario y con ella lanza la vista para reescribir el registro
		 */
		public function datosUpdate($login = null){
			$login = urldecode($login);
			if($login){
				$data['usuarios'] = $this -> datosModel -> getUsuario($login);
			}
			$this -> load ->view('vistas_crud/editar',$data);
		}
		/**
		 * recoje los datos ingresados para actualizar el registro, login no cambia
		 */
		public function updateUsuario(){
			$login = $this->input->post("login");
			$password = $this->input->post("password");
			$email = $this->input->post("email");
			$rol = $this->input->post("rol");
			$resultado = $this -> datosModel -> updateUsuario($login, $password, $email, $rol);
			if($resultado){
				$this->index();
			}else{
				//enviar a pagina de error
				echo "no se actualizo correctamente";
			}
		}
		/**
		 * elimina un usuario de la base de datos segun un $login
		 */
		public function deleteUsuario($login = null){
			if($login){
				$login = urldecode($login);
				$resultado = $this -> datosModel -> deleteUsuario($login);
			}
			if($resultado){
				$this->index();
			}else{
				echo "error al eliminar";
			}
		}
	}
?>