<?php 
	
	$host = "localhost";    
	$basededatos = "contacto";    
	$usuariodb = "root";    
	$clavedb = "";   


	$tabla_db1 = "contactos"; 	   
	

	
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    //echo "No es posible la conexion con la Base de Datos....";
	    exit();
	}else{
        //echo "La conexion se establecio existosamente";
    }

?>
