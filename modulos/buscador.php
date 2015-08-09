<?php
if(empty($_GET['terminos'])) {
echo "Debe ingresar terminos de búsqueda";}
else {
	$terminos=$_GET['terminos'];
	echo "Resultados para la búsqueda: <b>".$terminos."</b><br />";
	$result = mysql_query("SELECT DISTINCT * FROM bv_elementos_cont, bv_archivos WHERE bv_elementos_cont.elemento_id=1 AND bv_elementos_cont.documento_id=bv_archivos.archivo_id AND bv_elementos_cont.contenido like '%$terminos%' AND bv_archivos.archivo_formato='m'");
		while ($row = mysql_fetch_array($result)) {
?>
<!-- LLAMAMOS AL ARCHIVO QUE MUESTRA LOS DOCUMENTOS, LO HACEMOS DE ESTA MANERA, PUES OTROS ARCHIVOS HACEN EL MISMO LLAMADO -->
<?php require 'lista_docs.php'; ?>
<?php } }?>

