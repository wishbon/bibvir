<?php 

// PROCESOS A EJECUTARSE EN LAS DIFERENCIAS FUNCIONES DE LA SECCION ADMIN, SERGIO FREDES

// AGREGAR COLECCION Y VERIFICAR SI ESTA VACIO O SI EXISTE
if (isset($_POST['acole'])) {

if (empty($_POST["nombre"])){
header("location: ?modulo=acole&error=<p class='error'>El nombre debe ser llenado</p>"); 
exit;
mysql_close($link);
}
$nombre= mysql_query("SELECT * FROM bv_coleccion WHERE nombre='$_POST[nombre]'"); 

if(mysql_num_rows($nombre)>0) { 
header("location: ?modulo=acole&error=<p class='error'>El nombre de la colección ya existe</p>"); 
exit;
mysql_close($link);
} 

else {

mysql_query("INSERT INTO bv_coleccion (id_col, nombre, descripcion) VALUES ('','$_POST[nombre]','$_POST[descripcion]')");
header("location: ?modulo=ecole&info=<p class='info'>Colección creada con éxito</p>"); 
}
}






// AGREGAR DOCUMENTO Y VERIFICAR SI ESTA VACIO O EXISTE
if (isset($_POST['adocu'])) {
// Verificamos que el campo titulo se ingrese en el formulario, de lo contrario se mostrara al usuario un mensaje de error
if (empty($_POST["titulo"])){
header("location: ?modulo=adocu&error=<p class='error'El título debe ser llenado</p>"); 
exit;
mysql_close($link);
}
// Verificamos que la coleccion se ingrese en el formlario, de lo contrario se le indicara al usuario qeu debe seleccionar una o crear una..
if (empty($_POST["coleccion"])){
header("location: ?modulo=adocu&error=<p class='error'>La coleccion debe ser llenada, si no existe colección deberá crear una.</p>"); 
exit;
mysql_close($link);
}
//Verificamos si el titulo ingresado existe en la base de datos, de ser así se informa al usuario con un mensaje
$titulo= mysql_query("SELECT * FROM bv_documento WHERE nombre='$_POST[titulo]'"); 

if(mysql_num_rows($titulo)>0) { 
header("location: ?modulo=adocu&error=<p class='error'>El nombre ya existe</p>"); 
exit;
mysql_close($link);
} 

else {

mysql_query("INSERT INTO bv_documento (id, archivo_id, titulo, autor, materia, resumen, id_coleccion) VALUES ('','$_POST[codigo]','$_POST[titulo]','$_POST[autor]','$_POST[materia]','$_POST[resumen]','$_POST[coleccion]')");
header("location: ?modulo=edocu&info=<p class='info'>Documento creado con éxito</p>"); 
}
}



// ELIMINAMOS COLECCION Y SUS DOCUMENTOS SI EL ID EN GET EXISTE
if (isset($_GET['borrarcol'])) {
mysql_query("DELETE FROM bv_coleccion WHERE id_col='$_GET[borrarcol]'");
mysql_query("DELETE FROM bv_documento WHERE id_coleccion='$_GET[borrarcol]'");
header("location: ?modulo=ecole&info=<p class='info'>Colección eliminada con éxito</p>"); 
}



// ELIMINAMOS DOCUMENTO SI EL ID EN GET EXISTE
if (isset($_GET['borrardoc'])) {
mysql_query("DELETE FROM bv_documento WHERE id_doc='$_GET[borrardoc]'");
header("location: ?modulo=edocu&info=<p class='info'>Documento eliminado con éxito</p>"); 
}



























if (empty($_FILES['uploaded']['name'])){
header ("location: nosubido");
//header("location: inicio.php?proceso=falta seleccionar fichero"); //o como se llame el formulario ..
exit;
mysql_close($link);
}

//Definimos el destino de nuestro archivo a subir
$target = "./subidos/";
 
//Concatenamos el nombre del archivo a nuestro directorio
$target = $target . basename( $_FILES['uploaded']['name']) ;
$codigo = $_POST[codigo];
$nombre = basename( $_FILES['uploaded']['name']) ;
$peso = basename( $_FILES['uploaded']['size']) ;
$tipo = basename( $_FILES['uploaded']['type']) ;
// Obtener del array FILES (superglobal) los datos del binario .. nombre, tabamo y tipo.

//Movemos el archivo subido al directorio que definimos
if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))
{
echo "El archivo ". basename( $_FILES['uploaded']['name']). " ha sido subido";
}
else {
echo "Lo sentimos, hubo un problema subiendo tu archivo";
}


//insertamos los datos en la BD.
mysql_query("INSERT INTO bv_archivos (id, archivo_id, archivo_binario, archivo_nombre, archivo_peso, archivo_tipo) VALUES ('','$codigo', '$binario_contenido', '$nombre', '$peso', '$tipo')");


//PARA GENERAR LAS MINIATURAS
header ("location: ./index.php?modulo=titulo")

?>
