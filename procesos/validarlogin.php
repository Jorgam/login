<?php

include '../procesos/conbd.php';
session_start();

$error1="";
if (isset($_POST["username"]) && isset($_POST["pass"])){
    if ($_POST["username"] != "" && $_POST["pass"] != ""){
        if ($conn) {
            $sql = "SELECT id, nombre_user, pass_user, estado_user FROM usuarios where nombre_user='".$_POST["username"]."' AND pass_user='".$_POST["pass"]."' AND estado_user='1'";
                if ($resultado = $conn->query($sql)) {
                    # Query exitoso: reclamar los datos
                    if ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                        # Usuario autenticado exitosamente
                        $_SESSION["aut"]=$fila;
                        # print_r($fila);
                        header("location: Organigrama_Nesagaviria.html");
                        die();
                    } else {
                        $error1="Error en la cuenta o en la clave";
                    }
                    
                } else {
                    $error1="Error en query: $sql";
                }
        }else{
            $error1="Error en conexión con el servidor de base de datos";
        }

    }else{
        $error1="Error: FALTAN ALGUNOS DATOS";   

	}
    $_SESSION["error1"] = $error1;
	header("location: ../index.php");
}

?>