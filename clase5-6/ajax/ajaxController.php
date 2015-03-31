<?php
require_once('../clases/ConexionDb.php');

class ControladorAjax{

   private static $instancia;
   
   private function __construct()
   {
   }

   public static function getInstance()
   {
      if (  !self::$instancia instanceof self)
      {
         self::$instancia = new self;
      }
      return self::$instancia;
   }

   function getDatosUsuario($post){
        $datos = array(
                      array('nombre' => 'Sandino', 'city' => 'Montevideo'),
                      array('nombre' => 'Sandino2', 'city' => 'Montevideo2'),
                      array('nombre' => 'Sandino3', 'city' => 'Montevideo3'),
                      array('nombre' => 'Sandino4', 'city' => 'Montevideo4')
                );
        
        $resultado = array('huboError'=>false, 'datos'=>$datos);
        
        return json_encode($resultado);    
   }

   function getLocalidades($post){
        $cd = new ConexionDb();

        $datos = $cd->getLocalidades();
                
        $resultado = array('huboError'=>false, 'datos'=>$datos);
        return json_encode($resultado);    
   }
    
 }

/******************************************
 *  AQUI EFECTIVAMENTE SE REALIZA LA OPERACION
 *  QUE SE LE PIDIO AL CONTROLADOR
 *  SI LA OPERACION ES VALIDA SE EJECUTA
 *
 ******************************************/
$OPERACIONES_AJAX_VALIDAS = array('getDatosUsuario','getLocalidades');
$ALLOWED_IPS_FOR_AJAX_CALLS = array('127.0.0.1');

$controlador = ControladorAjax::getInstance();

$operacion = isset($_POST['operacion']) ? $_POST['operacion'] : '';

if (!in_array($_SERVER['SERVER_ADDR'], $ALLOWED_IPS_FOR_AJAX_CALLS))
        header("HTTP/1.1 403 Forbidden");

if (in_array($operacion,$OPERACIONES_AJAX_VALIDAS))
    echo $controlador->$operacion($_POST);
else
    header("HTTP/1.1 403 Forbidden");



?>