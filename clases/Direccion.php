<?php 
	require_once("AccesoDatos.php");

	class Direccion
	{
		public $id;
		public $direccion;

		public function Alta()
		{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL InsertarDireccion(:id, :direccion)");
			$consulta->bindValue(':id', $this->id, PDO::PARAM_INT);
			$consulta->bindValue(':direccion', $this->direccion, PDO::PARAM_STR);
			$consulta->execute();
		}

		public function Baja()
		{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL BorrarDireccion(:id)");
			$consulta->bindValue(':id', $this->id, PDO::PARAM_INT);
			$consulta->execute();
		}

		public static function TraerTodo()
		{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerTodo()");
			$consulta->execute();
			return $consulta->fetchAll(PDO::FETCH_CLASS, 'Direccion');
		}
	}
 ?>