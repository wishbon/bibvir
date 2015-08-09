<?php
function bibvir_titulo() {
	if (!empty($_GET['id']) && ($_GET['modulo'] == 'fichadoc')) {
		$iddoc=$_GET['id'];
		$result = mysql_query("SELECT elemento_id,contenido FROM bv_elementos_cont WHERE bv_elementos_cont.documento_id = '$iddoc' AND bv_elementos_cont.elemento_id=1");
		while ($row = mysql_fetch_array($result)) {
			echo $row['contenido']." - ";
		}
	}
	if (!empty($_GET['id']) && ($_GET['modulo'] == 'fichacol')) {
		$iddoc=$_GET['id'];
		$result = mysql_query("SELECT * FROM bv_coleccion WHERE coleccion_id='$_GET[id]'");
		while ($row = mysql_fetch_array($result)) {
			echo "Categoría: ".$row['nombre']." - ";
		}
	}
	if (!empty($_GET['editorial'])) {
		echo "Editorial: ".$_GET['editorial']." - ";
	}
	if (!empty($_GET['autor'])) {
		echo "Autor: ".$_GET['autor']." - ";
	}
	if (!empty($_GET['tema'])) {
		echo "Tema: ".$_GET['tema'];
	}
	else {
		echo "L1br05 p4r4 G33k5";
	} 
}

?>