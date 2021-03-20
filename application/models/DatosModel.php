<?php
	class datosModel extends CI_model
	{
		public function consultarTodo(){
			$usuarios = $this->db->query("select * from usuario")->result();
			return $usuarios;
		}
		
		public function consultarPorLogin($login){
			$this->db->where('login', $login);
			$usuarios = $this->db->get('usuario')->result();
			return $usuarios;
		}
		public function registro($login, $password, $email, $rol){
			$resultado = $this ->db -> insert("usuario",["login"=> $login, "password" => $password, "email" => $email, "rol" => $rol]);
		}
	}
?>
