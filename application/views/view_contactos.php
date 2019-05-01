<!DOCTYPE html>

<html>
	<head>
		<title>Lista Contactos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	
	<body>
	<div class="container">
	<div class="col-lg-5">
	<h2>Crear Contacto</h2>
	<form method="post" action="ContactoController/saveContacto">
		<div class="form-group col-8">
		<label>Email</label>
		<input type="email" name="email" class="form-control" required="true"/>
		</div>
		<div class="form-group col-8">
		<label>Nombre</label>
		<input type="text" name="nombre" class="form-control" required="true"/>
		</div>
		<div class="form-group col-8">
		<label>Teléfono</label>
		<input type="text" name="telefono" class="form-control" required="true"/>
		</div>
		<div class="form-group col-8">
		<label>Edad</label>
		<input type="number" name="edad" class="form-control" required="true"/>
		</div>
		<div class="clearfix"></div>
		<input type="submit" class="btn btn-primary" value="Enviar"/>
		<input type="reset" class="btn btn-warning" value="Cancelar"/>
		</form>
	</div>
	
	<div class="col-lg-7">
	<h2>Lista de contactos</h2>
	<table border="1" class="table table-striped table-bordered table-hover table-condensed" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Email</th>
			<th>Nombre</th>
			<th>Teléfono</th>
			<th colspan="2">Opciones</th>
		</tr>
		
	</thead>
	<tbody>
	
		<?php
		foreach($contacto as $c){
			echo "<tr><td>".$c->id."</td>";
			echo "<td>".$c->email."</td>";
			echo "<td>".$c->nombre."</td>";
			echo "<td>".$c->telefono."</td>";
			echo"<td><a href='". base_url()."ContactoController/
					modificarContacto/".$c->id."'>Editar</a></td>";
					echo"<td><a href='". base_url()."ContactoController/
					eliminarContacto/".$c->id."'>Eliminar</a></td></tr>";
		}
		?>
	
		</tbody>
		</table>
		</div>
		</div>
	</body>
	
</html>