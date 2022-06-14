<?php
$error;
if(!empty($_POST['nickname']) && !empty($_POST['password'])){
$nickname = $_POST['nickname'];
$password = $_POST['password'];

if ($nickname =="Admin01" && $password == "2022admin") 
{   
$error = "OK";
echo "Accedio";
header("Location: administracion.html?error=$error");
}


else if ($nickname =="Gerente" && $password == "2022grete") 
{   
$error = "OK";
echo "Accedio";
header("Location: administracion.html?error=$error");
}

else if ($nickname =="Sistema" && $password == "2022stema") 
{   
$error = "OK";
echo "Accedio";
header("Location: administracion.html?error=$error");}


else{
$error = "incorrecto";
header("Location: Usuarios.html.php?error=$error");
}

}

else{
    $error = "vacio";
    header("Location: Usuarios.html.php?error=$error");  
}













