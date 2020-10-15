<?php

include '../procesos/conbd.php';
session_start();


if (isset($_POST["usercedula"]) && isset($_POST["pass_confirmed"]) && isset($_POST["passconfirma"])){
    #validar datos diferentes a null
    if (($_POST["usercedula"])!= "" && ($_POST["pass_confirmed"])!="" && ($_POST["passconfirma"])!="") {
        # VAIORDAR CONENIDO DE CAMPOS QUE NO SEA EN BLANCO
        if (($_POST["passconfirma"]) == ($_POST["pass_confirmed"])) {
            # Confirmar campos contreaseñas 
            #echo "CONTRASEÑAS IGUALES";
            if ($conn) {
                # Ejecutar busqueda de cdocumento de empleado
                $sql = "SELECT Document_empledado from empleadonesa where Document_empledado='".$_POST["usercedula"]."'";
                                       
                    if ($resultado = $conn->query($sql)) {
                        # Query exitoso: reclamar los datos
                        echo "el empleADO EXISTE";
                        
                        if ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                            
                            
                            $passuser = $_POST["pass_confirmed"];
                            $sql= "Inser into usuarios (pass_user) values ($passuser)";
                            header("location: ../index.php");
                            die();
                            
                        } else {
                            echo "NO se ha registrado el usaurio";
                        }
                        
                    }else{
                        echo "El empleado aun no se encuentra registrado en la base de datos.";
                    }
            }else{
                echo "Error en query: $sql";
            }
            
        }else{
            echo "Las Conraseñas no son iguales";
        }        
    }
    else{
        echo "TODOS LOS CAMPOS SON OBLIGATORIOS";
	    header("location: ../registro.php");
    }
}

?>