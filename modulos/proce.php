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

mysql_query("INSERT INTO bv_coleccion (coleccion_id, nombre, descripcion) VALUES ('','$_POST[nombre]','$_POST[descripcion]')");
header("location: ?modulo=ecole&info=<p class='info'>Colección creada con éxito</p>"); 
}
}












// ELIMINAMOS COLECCION Y SUS DOCUMENTOS SI EL ID EN GET EXISTE
if (isset($_GET['borrarcol'])) {
mysql_query("DELETE FROM bv_coleccion WHERE coleccion_id='$_GET[borrarcol]'");
mysql_query("DELETE FROM bv_documento WHERE coleccion_id='$_GET[borrarcol]'");
header("location: ?modulo=ecole&info=<p class='info'>Colección eliminada con éxito</p>"); 
}









// ELIMINAMOS DOCUMENTO SI EL ID EN GEteT EXISTE
if (isset($_GET['borrardoc'])) {
mysql_query("DELETE FROM bv_archivos WHERE archivo_id=(SELECT * FROM bv_documento, bv_archivos WHERE bv_documentos.archivo_id=bv_archivos.archivo_id)'");
mysql_query("DELETE FROM bv_documento WHERE id='$_GET[borrardoc]'");
header("location: ?modulo=edocu&info=<p class='info'>Documento eliminado con éxito</p>"); 
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
$titulo= mysql_query("SELECT contenido FROM bv_elementos_cont WHERE titulo='$_POST[titulo]'"); 

if(mysql_num_rows($titulo)>0) { 
header("location: ?modulo=adocu&error=<p class='error'>El nombre ya existe</p>"); 
exit;
mysql_close($link);
} 

else {

$titulo = $_POST[titulo];
$resumen = $_POST[resumen];
$fecha = $_POST[fecha];
$idioma = $_POST[idioma];
$tema = $_POST[tema];
mysql_query("INSERT INTO bv_documento (id, documento_id, coleccion_id) VALUES ('','$_POST[codigo]','$_POST[coleccion]')");
mysql_query("INSERT INTO bv_elementos_cont (id, documento_id, elemento_id, contenido) VALUES ('','$_POST[codigo]','1','$titulo')");
$autores=array_map('trim', explode(',', $_POST['autor']));
    foreach($autores as $autor)
    {
        if(!mysql_query("INSERT INTO bv_elementos_cont (id, documento_id, elemento_id, contenido) VALUES ('','$_POST[codigo]','2','$autor');"))
        {
            echo "Error insertando los datos.";
            exit();
        }
    }
mysql_query("INSERT INTO bv_elementos_cont (id, documento_id, elemento_id, contenido) VALUES ('','$_POST[codigo]','3','$resumen')");
$editores=array_map('trim', explode(',', $_POST['editor']));
    foreach($editores as $editor)
    {
        if(!mysql_query("INSERT INTO bv_elementos_cont (id, documento_id, elemento_id, contenido) VALUES ('','$_POST[codigo]','4','$editor');"))
        {
            echo "Error insertando los datos.";
            exit();
        }
    }
mysql_query("INSERT INTO bv_elementos_cont (id, documento_id, elemento_id, contenido) VALUES ('','$_POST[codigo]','6','$fecha')");
mysql_query("INSERT INTO bv_elementos_cont (id, documento_id, elemento_id, contenido) VALUES ('','$_POST[codigo]','11','$idioma')");
$temas=array_map('trim', explode(',', $_POST['tema']));
    foreach($temas as $dato)
    {
        if(!mysql_query("INSERT INTO bv_elementos_cont (id, documento_id, elemento_id, contenido) VALUES ('','$_POST[codigo]','15','$dato');"))
        {
            echo "Error insertando los datos.";
            exit();
        }
    }
//Definimos el destino de nuestro archivo a subir
$target = "./subidos/archivos/"; 
//Concatenamos el nombre del archivo a nuestro directorio
$target = $target . basename( $_FILES['archivo']['name']) ;
$nombre = basename( $_FILES['archivo']['name']) ;
$peso = basename( $_FILES['archivo']['size']) ;
// Obtener del array FILES (superglobal) los datos del binario .. nombre, tabamo y tipo.

//Movemos el archivo subido al directorio que definimos
if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target))
{
echo "El archivo ". basename( $_FILES['archivo']['name']). " ha sido subido";
}
else {
echo "Lo sentimos, hubo un problema subiendo tu archivo";
}



//AGREGAMOS LA IMAGEN
//Concatenamos el nombre del archivo a nuestro directorio
$target2 = "./subidos/miniaturas/";
$target2 = $target2 . basename( $_FILES['imagen']['name']) ;
$nombre2 = basename( $_FILES['imagen']['name']) ;
$peso2 = basename( $_FILES['imagen']['size']) ;
// Obtener del array FILES (superglobal) los datos del binario .. nombre, tabamo y tipo.

//Movemos el archivo subido al directorio que definimos
if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target2))
{
echo "El archivo ". basename( $_FILES['imagen']['name']). " ha sido subido";
}
else {
echo "Lo sentimos, hubo un problema subiendo tu archivo";
}





//insertamos los datos en la BD.
mysql_query("INSERT INTO bv_archivos (id, archivo_id, archivo_nombre, archivo_peso, archivo_formato) VALUES ('','$_POST[codigo]', '$nombre', '$peso', 'a')");
mysql_query("INSERT INTO bv_archivos (id, archivo_id, archivo_nombre, archivo_peso, archivo_formato) VALUES ('','$_POST[codigo]', '$nombre2', '$peso2', 'm')");
header("location: ?modulo=edocu&info=<p class='info'>Documento creado con éxito</p>"); 

}
}





































?>
