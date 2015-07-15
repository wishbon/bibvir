<?php
    $result = mysql_query("SELECT * FROM bv_coleccion WHERE id_col='$_GET[id]'");    
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
	$result = mysql_query("SELECT * FROM bv_documento INNER JOIN bv_coleccion ON bv_documento.id_coleccion = bv_coleccion.id_col WHERE bv_coleccion.id_col = $coleccion ORDER BY bv_documento.id_doc DESC");
		while ($row = mysql_fetch_array($result)) {
?>
<ul>
	<li>
		<a href="?modulo=fichadoc&id=<?php echo $row['id_doc']; ?>"><?php echo $row['titulo']; ?></a>
	</li>
</ul>
<?php } ?>
