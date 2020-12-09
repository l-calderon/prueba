<?php
	include_once 'conexion.php';

	$sentencia_select=$con->prepare('SELECT *FROM reclamo ORDER BY id DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM reclamo WHERE nombre LIKE :campo OR correo LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id="menu">
        <ul>
            <li>Lista Wachi v1.0.1</li>
            <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
        </ul>
    </div>
	<div class="contenedor">
		<h2>LISTA DEL FORMULARIO</h2>
		<div class="barra__buscador">
			<form action="" class="formulario" method="post">
				<input type="text" name="buscar" placeholder="Buscar nombre o email" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
			</form>
		</div>
		<div class="div-over">
		<table>
				<tr class="head">
					<td>Id</td>
					<td>Nombre</td>
					<td>Documento</td>
					<td>Numero de Documento</td>
					<td>Domicilio</td>
					<td>Celular</td>
					<td>Departamento</td>
					<td>Provincia</td>
					<td>Distrito</td>
					<td>Correo</td>
					<td>Tipo</td>
					<td>Bien Contratado</td>
					<td>Comprobante</td>
					<td>Numero boleta</td>
					<td>Detalle Servicio</td>
					<td>Detalle Reclamo</td>
					</tr>
				<?php foreach($resultado as $fila):?>
					<tr >
						<td><?php echo $fila['id']; ?></td>
						<td><?php echo $fila['nombre']; ?></td>
						<td><?php echo $fila['documento']; ?></td>
						<td><?php echo $fila['numerodoc']; ?></td>
						<td><?php echo $fila['domicilio']; ?></td>
						<td><?php echo $fila['celular']; ?></td>
						<td><?php echo $fila['departamento']; ?></td>
						<td><?php echo $fila['provincia']; ?></td>
						<td><?php echo $fila['distrito']; ?></td>
						<td><?php echo $fila['correo']; ?></td>
						<td><?php echo $fila['tipo']; ?></td>
						<td><?php echo $fila['biencontratado']; ?></td>
						<td><?php echo $fila['comprobante']; ?></td>
						<td><?php echo $fila['numeroboleta']; ?></td>
						<td><?php echo $fila['detalleservicio']; ?></td>
						<td><?php echo $fila['detallereclamo']; ?></td>
					</tr>
				<?php endforeach ?>
			</table>
		</div>
	</div>
</body>
</html>