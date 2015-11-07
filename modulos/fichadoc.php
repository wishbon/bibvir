<div class="fichadoc">
<table>
	<tr>
	<td rowspan="7" class="miniatura">
		<?php 
		$iddoc=$_GET['id'];
		$result = mysql_query("SELECT * FROM bv_archivos WHERE bv_archivos.archivo_formato='m' AND bv_archivos.archivo_id = '$iddoc'");
		while ($row = mysql_fetch_array($result)) {
		?>
		<a href="http://srv2.cpanelhost.cl/~cl119365/subidos/<?php 
				$resulta = mysql_query("SELECT * FROM bv_archivos WHERE bv_archivos.archivo_formato='a' AND bv_archivos.archivo_id = '$iddoc'");
		while ($rowe = mysql_fetch_array($resulta)) {
			echo $rowe['archivo_nombre'];
		}
		 ?>">
		 
		<img src="http://srv2.cpanelhost.cl/~cl119365/subidos/<?php echo $row['archivo_nombre']; ?>" alt="" title="" class="miniatura"></a><br /><br />
		<!-- compartir en facebook -->

		<a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fl1br05p4r4g33k5.esy.es%2F%3Fmodulo%3Dfichadoc%26id%3D<?php echo $iddoc ?>%23.VcfaTL50jSc.facebook','name','height=455,width=470,toolbar=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no');return false;"><img src="incluidos/imagenes/facebook.png" title="Compartir esta joya en Facebook"></a>
		<!--  compartir en twitter -->
		<a href="#"  onclick="window.open('https://twitter.com/intent/tweet?text=Este libro esta super bueno!+-+L1br05+p4r4+G33k5&url=http%3A%2F%2Fl1br05p4r4g33k5.esy.es%2F%3Fmodulo%3Dfichadoc%26id%3D<?php echo $iddoc ?>','name','height=255,width=470,toolbar=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no');return false;"><img src="incluidos/imagenes/twitter.png" title="Compartir esta joya en Twitter"></a>
		<!-- compartir en gmas -->
		<a href="#" onclick="window.open('https://plus.google.com/share?url=http%3A%2F%2Fl1br05p4r4g33k5.esy.es%2F%3Fmodulo%3Dfichadoc%26id%3D<?php echo $iddoc ?>&t=Este+libro+esta+super+bueno!+-+L1br05+p4r4+G33k5','name','height=455,width=490,toolbar=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no');return false;"><img src="incluidos/imagenes/google.png" title="Compartir esta joya en G+"></a>
		<!-- compartir en gmas -->
		<a href="#" onclick="window.open('https://plus.google.com/share?url=http%3A%2F%2Fl1br05p4r4g33k5.esy.es%2F%3Fmodulo%3Dfichadoc%26id%3D<?php echo $iddoc ?>&t=Este+libro+esta+super+bueno!+-+L1br05+p4r4+G33k5','name','height=455,width=490,toolbar=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no');return false;"><img src="incluidos/imagenes/corazon.png" width="27" title="Compartir esta joya en G+"></a>
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
	<td class="metadato"><?php echo $lang['IDIOMA']; ?></td>
		<td>
			<?php
			$iddoc=$_GET['id'];
			$result = mysql_query("SELECT elemento_id,contenido FROM bv_elementos_cont WHERE bv_elementos_cont.documento_id = '$iddoc' AND bv_elementos_cont.elemento_id=11");
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