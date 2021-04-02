<?php
class datosModel extends CI_model
{
	/**
	 * retorna todos los usuarios de la base de datos
	 */
	public function getAll()
	{
		$usuarios = $this->db->query("select * from usuario")->result();
		return $usuarios;
	}
	/**
	 * retorna un usuario de la base de datos segun $login
	 */
	public function getUsuario($login)
	{
		$this->db->where('login', $login);
		$query = $this->db->get('usuario');
		$resultado = $query->result();
		return $query->result();
	}
	/**
	 * agrega un nuevo usuario a la base de datos
	 */
	public function addUsuario($login, $password, $email, $rol)
	{
		if($this->getUsuario($login)){
			return false;
		}
		$this->db->insert("usuario", ["login" => $login, "password" => $password, "email" => $email, "rol" => $rol]);
		return ($this->db->affected_rows() != 1) ? false : true;
	}
	/**
	 * actualiza los datos de un usuario
	 */
	public function updateUsuario($login, $password, $email, $rol)
	{
		$data = array(
			'password' => $password,
			'email' => $email,
			'rol' => $rol
		);
		$this->db->where('login', $login);
		$this->db->update('usuario', $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}
	/**
	 * elimina a un usuario
	 */
	public function deleteUsuario($login){
		$this->db->where('login', $login);
		$this->db->delete('usuario');
		return ($this->db->affected_rows() != 1) ? false : true;
	}
}
