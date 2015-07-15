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
<input style="display:none" name="codigo" value="<?php echo generarCodigo(8); ?>" />
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
					<option value="<?php echo $row['id_col'] ?>"><?php echo $row['nombre'] ?></option>
					<?php } ?>		
				</select></td>
		</tr>
		<tr>
			<td>Título</td>
			<td><input type="text" x-webkit-speech="x-webkit-speech" required="required" name="titulo" /></td>
		</tr>
		<tr>
			<td>Autor</td>
			<td><input type="text" x-webkit-speech="x-webkit-speech"  name="autor" /></td>
		</tr>
		<tr>
			<td>Materia</td>
			<td><input type="text" x-webkit-speech="x-webkit-speech"  name="materia" /></td>
		</tr>
		<tr>
			<td>Resumen</td>
			<td><textarea rows="4" name="resumen" ></textarea></td>
		</tr>
		<tr>
			<td>Documento</td>
			<td>
				<INPUT type="file" name="uploaded" size="30">
			</td>
			</tr>
	</table>
	<input type="submit" name="adocu" value="Registrar documento">


</form>









