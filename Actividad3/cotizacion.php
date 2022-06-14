<?php


if(isset($_POST["nom"]) && isset ($_POST["edad"]) && isset ($_POST["email"])){
	$nombre = $_POST["nom"];
	$edad = $_POST["edad"];
	$email =$_POST["email"];
	
	$campos = array();
	
	if($nombre == ""){
		array_push($campos,"El campo nombre no puede estar vacio");
	}else if(strlen($nombre)<2){
		array_push($campos,"El nombre debe de tener mas de 2 letras");
	}else if(strlen($nombre)>30){
		array_push($campos,"El campo nombre no puede tener mas de 30 letras");
	}
	
	if($edad == " " || strlen($edad)<2){
		array_push($campos,"El campo edad no puede estar vacio, ni tener menos de 2 numeros");
	}else if(strlen($edad)>3){
		array_push($campos,"El campo edad no puede tener mas de 3 numeros");
	}
	
	if($email == " " || strpos($email, "@") === false){
		array_push($campos,"Ingresa un correo valido");
	}else if(strlen($email)>20){
		array_push($campos,"El email no puede tener mas de 20 caracteres");
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
	echo "los datos estan vacios";
}

?>