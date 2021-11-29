<?php 
include 'mdl_conexion.php';

class tablas {
	private $lista;
	private $db;

	public function __construct()
	{
		$this->db = conexion::connect_db();
		$this->arraydb = array();
	}

	public function ver_tabla_usuarios(){
		$resultado = $this->db->query("SELECT * FROM usuarios");
		while ($filas = $resultado->fetch_assoc()) {
        $this->lista[] = $filas;
	    }
	    return $this->lista;
		}
}
?>