<?php

require_once ('clases/MysqliDb.php');

// ASI NO SE HACE LAS CONSULTAS A LA BASEEEEEE

$db = new MysqliDb ('localhost', 'root', 'root', 'concursos');


$usuarios = $db->rawQuery('SELECT * FROM usuario WHERE idusuario = ?', Array (1));

$db->orderBy('nombre','DESC');
$usuarios = $db->get('usuario');

$usuarios = $db
    ->where('idusuario', 2)
    ->where('login', 'administracion')
    ->get('usuario',1);

foreach ($usuarios as $key => $value) {
	# code...
	var_dump($value);
}



?>