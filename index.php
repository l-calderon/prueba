<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Libro de Reclamaciones</title>
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/ubigeo.js"></script>
	<script src="js/app.js"></script>
</head>
<body>
<?php

    include_once 'conexion.php';
    
    if(isset($_POST['guardar'])){
        $nombre=$_POST['nombre'];
        $documento=$_POST['documento'];
        $numerodoc=$_POST['numerodoc'];
        $domicilio=$_POST['domicilio'];
        $celular=$_POST['celular'];
        $departamento=$_POST['departamento'];
        $provincia=$_POST['provincia'];
        $distrito=$_POST['distrito'];
        $correo=$_POST['correo'];
        $tipo=$_POST['tipo'];
        $biencontratado=$_POST['biencontratado'];
        $comprobante=$_POST['comprobante'];
        $numeroboleta=$_POST['numeroboleta'];
        $detalleservicio=$_POST['detalleservicio'];
        $detallereclamo=$_POST['detallereclamo'];

        if(!empty($nombre) && !empty($celular) && !empty($correo)){
            if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
                echo "<script> alert('Correo no valido');</script>";
            }else{
                $consulta_insert=$con->prepare('INSERT INTO reclamo(nombre,documento,numerodoc,domicilio,celular,departamento,provincia,distrito,correo,tipo,biencontratado,comprobante,numeroboleta,detalleservicio,detallereclamo) VALUES(:nombre,:documento,:numerodoc,:domicilio,:celular,:departamento,:provincia,:distrito,:correo,:tipo,:biencontratado,:comprobante,:numeroboleta,:detalleservicio,:detallereclamo)');
                $consulta_insert->execute(array(
                    ':nombre' =>$nombre,
                    ':documento' =>$documento,
                    ':numerodoc' =>$numerodoc,
                    ':domicilio' =>$domicilio,
                    ':celular' =>$celular,
                    ':departamento' =>$departamento,
                    ':provincia' =>$provincia,
                    ':distrito' =>$distrito,
                    ':correo' =>$correo,
                    ':tipo' =>$tipo,
                    ':biencontratado' =>$biencontratado,
                    ':comprobante' =>$comprobante,
                    ':numeroboleta' =>$numeroboleta,
                    ':detalleservicio' =>$detalleservicio,
                    ':detallereclamo' =>$detallereclamo,

                ));
                echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>";
                echo "<script>Swal.fire(  '¡LOS DATOS FUERON ENVIADOS EXITOSAMENTE!',  'En breve recibiras un mensaje en tu correo registrado.',  'success');</script>";
            }
        }else{
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>";
            echo "<script>Swal.fire({  icon: 'error',  title: 'Oops...',  text: 'Los campos estan vacios.'})</script>";
        }

    }

    


?>
	<div class="contenedor">
		<header>
			<div class="padre-header">
				<div class="logo-zone"><img class="logo-size" src="image/logo.png" alt="logo"></div>
				<div class="libro-zone">
					<h5>LIBRO DE RECLAMACIONES</h5>
					<img class="libro-size center" src="image/libro.png">
					<p>"Conforme a lo establecido en el Código de Protección y Defensa del Consumidor este establecimiento cuenta con un Libro de Reclamaciones a tu disposición Solicitalo para registrar una queja o reclamo"</p>
				</div>
			</div>
		</header>

		<section class="main">
			<section class="form-background">
    	<div>
    		<h3>IDENTIFICADOR DEL CONSUMIDOR RECLAMANTE</h3>
    		<hr>
    	</div>
    	<form id="formulario" action="" method="POST">
  			<div class="padre-model">
  				<div class="mini-padre">
  					<div class="space-one">Nombre y Apellido:</div>
  					<div class="space-two"><input type="text" name="nombre" required></div> 
  				</div>
  				<div class="mini-padre">
  					<div class="space-one">Doc de Identidad: </div>
  				<div class="space-two"><select id="documento" name="documento" required>
  					<option value="dni">DNI</option>
  					<option value="carne-extranjeria">Carné de Extranjeria</option>
				</select>
					</div>
				</div>
			</div >
			<div class="padre-model">
				<div class="mini-padre">
					<div class="space-one">Numero de Documento:</div>
					<div class="space-two"><input type="text" name="numerodoc" maxlength="11" required></div>
				</div>
				<div class="mini-padre">
					<div class="space-one">Domicilio:</div>
					<div class="space-two"><input type="text" name="domicilio" required></div>
				</div>
			</div>
			<div class="padre-model">
				
				<div class="mini-padre">
					<div class="space-one">Celular:</div>
					<div class="space-two"><input type="text" name="celular" maxlength="9" required></div>
				</div>
				<div class="mini-padre">
					<div class="space-one">Departamento:</div>
					<div class="space-two">
						<input type="text" name="departamento" maxlength="40" required placeholder="Lima">
						<!--<select id="ubigeo_dep" name="departamento">-->
						</select>
					</div>
				</div>				
			</div>
			<div class="padre-model">				
				<div class="mini-padre">
					<div class="space-one">Provincia:</div>
					<div class="space-two">
						<input type="text" name="provincia" maxlength="40" required placeholder="Lima">
						<!--<select id="ubigeo_pro" name="provincia">-->
						</select>
					</div>
				</div>
				<div class="mini-padre">
					<div class="space-one">Distrito:</div>
					<div class="space-two">
						<input type="text" name="distrito" maxlength="40" required placeholder="San Miguel">
						<!--<select id="ubigeo_dis" name="distrito">-->
						</select>
					</div>
				</div>				
			</div>
			<div class="padre-model">				
				<div class="mini-padre">
					<div class="space-one">E-mail:</div>
					<div class="space-two"><input type="email" name="correo" id="correo" required></div>
				</div>	
				<div class="mini-padre">
				</div>			
			</div>
  			<h3>MANIFIESTO DEL CONSUMIDOR RECLAMANTE</h3>
  			<hr>
  			<div class="padre-model">
				<div class="mini-padre">
					<div class="space-radio">
						Tipo: 
						<input type="radio" name="tipo" value="RECLAMO"required> Reclamo
    					<input type="radio" name="tipo" value="QUEJA"required> Queja
    				</div>
				</div>
				<div class="mini-padre">
					<div class="space-radio">
						Bien contratado: 
						<input type="radio" name="biencontratado" value="PRODUCTO"required> Producto
    					<input type="radio" name="biencontratado" value="SERVICIO"required> Servicio
    				</div>
				</div>
			</div>
			<div class="padre-model">
				<div class="mini-padre">
					<div class="space-one">Comprobante de pago: </div>
					<div class="space-two">
						<select id="comprobante" name="comprobante">  							
  							<option value="BOLETA">BOLETA</option>
  						</select>
  					</div>
				</div>
				<div class="mini-padre">
					<div class="space-one">N°:</div>
					<div class="space-two"><input type="text" name="numeroboleta" maxlength="40" required></div>
				</div>
			</div>
			<div class="padre-model">
				<div class="mini-padre">
					<div class="text-one">Detalle del producto o servicio</div>
					<div class="text-area"><textarea name="detalleservicio" maxlength="200" required></textarea></div>
				</div>		
			</div>
			<div class="padre-model">
				<div class="mini-padre">
					<div class="text-one">Detalle de la Reclamación o Queja	</div>
					<div class="text-area"><textarea name="detallereclamo" rows="20" maxlength="400" required></textarea></div>
				</div>		
			</div>
			
				
			<div class="privacidad">
				<p class="priv">Adjuntar fotos a <a href="mailto:atencionalcliente@wachiperu.com">atencionalcliente@wachiperu.com</a>
			</div>
</br>
			<div class="privacidad">
				<p class="priv">Al enviar mis datos personales, acepto la <a href="politicas-de-privacidad.pdf" target="_blank">Política de Privacidad</a> y <a href="tratamiento-de-datos.pdf" target="_blank">Tratamiento de Datos Personales de Wachi</a></p>
			</div>
  			<div class="boton">
    			<input type="submit" name="guardar" value="ENVIAR">
  			</div>
		</form>
    	</section>
	</section>
		
		<footer>
			<p>© 2020 Wachi Perú</p>
		</footer>
</body>
</html>