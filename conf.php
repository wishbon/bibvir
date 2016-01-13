<?php
/*
 * BibVir
*/


$bd_host = 'localhost';
$bd_usur = 'bibvir';
$bd_pass = 'bibvir';
$bd_nomb = 'bibvir';
$bd_prefix = 'bv_';




//IDIOMA CONFIGURACIONES

session_start();
header('Cache-control: private'); 
if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];

$_SESSION['lang'] = $lang;
setcookie("lang", $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($xde_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'es';
}

switch ($lang) {
  case 'en':
  $lang_file = 'lang.en.php';
  break;

  case 'de':
  $lang_file = 'lang.de.php';
  break;

  case 'es':
  $lang_file = 'lang.es.php';
  break;

  default:
  $lang_file = 'lang.es.php';

}

include_once 'languages/'.$lang_file;





//MODULOS CONFIGURACIONES

define('MODULO_DEFECTO', 'home');
define('PLANTILLA', 'plantilla.php');
define('PLANTILLA_ADMIN', 'plantilla_admin.php');
define('MODULO_PATH', realpath('./modulos/'));
define('PLANTILLA_PATH', realpath('./plantillas/'));

//HOME
$conf['home'] = array(
		'archivo' => 'home.php',
		'plantilla' => PLANTILLA );
//BUSCAR
$conf['buscar'] = array(
		'archivo' => 'buscador.php',
		'plantilla' => PLANTILLA );

// ADMIN
$conf['bv-admin'] = array(
		'archivo' => 'admin.php',
		'plantilla' => PLANTILLA_ADMIN );

// AGREGAR DOCUMENTO
$conf['adocu'] = array(
		'archivo' => 'adocu.php',
		'plantilla' => PLANTILLA_ADMIN );

// AGREGAR COLECCION
$conf['acole'] = array(
		'archivo' => 'acole.php',
		'plantilla' => PLANTILLA_ADMIN );

// ELIMINAR DOCUMENTO
$conf['edocu'] = array(
		'archivo' => 'edocu.php',
		'plantilla' => PLANTILLA );

// ELIMINAR COLECCION
$conf['ecole'] = array(
		'archivo' => 'ecole.php',
		'plantilla' => PLANTILLA );

// PROCESAR TODO
$conf['proceso'] = array(
		'archivo' => 'proce.php',
		'plantilla' => PLANTILLA );

// FICHA COLECCION
$conf['fichacol'] = array(
		'archivo' => 'fichacol.php',
		'plantilla' => PLANTILLA );

// FICHA ETIQUETAS
$conf['fichatag'] = array(
		'archivo' => 'fichatag.php',
		'plantilla' => PLANTILLA );

// FICHA DOCUMENTO
$conf['fichadoc'] = array(
		'archivo' => 'fichadoc.php',
		'plantilla' => PLANTILLA );

// FICHA DOCUMENTO
$conf['autor'] = array(
		'archivo' => 'autor.php',
		'plantilla' => PLANTILLA );

// FICHA DOCUMENTO
$conf['fecha'] = array(
		'archivo' => 'fecha.php',
		'plantilla' => PLANTILLA );

// FICHA DOCUMENTO
$conf['tema'] = array(
		'archivo' => 'tema.php',
		'plantilla' => PLANTILLA );

// FICHA DOCUMENTO
$conf['editorial'] = array(
		'archivo' => 'editorial.php',
		'plantilla' => PLANTILLA );

// ARTICULO
$conf['articulo'] = array(
		'archivo' => 'art.php' );

// IMPRIMIR
$conf['imp_art'] = array(
		'archivo' => $conf['articulo']['archivo'],
		'plantilla' => 'imprimir.php' );

?>
