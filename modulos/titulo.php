<p>A continuación se presenta la lista de documentos por <strong>Título</strong></p>


<ul>
<?php
	$result = mysql_query("SELECT archivo_nombre, id FROM bv_documento ORDER BY bv_documento.doc DESC ");
		while ($row = mysql_fetch_array($result)) {
?>
<li>
<b><a href="?modulo=fichadoc&id=<?php echo $row['doc']; ?>"><?php echo $row['titulo']; ?></a></b>
<small>por: <?php echo $row['autor']; ?></small>
</li>
<?php } ?>
</ul>
