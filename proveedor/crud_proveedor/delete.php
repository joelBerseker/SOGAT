<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM proveedor WHERE id_proveedor = $id";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die("Query Fallo");
        }
        $_SESSION['message'] = 'proveedor Removed Succesfully';
        $_SESSION['message_type']= 'danger';
        header("Location: ../index.php");
    }
?>
