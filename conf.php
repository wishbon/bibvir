<?php
/*
 * BibVir
*/


$bd_host = 'localhost'; 
$bd_usur = 'bibvir'; 
$bd_pass = 'bibvir'; 
$bd_nomb = 'bibvir';
$bd_prefix = 'bv_'; 



define('MODULO_DEFECTO', 'home');
define('PLANTILLA_DEFECTO', 'plantilla.php');
define('PLANTILLA_ADMIN', 'plantilla_admin.php');
define('MODULO_PATH', realpath('./modulos/'));
define('PLANTILLA_PATH', realpath('./plantillas/'));

//HOME
$conf['home'] = array(
		'archivo' => 'home.php',
		'plantilla' => PLANTILLA_ADMIN ); 

// ADMIN
$conf['admin'] = array(
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
		'plantilla' => PLANTILLA_ADMIN ); 

// ELIMINAR COLECCION
$conf['ecole'] = array(
		'archivo' => 'ecole.php',
		'plantilla' => PLANTILLA_ADMIN ); 

// PROCESAR TODO
$conf['proceso'] = array(
		'archivo' => 'proce.php',
		'plantilla' => PLANTILLA_ADMIN ); 

// LISTA TITULOS
$conf['titulo'] = array(
		'archivo' => 'titulo.php',
		'plantilla' => PLANTILLA_ADMIN ); 

// LISTA COLECCIONES
$conf['colecc'] = array(
		'archivo' => 'colecc.php',
		'plantilla' => PLANTILLA_ADMIN ); 

// FICHA COLECCION
$conf['fichacol'] = array(
		'archivo' => 'fichacol.php',
		'plantilla' => PLANTILLA_ADMIN ); 

// FICHA TITULO
$conf['fichadoc'] = array(
		'archivo' => 'fichadoc.php',
		'plantilla' => PLANTILLA_ADMIN ); 

// ARTICULO
$conf['articulo'] = array(
		'archivo' => 'art.php' );

// IMPRIMIR
$conf['imp_art'] = array(
		'archivo' => $conf['articulo']['archivo'],
		'plantilla' => 'imprimir.php' );

?>