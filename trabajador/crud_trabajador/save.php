<?php
include('db.php');
if(isset($_POST['save_trabajador'])){
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $ape_paterno = $_POST['ape_paterno'];
    $ape_materno = $_POST['ape_materno'];
    $correo = $_POST['correo'];
    $id_rol = $_POST['rol'];
    $estado = $_POST['estado'];
    $pass = $_POST['pass'];
    $query = "INSERT INTO trabajador(dni, nombre, ape_paterno, ape_materno, id_rol, estado, correo, pass) VALUES ('$dni','$nombre','$ape_paterno','$ape_materno','$id_rol','$estado','$correo','$pass')";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Query Failed, INSERT INTO trabajador(dni, nombre, ape_paterno, ape_materno, id_rol, estado, correo, pass) VALUES ('$dni','$nombre','$ape_paterno','$ape_materno,'$id_rol','$estado','$correo','$pass')");
    }   

    $_SESSION['message'] = 'Trabajador Saved Succesfully';
    $_SESSION['message_type']= 'success';
    header("Location: ../index.php");
}
else{
    echo "No envio";
}

?>
