<?php
	$editorial=$_GET['editorial'];
	$result = mysql_query("SELECT DISTINCT * FROM bv_elementos_cont, bv_archivos WHERE bv_elementos_cont.elemento_id=4 AND bv_elementos_cont.contenido='$editorial' AND bv_archivos.archivo_formato='m' AND bv_archivos.archivo_id = bv_elementos_cont.documento_id");
		while ($row = mysql_fetch_array($result)) {
?>
<!-- LLAMAMOS AL ARCHIVO QUE MUESTRA LOS DOCUMENTOS, LO HACEMOS DE ESTA MANERA, PUES OTROS ARCHIVOS HACEN EL MISMO LLAMADO -->
<?php require 'lista_docs.php'; ?>
<?php } ?>

