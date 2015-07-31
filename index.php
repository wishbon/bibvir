<?php
error_reporting(E_ALL);
require_once 'conf.php';

if (!empty($_GET['modulo']))
	$modulo = $_GET['modulo'];
else
	$modulo = MODULO_DEFECTO;

if (empty($conf[$modulo]))
		$modulo = MODULO_DEFECTO;

if (empty($conf[$modulo]['plantilla']))
		$conf[$modulo]['plantilla'] = PLANTILLA_DEFECTO;

$link = @mysql_connect($bd_host, $bd_usur, $bd_pass);
if(!$link) {echo "Problemas con la base de datos, Asegurese de que la base de datos exista y los datos ingresados para la coneccion son correctos<br />Si necesita ayuda consulte la documentacion, aparatado Instalación"; exit;}
$existe = @mysql_select_db($bd_nomb, $link);
if(!$existe) {echo "Oye, no encuentro la base de datos!"; exit;}

$path_plantilla = PLANTILLA_PATH.'/'.$conf[$modulo]['plantilla'];
$path_modulo = MODULO_PATH.'/'.$conf[$modulo]['archivo'];

if (file_exists($path_plantilla))
	include( $path_plantilla );
else
	if (file_exists( $path_modulo ))
	    include( $path_modulo );
	else
		die('Error al cargar el módulo <b>'.$modulo.'</b>. :( <b>'.$conf[$modulo]['archivo'].'</b>');
?>