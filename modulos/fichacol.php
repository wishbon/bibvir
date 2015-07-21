<?php
    $result = mysql_query("SELECT * FROM bv_coleccion WHERE coleccion_id='$_GET[id]'");    
	while($row = mysql_fetch_assoc($result))
	{ 
?>
<h2><?php echo $row['nombre']; ?></h2>
<h3>Descripción de la colección</h3>
<p><?php echo $row['descripcion']; ?></p>
<?php } ?>



<h3>Documentos en esta colección</h3>
<?php
	$coleccion=$_GET['id'];
	$result = mysql_query("SELECT * FROM bv_documento, bv_archivos WHERE bv_documento.coleccion_id=$coleccion AND bv_archivos.archivo_id=bv_documento.documento_id AND bv_archivos.archivo_formato='m'");
		while ($row = mysql_fetch_array($result)) {
?>
<!-- LLAMAMOS AL ARCHIVO QUE MUESTRA LOS DOCUMENTOS, LO HACEMOS DE ESTA MANERA, PUES OTROS ARCHIVOS HACEN EL MISMO LLAMADO -->
<?php require 'lista_docs.php'; ?>
<?php } ?>
