<?php
	$index_pri   = true; 
	$index_pro   = true;
	$index_prov  = true;
	$index_rol   = true;
	$index_tra   = false;
	$index_rec   = true;
	$index_acc   = true;
?>
<?php
	include("crud_trabajador/db.php")
?>
<?php
	include("../includes/header.php")
?>

<div class="container p-4">
	<div class="row">
		<div class="col-md-4">
			<?php
				if(isset($_SESSION['message'])){
			?>
				<div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
					<?=$_SESSION['message'] ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>

			<?php 
				session_unset();
			}
			?>
			<div class="card card-body">
				<form action="crud_trabajador/save.php" method="POST">
					<div class="form-group">
						<input type="text" name="dni" class="form-control" placeholder="dni" autofocus>
					</div>
					<div class="form-group">
						<input type="text" name="nombre" class="form-control" placeholder="nombre trabajador" autofocus>
					</div>
					<div class="form-group">
						<input type="text" name="ape_paterno" class="form-control" placeholder="apellido paterno" autofocus>
					</div>
					<div class="form-group">
						<input type="text" name="ape_materno" class="form-control" placeholder="apellido materno" autofocus>
					</div>
					<div class="form-group">
						<input type="text" name="correo" class="form-control" placeholder="correo electronico" autofocus>
					</div>
					<div class="form-group">
						<input type="text" name="estado" class="form-control" placeholder="estado" autofocus>
					</div>
					<div class="form-group">
						<input type="text" name="pass" class="form-control" placeholder="pass" autofocus>
					</div>   
					Seleccione el rol <br>
					
					<?php
					$querya=mysqli_query($conn,"SELECT id_rol, nombre FROM rol");
					?>
					<select name="rol">
						<?php
						while($datosa = mysqli_fetch_array($querya)){ 
						?>
						<option value="<?php echo $datosa['id_rol'] ?>"> <?php echo $datosa['nombre'] ?> </option>
						<?php
						}
						?>
					</select><br>
					<input type="submit" class="btn btn-success btn-block" name="save_trabajador" value="Enviar">
				</form>
			</div>
		</div>
		<div class="col-md-8">
			<table class='table table-bordered'>
				<thead>
					<th>DNI</th>
					<th>NOMBRE</th>
					<th>APELLIDO PATERNO</th>
					<th>APELLIDO MATERNO</th>
					<th>ESTADO</th>
					<th>CORREO</th>
					<th>ID DEL ROL</th>
				</thead>
				<tbody>
				<?php
				$query = "SELECT * FROM trabajador";
				$resultTrabajador= mysqli_query($conn, $query);
				while($row= mysqli_fetch_array($resultTrabajador)){
				?>
					<tr>
						<td><?php echo $row['dni']?></td>
						<td><?php echo $row['nombre']?></td>
						<td><?php echo $row['ape_paterno']?></td>
						<td><?php echo $row['ape_materno']?></td>
						<td><?php echo $row['estado']?></td>
						<td><?php echo $row['correo']?></td>
						<td><?php echo $row['id_rol']?></td>
						<td>
							<a href="crud_trabajador/edit.php?id=<?php echo $row['dni']?>" class="btn btn-warning">
								Edit
							</a>
							<a href="crud_trabajador/delete.php?id=<?php echo $row['dni']?>" class="btn btn-danger">
								Delete
							</a>
						</td>
					</tr>


				<?php } ?>
				</tbody>
			</table
			>
		</div>
	</div>
</div>

<?php
	include("../includes/footer.php")
?>
	