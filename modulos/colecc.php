<p>A continuación se presenta la lista de <strong>Colecciones</strong></p>

<ul class="recientes">
<?php
	$result = mysql_query("SELECT * FROM bv_coleccion ORDER BY bv_coleccion.id_col DESC ");
		while ($row = mysql_fetch_array($result)) {
?>
<li>
<b><a href="?modulo=fichacol&id=<?php echo $row['id_col']; ?>"><?php echo $row['nombre']; ?></a></b>
</li>
<?php
 } 
 ?>
</ul>
