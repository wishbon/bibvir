<!-- ESTE ARCHIVO MUESTRA LA LISTA DE DOCUMENTOS CORRESPONDIENTE A LA CONSULTA SQL A LA BD, SE USA EN OTROS ARCHIVOS -->
<ul class="documentos escritorio">
	<li>
		<a href="?modulo=fichadoc&id=<?php echo $row['archivo_id']; ?>">
			<img src="http://srv12.cpanelhost.cl/~cl119365/subidos/<?php echo $row['archivo_nombre']; ?>" alt="" title="" class="miniatura">
		</a>
	</li>
</ul>

<ul class="documentos movil">
	<li>
		<a href="?modulo=fichadoc&id=<?php echo $row['archivo_id']; ?>">
			<img src="./incluidos/imagenes/f_m.png" style="background-image:url('http://srv12.cpanelhost.cl/~cl119365/subidos/<?php echo $row['archivo_nombre']; ?>')" alt="" title="" class="miniatura">
		</a>
	</li>
</ul>