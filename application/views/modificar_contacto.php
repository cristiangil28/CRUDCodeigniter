<!DOCTYPE html>

<html>
	<head>
		<title>Editar Contacto</title>
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
	<form method="post" action="<?php echo base_url()?>ContactoController/updateContacto">
		<div class="form-group col-8">
		<label>ID</label>
		<input type="text" name="id" class="form-control" readonly="true" required="true"
		value="<?php echo $modificarContacto[0]->id ?>"/>
		</div>
		<div class="clearfix"></div>
		<div class="form-group col-8">
		<label>Email</label>
		<input type="email" name="email" class="form-control" required="true" value="
		<?php echo $modificarContacto[0]->email; ?>"/>
		</div>
		<div class="form-group col-8">
		<label>Nombre</label>
		<input type="text" name="nombre" class="form-control" required="true"
		value="<?php echo $modificarContacto[0]->nombre; ?>"/>
		</div>
		<div class="form-group col-8">
		<label>Teléfono</label>
		<input type="text" name="telefono" class="form-control" required="true"
		value="<?php echo $modificarContacto[0]->telefono; ?>"/>
		</div>
		<div class="form-group col-8">
		<label>Edad</label>
		<input type="number" name="edad" class="form-control" required="true"
		value="<?php echo $modificarContacto[0]->edad; ?>"/>
		</div>
		<div class="clearfix"></div>
		<input type="submit" class="btn btn-primary" value="Enviar"/>
		<input type="reset" class="btn btn-warning" value="Cancelar"/>
		</form>
	</div>
	</body>
	</html>