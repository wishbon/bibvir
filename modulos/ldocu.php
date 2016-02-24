<?php
	if (isset($_GET['info'])){
	echo $_GET['info']."<br>";
	}
?>
<table class="lista">
	<tr>
		<th>Portada</th>
		<th>Título</th>
		<th></th>

	</tr>
<?php


	$result = mysql_query("SELECT * FROM bv_elementos_cont, bv_archivos where bv_elementos_cont.elemento_id=1 AND bv_archivos.archivo_id=bv_elementos_cont.documento_id AND bv_archivos.archivo_formato='m'");

		while ($row = mysql_fetch_array($result)) {
?>
<script type="text/javascript" >
		function borrar() {
		if(confirm("¿Quieres borrar este documento?")) {
		document.location.href= '';
	}
	}
</script>
	<tr>
		<td><img class="portada-lista" src="http://srv12.cpanelhost.cl/~cl119365/subidos/<?php echo $row['archivo_nombre'] ?>"></td>
		<td><?php echo $row['contenido'] ?></td>
		<!--<td>
			<a href="?modulo=proceso&borrardoc=<?php echo $row['documento_id']?>" onclick="borrar();" name="borrardoc">
			<img src="incluidos/imagenes/eliminar.png">
			</a>
		</td>-->

		<td>
			<a href="?modulo=edocu&documento=<?php echo $row['documento_id']?>" name="editar">
			<img src="incluidos/imagenes/editar.png">
			</a>
		</td>
	</tr>
	<?php } ?>
</table>
