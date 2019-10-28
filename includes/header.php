<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Php My SQl Crud</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/SOGAT/CSS/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand <?php if($index_pri==0) echo "disabled"?> " href="/SOGAT/">Inicio</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Producto
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/SOGAT/producto">Lista de Productos</a>
          <a class="dropdown-item" href="/SOGAT/marca">Marca</a>
          <a class="dropdown-item" href="/SOGAT/tipo_producto">Tipos de Producto</a>
        </div>
      </li>


      <li class="nav-item">         
        <a class="nav-link <?php if($index_prov==0) echo "disabled"?> " href="/SOGAT/proveedor" aria-disabled="<?php if($index_prov==1) echo "true"; else echo "false"; ?>">Proveedores</a>
      </li>
      <li class="nav-item">         
        <a class="nav-link <?php if($index_rol==0) echo "disabled"?> " href="/SOGAT/rol" aria-disabled="<?php if($index_rol==1) echo "true"; else echo "false"; ?>">Roles</a>
      </li>
      <li class="nav-item">         
        <a class="nav-link <?php if($index_tra==0) echo "disabled"?> " href="/SOGAT/trabajador" aria-disabled="<?php if($index_tra==1) echo "true"; else echo "false"; ?>">Trabajadores</a>
      </li>
      <li class="nav-item">        
        <a class="nav-link <?php if($index_rec==0) echo "disabled"?> " href="/SOGAT/recurso" aria-disabled="<?php if($index_rec==1) echo "true"; else echo "false"; ?>">Recursos</a>
      </li>
      <li class="nav-item">         
        <a class="nav-link <?php if($index_acc==0) echo "disabled"?> " href="/SOGAT/acceso" aria-disabled="<?php if($index_acc==1) echo "true"; else echo "false"; ?>">Accesos</a>
      </li>
    </ul>

    <div class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="myInput">
    </div>
  </div>
</nav>