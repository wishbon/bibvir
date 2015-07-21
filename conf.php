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
$conf['bibvir-admin'] = array(
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