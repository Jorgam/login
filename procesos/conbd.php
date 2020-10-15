<?php

    $servername = "localhost";
    $database = "somosnesa";
    $username = "root";
    $password = "";
    // Crear conexion
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Verificar conexion
        if (!$conn) {
            
            die("CONEXION FALLIDA SERVER1: " . mysqli_connect_error());
        }
        else{
            
            #echo "CONEXION A BASE DE DATOS EXITOSA";
                
              # mysqli_close($conn);
        }

?>