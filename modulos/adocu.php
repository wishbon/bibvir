<?php
if (isset($_GET['error'])){
	echo $_GET['error']."<br>";
}
?>
<?php
function generarCodigo($longitud) {
	$llave = '';
	$incluidos = '1234567890abcdefghijklmnopqrstuvwxyz';
	$max = strlen($incluidos)-1;
	for($i=0;$i < $longitud;$i++) $llave .= $incluidos{mt_rand(0,$max)};
		return $llave;
}
?>

<?php
if (isset($_POST['pass'])){
	$clave = $_POST['pass'];
	if ($clave == "1212"){
		echo "Clave correcta";
		?>
		<div class="cargadoc">
			<form method="post" action="?modulo=proceso" enctype="multipart/form-data">

				<!-- generamos codigo aleatorio para cada archivo -->
				<input style="display:none" name="codigo" value="<?php echo generarCodigo(10); ?>" />


				<h2>Agregar nuevo documento</h2>
				<table>
					<tr>
						<td>Colección</td>
						<td><select name="coleccion" required>
							<option value="">Seleccione</option>
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
							<td><input type="text" name="titulo" required /></td>
						</tr>
						<tr>
							<td>Autor</td>
							<td><input type="text" name="autor" required /></td>
						</tr>
						<tr>
							<td>Resumen:</td>
							<td><textarea name="resumen" required></textarea></td>
						</tr>
						<tr>
							<td>Fecha:</td>
							<td><input type="text" name="fecha" required /></td>
						</tr>
						<tr>
							<td>Editor:</td>
							<td><input type="text" name="editor" required /></td>
						</tr>
						<tr>
							<td>Idioma:</td>
							<td><input type="text" name="idioma" required /></td>
						</tr>
						<tr>
							<td>Tema:</td>
							<td><input type="text" name="tema" required /></td>
						</tr>

						<tr>
							<td>Documento</td>
							<td>
								<INPUT class="documento" required="required" type="file" name="archivo" value="Archivo" size="30">

								</td>
							</tr>
							<tr>
								<td>Portada</td>
								<td>
									<INPUT class="portada" required="required" type="file" name="imagen" value="Miniatura" size="30">
									</td>
								</tr>
							</table>
							<br />
							<br />
							<input type="submit" name="adocu" value="Subir documento">
						</form>
					</div>

				<?php
				}
				?>
				<?php
			}else{
			?>
				<form method="POST">
					<input type="text" name="pass" placeholder="Clave de acceso">
				</form>
			<?php
			}
			?>