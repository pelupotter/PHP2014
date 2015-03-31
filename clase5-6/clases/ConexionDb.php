<?php
error_reporting(E_ERROR);
class ConexionDb{

	public function getLocalidades(){

		if (!$conexion = mysql_connect('localhost', 'root', 'root')) {
		    echo 'No pudo conectarse a mysql';
		    exit;
		}

		if (!mysql_select_db('concursos', $conexion)) {
		    echo 'No pudo seleccionar la base de datos';
		    exit;
		}

		$sql       = 'SELECT iddepartamento as id, 
						     etiqueta as nombre
					  FROM departamento';

		$resultado = mysql_query($sql, $conexion);

		if (!$resultado) {
		    echo "Error de BD, no se pudo consultar la base de datos\n";
		    echo "Error MySQL: " . mysql_error();
		    exit;
		}

		$datos = array();

		while ($fila = mysql_fetch_assoc($resultado)) {
		    $datos[] = $fila;
		}

		mysql_free_result($resultado);

		return $datos;
	}


}

?>