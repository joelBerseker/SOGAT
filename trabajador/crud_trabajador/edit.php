<?php 
    include("db.php");
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
       
        $query = "SELECT * FROM trabajador WHERE dni = $id";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)== 1 ){
            $row = mysqli_fetch_array($result);
            $dni = $row['dni'];
            $nombre = $row['nombre'];
            $ape_paterno = $row['ape_paterno'];
            $ape_materno = $row['ape_materno'];
            $correo = $row['correo'];
            $id_rol = $row['id_rol'];
            $estado = $row['estado'];
            $pass = $row['pass'];
           
        }
        
    }
    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $dni = $_POST['dnix2'];
        $nombre = $_POST['nombrex2'];
        $ape_paterno = $_POST['ape_paternox2'];
        $ape_materno = $_POST['ape_maternox2'];
        $correo = $_POST['correox2'];
        $id_rol = $_POST['rolx2'];
        $estado = $_POST['estadox2'];
        $pass = $_POST['passx2'];
        $query = "UPDATE trabajador SET dni = '$dni', nombre = '$nombre', ape_paterno = '$ape_paterno', ape_materno = '$ape_materno', correo = '$correo', id_rol = '$id_rol', estado = '$estado', pass = '$pass' WHERE dni = $id";
        $result = mysqli_query($conn,$query);

        $_SESSION['message'] = 'Trabajador Edited Succesfully  ';
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
                        <input type="text" name="dnix2" class="form-control" value="<?php echo $dni;?>" placeholder="DNI" autofocus>
                    </div>
                    <div class="form-group">
						<input type="text" name="nombrex2" class="form-control" value="<?php echo $nombre;?>" placeholder="Nombre" autofocus>
					</div>
                    <div class="form-group">
                        <input type="text" name="ape_paternox2" class="form-control" value="<?php echo $ape_paterno;?>" placeholder="Apellido paterno" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="ape_maternox2" class="form-control" value="<?php echo $ape_materno;?>" placeholder="Apellido materno" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="correox2" class="form-control" value="<?php echo $correo;?>" placeholder="Correo" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="estadox2" class="form-control" value="<?php echo $estado;?>" placeholder="Estado" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="passx2" class="form-control" value="<?php echo $pass;?>" placeholder="Pass" autofocus>
                    </div>
					<div class="form-group">
                        
                        Seleccione el rol <br>
                    
                    <?php
                    $querya=mysqli_query($conn,"SELECT id_rol, nombre FROM rol");
                    ?>
                    <select name="rolx2">
                        <?php
                        while($datosa = mysqli_fetch_array($querya)){ 
                        ?>
                        <option value="<?php echo $datosa['id_rol'] ?>"> <?php echo $datosa['nombre'] ?> </option>
                        <?php
                        }
                        ?>
                    </select><br>
                    </select><br>
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