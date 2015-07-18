<?php


	$tag=$_GET['tag'];
	$result = mysql_query("SELECT DISTINCT * FROM bv_elementos_cont, bv_archivos WHERE bv_elementos_cont.elemento_id=15 AND bv_elementos_cont.contenido='$tag' AND bv_archivos.archivo_formato='m' AND bv_archivos.archivo_id = bv_elementos_cont.documento_id");
		while ($row = mysql_fetch_array($result)) {
?>
<ul class="documentos">
	<li>
	<img src="./subidos/miniaturas/<?php echo $row['archivo_nombre']; ?>" alt="" title="" class="miniatura">
		<!-- <a href="?modulo=fichadoc&id=<?php echo $row['id']; ?>">f</a> -->
	</li>
</ul>
<?php } ?>


