<?php
	if (isset($_GET['error'])){
	echo $_GET['error']."<br>";
	}
?>
<form method="post" action="?modulo=proceso">
<h2>Agregar nueva categoría</h2>
<table>
	<tr>
		<td>Nombre</td>
		<td><input required="required" name="nombre" type="text" x-webkit-speech="x-webkit-speech" /></td>
	</tr>
	<tr>
		<td>Descripción</td>
		<td><textarea rows="4" name="descripcion" x-webkit-speech="x-webkit-speech" ></textarea></td>
	</tr>
</table>
<input type="submit" name="acole" value="Agregar categoría">
</form>
