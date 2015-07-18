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
<ul class="documentos">
	<li>
	<img src="./subidos/miniaturas/<?php echo $row['archivo_nombre']; ?>" alt="" title="" class="miniatura">
		<!-- <a href="?modulo=fichadoc&id=<?php echo $row['id']; ?>">f</a> -->
	</li>
</ul>
<?php } ?>
