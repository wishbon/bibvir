<?php
	if (isset($_GET['info'])){
	print $_GET['info']."<br>";
	}
?>
<table class="lista">
	<tr>
		<th>Colección</th>
		<th></th>
		<th></th>
	</tr>
	<?php
	$result = mysql_query("SELECT * FROM bv_coleccion ORDER BY nombre ASC");
		while ($row = mysql_fetch_array($result)) {
	?>
	<script type="text/javascript">
	function confirmar(coleccion)
{
	if(confirm('¿Estas seguro de visitar esta url?'))
	{
		window.location=url;
	}
	else
	{
		return false;
	}	
}
	</script>
	<tr>
		<td><?php print $row['nombre'] ?></td>
		<td>
			<a href="?modulo=proceso&borrarcol=<?php print $row['id_col']?>" onclick="confirmar()" name="borrar">
			<img src="incluidos/imagenes/borrar.png">
			</a>
		</td>
		<!-- AUN NO TRABAJO LA FUNCION DE ACTUALIZAR, POR AHORA QUEDA SIN ESTA FUNCION 
		<td>
			<a href="?modulo=edcole&<?php print $row['id_col']?>" name="editar">
			<img src="incluidos/imagenes/editar.png">
			</a>
		</td>-->
	</tr>
	<?php } ?>
</table>
<div class="admin">
<small><a class="acole" href="?modulo=acole">Agregar coleción</a></small>
</div>