<?php
	if (isset($_GET['error'])){
	echo $_GET['error']."<br>";
}
?>
<?php
function generarCodigo($longitud) {
$llave = '';
$incluidos = '1234567890bcdfghjklmnpqrstvwxyz';
$max = strlen($incluidos)-1;
for($i=0;$i < $longitud;$i++) $llave .= $incluidos{mt_rand(0,$max)};
return $llave;
}
?>
<form method="post" action="?modulo=proceso" enctype="multipart/form-data">

<!-- generamos codigo aleatorio para cada archivo -->
<input style="display:none" name="codigo" value="<?php echo generarCodigo(10); ?>" />


<h2>Agregar nuevo documento</h2>
	<table>
		<tr>
			<td>Colección</td>
			<td><select name="coleccion" >
					<?php
					    $result = mysql_query("SELECT * FROM bv_coleccion ORDER BY nombre ASC");    
						while($row = mysql_fetch_assoc($result))
						{ 
					?> 
					<option value="<?php echo $row['coleccion_id'] ?>"><?php echo $row['nombre'] ?></option>
					<?php } ?>		
				</select></td>
		</tr>
		<tr>
			<td>Titulo</td>
			<td><input type="text" name="titulo" /></td>
		</tr>
		<tr>
			<td>Autor</td>
			<td><input type="text" name="autor" /></td>
		</tr>
		<tr>
			<td>Resumen:</td>
			<td><textarea name="resumen"> </textarea></td>
		</tr>
		<tr>
			<td>Fecha:</td>
			<td><input name="fecha" /></td>
		</tr>
		<tr>
			<td>Editor:</td>
			<td><input name="editor" /></td>
		</tr>
		<tr>
			<td>Idioma:</td>
			<td><input name="idioma" /></td>
		</tr>
		<tr>
			<td>Tema:</td>
			<td><input name="tema" /></td>
		</tr>

		<tr>
			<td>Documento</td>
			<td>
				<INPUT required="required" type="file" name="archivo" value="Archivo" size="30">
				<INPUT required="required" type="file" name="imagen" value="Miniatura" size="30">
			</td>
			</tr>
	</table>
	<input type="submit" name="adocu" value="Registrar documento">


</form>









