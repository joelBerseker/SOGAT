<?php 
    include("db.php");
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
       
        $query = "SELECT * FROM proveedor WHERE id_proveedor = $id";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)== 1 ){
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $direccion = $row['direccion'];
            $telf_contacto = $row['telf_contacto'];
            $representante = $row['representante'];
            $correo = $row['correo'];
           
        }
        
    }
    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombrex2'];
        $direccion =$_POST['direccionx2'];
        $telf_contacto =$_POST['telf_contactox2'];
        $representante =$_POST['representantex2'];
        $correo =$_POST['correox2'];
        $query = "UPDATE proveedor SET nombre = '$nombre', direccion = '$direccion', telf_contacto = '$telf_contacto', representante = '$representante', correo = '$correo' WHERE id_proveedor = $id";
        $result = mysqli_query($conn,$query);

        $_SESSION['message'] = 'Proveedor Edited Succesfully';
        $_SESSION['message_type']= 'info';
        header("Location: ../index.php");
        
    }
?>
<?php
	include('../../includes/header.php')
?>
<div class="container p-4"></div>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']?>" method="POST">
                    <div class="form-group">
						<input type="text" name="nombrex2" class="form-control" value="<?php echo $nombre;?>" placeholder="Nombre" autofocus>
					</div>
					<div class="form-group">
                        <input type="text" name="direccionx2" class="form-control" value="<?php echo $direccion;?>" placeholder="Direccion" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="telf_contactox2" class="form-control" value="<?php echo $telf_contacto;?>" placeholder="Telefono" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="representantex2" class="form-control" value="<?php echo $representante;?>" placeholder="Representante" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="correox2" class="form-control" value="<?php echo $correo;?>" placeholder="Correo" autofocus>
                    </div>
					<button class="btn btn-success btn-block" name="update">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>


<?php
	include("../../includes/footer.php")
?>