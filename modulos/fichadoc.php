<div class="fichadoc">
<table>
	<tr>
	<td rowspan="6" class="miniatura">
		<?php 
		$iddoc=$_GET['id'];
		$result = mysql_query("SELECT * FROM bv_archivos WHERE bv_archivos.archivo_formato='m' AND bv_archivos.archivo_id = '$iddoc'");
		while ($row = mysql_fetch_array($result)) {
		?>
		<a href="./subidos/archivos/<?php 
				$resulta = mysql_query("SELECT * FROM bv_archivos WHERE bv_archivos.archivo_formato='a' AND bv_archivos.archivo_id = '$iddoc'");
		while ($rowe = mysql_fetch_array($resulta)) {
			echo $rowe['archivo_nombre'];
		}
		 ?>">
		<img src="./subidos/miniaturas/<?php echo $row['archivo_nombre']; ?>" alt="" title="" class="miniatura">
		<?php } ?>
	</td>
		<td class="metadato"><?php echo $lang['TITULO']; ?></td>
		<td>
			<?php
			$iddoc=$_GET['id'];
			$result = mysql_query("SELECT elemento_id,contenido FROM bv_elementos_cont WHERE bv_elementos_cont.documento_id = '$iddoc' AND bv_elementos_cont.elemento_id=1");
			while ($row = mysql_fetch_array($result)) {
				echo $row['contenido'];
			} ?>
		</td>
	</tr>
	<tr>
	<td class="metadato"><?php echo $lang['AUTOR']; ?></td>
		<td>
			<?php
			$iddoc=$_GET['id'];
			$result = mysql_query("SELECT elemento_id,contenido FROM bv_elementos_cont WHERE bv_elementos_cont.documento_id = '$iddoc' AND bv_elementos_cont.elemento_id=2");
			while ($row = mysql_fetch_array($result)) {
				echo '<a href="?modulo=autor&autor='.$row['contenido'].'">';
				echo $row['contenido'];
				echo '</a> <span class="separador">-</span> ';
			} ?></a> 

		</td>
	</tr>
	<tr>
	<td class="metadato"><?php echo $lang['RESUMEN']; ?></td>
		<td>
			<?php
			$iddoc=$_GET['id'];
			$result = mysql_query("SELECT elemento_id,contenido FROM bv_elementos_cont WHERE bv_elementos_cont.documento_id = '$iddoc' AND bv_elementos_cont.elemento_id=3");
			while ($row = mysql_fetch_array($result)) {
				echo $row['contenido'];
			} ?>
		</td>
	</tr>
	<tr>
	<td class="metadato"><?php echo $lang['EDITORIAL']; ?></td>
		<td>
			<?php
			$iddoc=$_GET['id'];
			$result = mysql_query("SELECT elemento_id,contenido FROM bv_elementos_cont WHERE bv_elementos_cont.documento_id = '$iddoc' AND bv_elementos_cont.elemento_id=4");
			while ($row = mysql_fetch_array($result)) {
				echo '<a href="?modulo=editorial&editorial='.$row['contenido'].'">';
				echo $row['contenido'];
				echo '</a> <span class="separador">-</span>';
			} ?>
		</td>
	</tr>
	<tr>
	<td class="metadato"><?php echo $lang['FECHA']; ?></td>
		<td>
			<?php
			$iddoc=$_GET['id'];
			$result = mysql_query("SELECT elemento_id,contenido FROM bv_elementos_cont WHERE bv_elementos_cont.documento_id = '$iddoc' AND bv_elementos_cont.elemento_id=6");
			while ($row = mysql_fetch_array($result)) {
				echo $row['contenido'];
			} ?>
		</td>
	</tr>
	<tr>
	<td class="metadato"><?php echo $lang['TEMAS']; ?></td>
		<td>
			<?php
			$iddoc=$_GET['id'];
			$result = mysql_query("SELECT elemento_id,contenido FROM bv_elementos_cont WHERE bv_elementos_cont.documento_id = '$iddoc' AND bv_elementos_cont.elemento_id=15");
			while ($row = mysql_fetch_array($result)) {
				echo '<a href="?modulo=tema&tema='.$row['contenido'].'">';
				echo $row['contenido'];
				echo '</a> <span class="separador">-</span> ';
			} ?>
		</td>
	</tr>
</table>
</div>