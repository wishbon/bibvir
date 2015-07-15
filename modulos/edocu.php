<?php
	if (isset($_GET['info'])){
	echo $_GET['info']."<br>";
	}
?>
<table class="lista">
	<tr>
		<th>Título</th>
		<th>Colección</th>
		<th></th>
		<th></th>

	</tr>
<?php

	
	$result = mysql_query("SELECT * FROM bv_documento, bv_coleccion WHERE bv_documento.id_coleccion = bv_coleccion.id_col ORDER BY titulo ASC");

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
		<td><?php echo $row['titulo'] ?></td>
		<td><?php echo $row['nombre'] ?></td>
		<td>
			<a href="?modulo=proceso&borrardoc=<?php echo $row['id_doc']?>" onclick="borrar();" name="borrardoc">
			<img src="incluidos/imagenes/borrar.png">
			</a>
		</td>
		<!-- SIN ESTA FUNCION POR AHORA 
		<td>
			<a href="?modulo=edcole&<?php echo $row['id_doc']?>" name="editar">
			<img src="incluidos/imagenes/editar.png">
			</a>
		</td>-->
	</tr>
	<?php } ?>
</table>
<div class="admin">
<small><a class="adocu" href="?modulo=adocu">Agregar documento</a></small>
</div>