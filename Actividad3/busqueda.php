<?php

if(isset($_POST["nom"]) && isset ($_POST["descripcion"]) && isset ($_POST["presentacion"])&& isset ($_POST["precio"])&& isset ($_POST["cantidad"])){
	$nombre = $_POST["nom"]; 
	$descripcion = $_POST["descripcion"];
	$presentacion = $_POST["presentacion"];
	$precio = $_POST["precio"];
	$cantidad = $_POST["cantidad"];
	
	$campos = array();
	
	
	if($nombre == ""){
		array_push($campos,"El campo nombre no puede estar vacio");
	}else if(strlen($nombre)<2){
		array_push($campos,"El nombre debe de tener mas de 2 letras");
	}else if(strlen($nombre)>30){
		array_push($campos,"El campo nombre no puede tener mas de 30 letras");
	}
	
	if($descripcion == ""){
		array_push($campos,"El campo descripcion no puede estar vacio");
	}else if(strlen($descripcion)<2){
		array_push($campos,"El campo descrpcion debe de tener mas de 2 letras");
	}else if(strlen($descripcion)>30){
		array_push($campos,"El campo descrpcion no puede tener mas de 30 letras");
	}
	
	if($presentacion == ""){
		array_push($campos,"El campo presentacion no puede estar vacio");
	}else if(strlen($presentacion)<2){
		array_push($campos,"El campo presentacion debe de tener mas de 2 letras");
	}else if(strlen($presentacion)>30){
		array_push($campos,"El campo presentacion no puede tener mas de 30 letras");
	}
	
	if($precio == ""){
		array_push($campos,"El campo precio no puede estar vacio" );
	}else if(!is_numeric($precio)){
		array_push($campos,"Solamente se admiten numeros");
	}
	
	if($cantidad == ""){
		array_push($campos,"El campo cantidad no puede estar vacio" );
	}else if(!is_numeric($cantidad)){
		array_push($campos,"Solamente se admiten numeros");
	}
	
	
	
	
	if(count($campos)>0){
        echo "Error";
       	for($i = 0; $i < count($campos); $i++){
			echo "<li>".$campos[$i]."</li>";
		} 
	}else{
		echo "Datos Correctos";
	}
	
}else{
	echo "Los datos esta vacios";
}


?>