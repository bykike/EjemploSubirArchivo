<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<fieldset class="left">
	    <legend>Ejemplo de Subir Archivo</legend>
	    <p>Seleccione un archivo para subir y luego de click en enviar. </p>
	    <form name="formSimple" id="formSimple" enctype="multipart/form-data" method="post" action="subirBasico.php" />
	        <p><input type="file" size="32" name="mi_archivo" value="" /></p>
	        <p class="button"><input type="hidden" name="action" value="simple" />
	        <input type="submit" name="Submit" value="Subir" /></p>
	    </form>
	</fieldset>
</body>
</html>