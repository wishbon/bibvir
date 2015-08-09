<?php 
	include('incluidos/funciones.php'); 
	include('incluidos/principio.htm'); 
	include('incluidos/estadisticas.htm');  
	include('incluidos/header.htm');
	include('incluidos/menu.htm');  
?>
<div class="contenido">
	<?php
		if (file_exists( $path_modulo )) include( $path_modulo );
		else die('Error al cargar el módulo <b>'.$modulo.'</b>. No existe el archivo <b>'.$conf[$modulo]['archivo'].'</b>');
	?>
</div>

<?php 
include('incluidos/footer.htm'); 
?>
