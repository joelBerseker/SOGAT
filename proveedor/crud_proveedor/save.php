<?php
include('db.php');
if(isset($_POST['save_product'])){
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $representante = $_POST['representante'];
    $correo = $_POST['correo'];
    
    $query = "INSERT INTO proveedor(nombre,direccion,telf_contacto, representante, correo) VALUES ('$nombre','$direccion','$telefono','$representante','$correo')";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Query Failed");
    }   

    $_SESSION['message'] = 'Proveedor Saved Succesfully';
    $_SESSION['message_type']= 'success';
    header("Location: ../index.php");
}
else{
    echo "No envio";
}

?>
