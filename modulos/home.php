<?php
	$result = mysql_query("SELECT * FROM bv_documento, bv_archivos WHERE bv_archivos.archivo_id=bv_documento.documento_id AND bv_archivos.archivo_formato='m'");
		while ($row = mysql_fetch_array($result)) {
?>
<ul class="documentos">
	<li>
	<img src="./subidos/miniaturas/<?php echo $row['archivo_nombre']; ?>" alt="" title="" class="miniatura">
		<!-- <a href="?modulo=fichadoc&id=<?php echo $row['id']; ?>">f</a> -->
	</li>
</ul>
<?php } ?>
