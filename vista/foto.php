<?php 


$nombre=$_FILES['imagenes']['name'];
$guardado=$_FILES['imagenes']['tmp_name'];

if(!file_exists('imagenes')){
	mkdir('imagenes',0777,true);
	if(file_exists('imagenes')){
		if(move_uploaded_file($guardado, 'imagenes/'.$nombre)){
			echo "Archivo guardado con exito";
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($guardado, 'imagenes/'.$nombre)){
		echo "Archivo guardado con exito";
	}else{
		echo "Archivo no se pudo guardar";
	}
}

?>