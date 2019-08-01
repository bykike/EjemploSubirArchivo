<?php 
	//Incluir la clase.
	include('class.upload.php');
	$archivos = new Upload($_FILES['mi_archivo']);
	if ($archivos->uploaded){
		$archivos->file_new_name_body = date('H-M-s')."-".$archivos->file_src_name_body;
		$archivos->Process('archivos');
		if($archivos->processed){
			echo "Archivo Subido";
		}else{
			echo "Archivo No Subido, Error en la carpeta..".$archivo->error;
		}
		$archivos->Clean();
	}else{
		echo "Error al subir el archivo...".$archivo->error;
	}

?>