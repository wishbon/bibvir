<?php
if (isset($_GET['error'])){
	echo $_GET['error']."<br>";
}

$documento = $_GET['documento'];
$result = mysql_query("SELECT * FROM bv_elementos_cont WHERE bv_elementos_cont.documento_id=$documento");
while($row = mysql_fetch_assoc($result))
{
	?>

				<h2>Editar documento</h2>
				<table>
					<tr>
						<td>Colección</td>
						<td><select name="coleccion" required>
							<option value="">Seleccione</option>

								<option value="<?php echo $row['documento_id'] ?>"><?php echo $row['nombre'] ?></option>
								<?php } ?>
							</select></td>
						</tr>
						<tr>
							<td>Titulo</td>
							<td><input type="text" name="titulo" required value="" /></td>
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
