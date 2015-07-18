<?php
$coleccion=$_GET['id'];
	$result = mysql_query("SELECT * FROM bv_documento WHERE bv_documento.id = $coleccion ORDER BY bv_documento.documento_id DESC ");
		while ($row = mysql_fetch_array($result)) {
?>
<!-- extractor de metadatos para gestor de citas -->
<meta name="dc.creator" content="<?php print $row['autor']; ?>">
<meta name="dc.title" content="<?php print $row['titulo']; ?>">
<meta name="dc.description.abstract" content="<?php print $row['resumen']; ?>">
<meta name="dc.subject" content="<?php print $row['materia']; ?>">
<!-- fin extractor de metadatos para gestor de citas -->
<h1><?php print $row['titulo']; ?></h1>
<table class="ficha">
	<tr>
		<td class="metadato">Autor</td>
		<td class="dato"><?php print $row['autor']; ?></td>
	</tr>
	<tr>
		<td class="metadato">Materia</td>
		<td class="dato"><?php print $row['materia']; ?></td>
	</tr>
	<tr>
		<td class="metadato">Resumen</td>
		<td class="dato"><?php print $row['resumen']; ?></td>
	</tr>
</table>
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5230edb324a8fd86"></script>
<!-- AddThis Button END -->
<?php } ?>

