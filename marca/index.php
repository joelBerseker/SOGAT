<?php
	$index_pri   = true; 
	$index_pro   = true;
	$index_prov  = true;
	$index_rol   = true;
	$index_tra   = true;
	$index_rec   = true;
	$index_acc   = true;
	$index_mar   = true;
	
?>
<?php
	include("crud_marca/db.php")
?>
<?php
	include("../includes/header.php")
?>

<div class="container p-4">
	
	<div class="row">
		<div class="col-md-2">
		<?php
			include("crud_marca/add.php")
		?>

		</div>
		<div class="col-md-11">
			<table class='table table-bordered'>
				<thead>
					<th>ID</th>
					<th>NOMBRE</th>
					<th>ESTADO</th>
					<th>FECHA DE CREACION</th>
					<th>Acciones</th>
				</thead>
				<tbody>
				<?php
				$query = "SELECT * FROM tb_marca ";
				$resultProduct= mysqli_query($conn, $query);
				while($row= mysqli_fetch_array($resultProduct)){
				?>
					<tr>
						<td><?php echo $row['ID_MARCA']?></td>
						<td><?php echo $row['nombre']?></td>
						<td><?php echo $row['estado']?></td>
						<td><?php echo $row['create_at']?></td>
						
						<td>
							<a href="crud_marca/edit.php?id=<?php echo $row['ID_MARCA']?>" class="btn btn-warning">
								Edit
							</a>
							<a href="crud_marca/delete.php?id=<?php echo $row['ID_MARCA']?>" class="btn btn-danger">
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
	