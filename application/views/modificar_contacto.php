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

<br>

<!--crear un array con las propiedades de un input y se pasa al helper input
anteponiendole @ a los parámetros del set_value ignoramos los errores que puedan salir-->
<?php
$input_email = array(
        'name'  => 'email',
        'id' => 'email',
        'maxlength'   => '120',
        'size'=>'50',
        'class'=>'form-control',
        'value'=>set_Value('email',@$modificarContacto->email)
);
$input_nombre = array(
        'name'  => 'nombre',
        'id' => 'nombre',
        'maxlength'   => '60',
        'size'=>'50',
        'class'=>'form-control',
        'value'=>set_Value('nombre',@$modificarContacto->nombre)
);
$input_telefono = array(
        'name'  => 'telefono',
        'id' => 'telefono',
        'maxlength'   => '10',
        'size'=>'20',
        'class'=>'form-control',
        'value'=>set_Value('telefono',@$modificarContacto->telefono)
);
$input_edad = array(
        'name'  => 'edad',
        'id' => 'edad',
        'maxlength'   => '3',
        'size'=>'4',
        'class'=>'form-control',
        'value'=>set_Value('edad',@$modificarContacto->edad)
);
?>
<!--crear formulario con la ayuda de helpers-->

<?php //errores de forma global  
echo validation_errors();
echo('<div class="container">');
echo '<div class="col-lg-5">';
echo('<h1>Editar Contacto</h1>');
?>
<?php echo form_open(base_url().'ContactoController/updateContacto')?>
<?php echo "<div class='form-group col-8'>"?>
<?php echo form_hidden('id',$modificarContacto->id);?>
<?php echo "<div class='form-group col-8'>"?>
<?php echo form_label('Email')?>
<?php echo form_input($input_email);

echo '</div>';?>
<?php echo "<div class='form-group col-8'>"?>
<?php echo form_label('Nombre')?>
<?php echo form_input($input_nombre);
echo '</div>';?>
<?php echo "<div class='form-group col-8'>"?>
<?php echo form_label('Teléfono')?>
<?php echo form_input($input_telefono);
echo '</div>'?>
<?php echo "<div class='form-group col-8'>"?>
<?php echo form_label('Edad')?>
<?php echo form_input($input_edad);
echo('</div>')?>
<?php echo form_submit(array('value'=>'Actualizar','class'=>'btn btn-primary')); ?>
<?php echo form_reset(array('value'=>'Cancelar','class'=>'btn btn-warning')); ?>
<?php echo form_close();
echo('</div>');
echo('</div>');
?>
</body>
</html>