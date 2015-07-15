<ul>
<?php
	$result = mysql_query("SELECT * FROM bv_documento ORDER BY bv_documento.id_doc DESC ");
		while ($row = mysql_fetch_array($result)) {
?>
<li>
<b><a href="?modulo=fichadoc&id=<?php echo $row['id_doc']; ?>"><?php echo $row['titulo']; ?></a></b>
<small>por: <?php echo $row['autor']; ?></small>
</li>
<?php } ?>
</ul>
