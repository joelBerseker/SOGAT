<?php
include('db.php');
if(isset($_POST['save_rol'])){
    $nombre = $_POST['nombre'];
    
    $query = "INSERT INTO rol(nombre) VALUES ('$nombre')";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Query Failed");
    }   

    $_SESSION['message'] = 'Rol Saved Succesfully';
    $_SESSION['message_type']= 'success';
    header("Location: ../index.php");
}
else{
    echo "No envio";
}

?>
