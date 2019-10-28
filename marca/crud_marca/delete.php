<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM tb_marca WHERE ID_MARCA = $id";
        $result = mysqli_query($conn,$query);
        if(!$result){
            echo  "DELETE FROM tb_product WHERE ID_PRODUCTO = $id ";
            die("Query Fallo");
        }
        header("Location: ../");
    }
?>
