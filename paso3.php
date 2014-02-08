<?php session_start();?>
<!DOCTYPE html>

<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="sinfondovb.ico" />
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<link rel="stylesheet" type="text/css" href="css/reset.css"> 
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/funciones.js"></script>
	<title>Banco Agricola</title>
</head>
<body>
<script>
$( document ).ready(function() {
    
	
	
	$('#submitButton').on("click",function() {
	  console.log( "Realizando Validaciones" );
	  $("#formulario").submit();
	  
	}); 
	$('#boton_volver').on("click",function() {
	  console.log( "Realizando Validaciones" );
	  window.location.replace("paso1.php"); 
	  
	}); 
	
	
	

	
	/* SE APLICAN FORMATOS A LOS CAMPOS */

	
	$("#numeroDoc").mask("99999999-9")
    $("#tipoDoc").on('change',function(){
        if($(this).val()==1) $("#numeroDoc").mask("99999999-9")
        else $("#numeroDoc").unmask();
    });
	
	$("#celular").mask("99999999");
	$("#celular2").mask("99999999");
	$("#paisResidencia").on('change',function(){
        if($(this).val()=="SV"){
				$("#celular").mask("99999999");
				$("#celular2").mask("99999999");
			}
        else {
			$("#celular").unmask();
			$("#celular2").unmask();
			
		}
    });
	
	

	
	//$("input[name=celular]").mask("99999999");
	//$("input[name=celular2]").mask("99999999");
	
});

</script>
<div class="wrapper">	
		<header>
			<img src='images/logo_bancoagricola.png' />
			<img class="linea-proceso" src='images/pasos-banco-agricola.png' />
		</header>	
			<div class="container">
			<p class="encabezado">PASO 3 REGISTRO EN LÍNEA DE E-BANCA DE PERSONAS / BANCA MÓVIL</p>

				<div class="contenedor_full">
				
					<br>
					<p id="nota-importante">DATOS PERSONALES:</p>
					<p><br><br>
					<table class="table_class">
					<tr>
						<td>Primer Nombre</td>
						<td><?php echo $_SESSION["pname"];?></td>
						<td>Segundo Nombre</td>
						<td><?php echo $_SESSION["sname"];?></td>						
					</tr>
					<tr>
						<td>Primer Apellido</td>
						<td><?php echo $_SESSION["papellido"];?></td>			
						<td>Segundo Apellido</td> 
						<td><?php echo $_SESSION["sapellido"];?></td>			
					</tr>
					<tr>
						<td>Tipo de Documento</td>
						<td><?php echo $_SESSION["tipoDoc"];?>
						</td>			
						<td>Número de Documento</td> 
						<td><?php echo $_SESSION["numeroDoc"];?></td>			
					</tr>
					<tr>
						<td>País de Residencia</td>
						<td><?php echo $_SESSION["paisResidencia"];?></td>			
						<td>&nbsp;</td> 
						<td>&nbsp;</td> 		
					</tr>
					</table>
					<p class="encabezado">&nbsp;</p>
					<br>
					<p id="nota-importante">DATOS PARA USUARIO E-BANCA PERSONAS / BANCA MOVIL:</p>
					
					<table class="table_class">
					<tr>
						<td>Correo Electrónico</td>
						<td><?php echo $_SESSION["email"];?></td>
						<td></td>
						<td></td>						
					</tr>
					<tr>
						<td>Telefono Celular</td>
						<td><?php echo $_SESSION["celular"];?></td>
						<td></td>
						<td></td>						
					</tr>
					<tr>
						<td>Usuairo E-Banca</td>
						<td><?php echo $_SESSION["username"];?></td>
						<td></td>
						<td></td>						
					</tr>
					
					<tr>
						<td>&nbsp;</td>
						<td>Mayor a 8 caracteres <br> La contraseña debe tener un mínimo de 8 caracteres un máximo de 16, además deberá tener numeros y letras</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>						
					</tr>
					</table>
					
				<form id="formulario" name="formulario" action="paso4.php" method="post">		
				</form>
				</div>
				<div id="boton_volver">
					Volver
				</div>
				<div id="boton_submit">
				<img id="submitButton" src="images/boton-registro.png">
				</div>

				



 
			</div>

		<footer>
	<p class="texto-footer">© COPYRIGHT 2014 BANCOAGRICOLA.COM - CALL CENTER (503) 2210-0000</p>

		</footer>
</div>
</body>

</html>