<?php
	$index_pri   = true; 
	$index_pro   = true;
	$index_prov  = false;
	$index_rol   = true;
	$index_tra   = true;
	$index_rec   = true;
	$index_acc   = true;
	
?>
<?php
	include("crud_proveedor/db.php")
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
				<form action="crud_proveedor/save.php" method="POST">
					<div class="form-group">
						<input type="text" name="nombre" class="form-control" placeholder="nombre" autofocus>
					</div>
					<div class="form-group">
						<input type="text" name="direccion" class="form-control" placeholder="direccion" autofocus>
					</div>
					<div class="form-group">
						<input type="text" name="telefono" class="form-control" placeholder="telefono de contacto" autofocus>
					</div>
					<div class="form-group">
						<input type="text" name="representante" class="form-control" placeholder="representante" autofocus>
					</div>
					<div class="form-group">
						<input type="text" name="correo" class="form-control" placeholder="correo" autofocus>
					</div>
					<input type="submit" class="btn btn-success btn-block" name="save_product"value="Enviar">
				</form>
			</div>
		</div>
		<div class="col-md-8">
			<table class='table table-bordered'>
				<thead>
					<th>ID</th>
					<th>NOMBRE</th>
					<th>DIRECCION</th>
					<th>TELEFONO</th>
					<th>REPRESENTANTE</th>
					<th>CORREO</th>
				</thead>
				<tbody>
				<?php
				$query = "SELECT * FROM proveedor";
				$resultProduct= mysqli_query($conn, $query);
				while($row= mysqli_fetch_array($resultProduct)){
				?>
					<tr>
						<td><?php echo $row['id_proveedor']?></td>
						<td><?php echo $row['nombre']?></td>
						<td><?php echo $row['direccion']?></td>
						<td><?php echo $row['telf_contacto']?></td>
						<td><?php echo $row['representante']?></td>
						<td><?php echo $row['correo']?></td>
						<td>
							<a href="crud_proveedor/edit.php?id=<?php echo $row['id_proveedor']?>" class="btn btn-warning">
								Edit
							</a>
							<a href="crud_proveedor/delete.php?id=<?php echo $row['id_proveedor']?>" class="btn btn-danger">
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
	