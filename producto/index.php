<?php
	$index_pri   = true; 
	$index_pro   = false;
	$index_prov  = true;
	$index_rol   = true;
	$index_tra   = true;
	$index_rec   = true;
	$index_acc   = true;
	
?>
<?php
	include("crud_product/db.php")
?>
<?php
	include("../includes/header.php")
?>

<div class="container p-4">
	
	<div class="row">
		<div class="col-md-2">
		<?php
			include("crud_product/add.php")
		?>

		</div>
		<div class="col-md-11">
			<table class='table table-bordered' >
				<thead>
					<th>Nombre</th>
					<th>Marca</th>
					<th>Descripcion</th>
					<th>Tipo</th>
					<th>Proveedor</th>
					<th>Precio</th>
					<th>Provicion minima</th>
					<th>Cantidad</th>
					<th>Acciones</th>
				</thead>
				<tbody id="myList">
				<?php
				$query = "SELECT * FROM tb_producto ";
				$resultProduct= mysqli_query($conn, $query);
				while($row= mysqli_fetch_array($resultProduct)){
				?>
					<tr>
						<td><?php echo $row['NM_PRODUCTO']?></td>
						<td><?php echo $row['MARCA_PRODUCTO']?></td>
						<td><?php echo $row['DSC_PRODUCTO']?></td>
						<td><?php echo $row['ID_TIPO_PRODUCTO']?></td>
						<td><?php echo $row['PROV_PRODUCTO']?></td>
						<td><?php echo $row['PRECIO_PRODUCTO']?></td>
						<td><?php echo $row['PROV_MIN_PRODUCTO']?></td>
						<td><?php echo $row['CTD_COLUMNA']?></td>
						
						
						<td>
							<a href="crud_product/edit.php?id=<?php echo $row['ID_PRODUCTO']?>" class="btn btn-warning">
								Edit
							</a>
							<a href="crud_product/delete.php?id=<?php echo $row['ID_PRODUCTO']?>" class="btn btn-danger">
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
	