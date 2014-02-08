<?php session_start(); ?>
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
	  /* REALIZANDO VALIDACIONES */
		  var pname = $('#pname').val();
		var sname = $('#sname').val();
		var papellido = $('#papellido').val();
		var sapellido = $('#sapellido').val();
		var tipoDoc = $('#tipoDoc').val();
		var numeroDoc = $('#numeroDoc').val();
		var paisResidencia = $('#paisResidencia').val();
		var email = $('#email').val();
		var email2 = $('#email2').val();
		var username = $('#username').val();
		var username2 = $('#username2').val();
		var contrasena = $('#contrasena').val();
		var contrasena2 = $('#reContrasena').val();
		var celular = $('#celular').val();
		var celular2 = $('#celular2').val();
		
	  if(pname == ""){
		alert("Por favor ingrese el primer Nombre");
		$('#pname').focus();
		return;
	  }
	  
	  if(sname == ""){
		alert("Por favor ingrese el Segundo Nombre");
		$('#sname').focus();
		return;
	  }
	 
	 if(papellido == ""){
		alert("Por favor ingrese el Primer Apellido");
		$('#papellido').focus();
		return;
	  }
	  
	  if(sapellido == ""){
		alert("Por favor ingrese el Segundo Apellido");
		$('#sapellido').focus();
		return;
	  }
	  
	  if(email == ""){
		alert("Por favor ingrese un correo electrónico válido");
		$('#email').focus();
		return;
	  }
	  
	  if(email2 == ""){
		alert("Por favor ingrese un correo electrónico válido");
		$('#email2').focus();
		return;
	  }
	  
	  if(email != email2){
		alert("Los correos electrónicos no son válidos");
		$('#email').focus();
		return;
	  }
	  
	  if(celular == ""){
		alert("El número de celular es requerido");
		$('#celular').focus();
		return;
	  }
	  
	  if(celular != celular2){
		alert("El número de celular no coincide");
		$('#celular').focus();
		return;
	  }
	  
	  
	  if(username == ""){
		alert("Por favor nombre de usuario");
		$('#username').focus();
		return;
	  }
	  if(username2 == ""){
		alert("Por favor nombre de usuario");
		$('#username2').focus();
		return;
	  }
	  
	  if(username != username2){
		alert("El usuario de Ebanca no es igual");
		$('#username').focus();
		return;
	  }
	  
	  if(contrasena == ""){
		alert("Por ingrese una contraseña Válida");
		$('#contrasena').focus();
		return;
	  }
	  
	  if(passwordStrength($('#contrasena').val() )!= "OK"){
		alert("La contraseña debe tener por lo menos 8 caracteres");
		$('#contrasena').val("");
		$('#contrasena').focus();
		return;
	  }
	  
	  if(contrasena2 == ""){
		alert("Por ingrese una contraseña Válida");
		$('#contrasena2').focus();
		return;
	  }
	  
	  if(contrasena != contrasena2){
		alert("Las contraseñas no son iguales");
		$('#contrasena').focus();
		return;
	  }
	  
	  
	  
	  $("#formulario").submit();
	  
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
			<p class="encabezado">REGISTRO EN LÍNEA DE E-BANCA DE PERSONAS / BANCA MÓVIL</p>

				<div class="contenedor_full">
				<div>
				<?php 
				if (isset($_SESSION["msgError"])){
				echo $_SESSION["msgError"];
				$_SESSION["msgError"] = "";
				}
				?>
				</div>
				<form id="formulario" name="formulario" action="procesaPaso1.php">	
					<br>
					<p class="encabezado-texto">DATOS PERSONALES:</p>
					
					<table class="table_class">
					<tr>
						<td><p>Primer Nombre</p></td>
						<td><input type="text" name="pname" id="pname" ><span>*</span></td>
						<td><p>Segundo Nombre</p></td>
						<td><input type="text" name="sname" id="sname"><span>*</span></td>						
					</tr>
					<tr>
						<td><p>Primer Apellido</p></td>
						<td><input type="text" name="papellido" id="papellido"><span>*</span></td>			
						<td><p>Segundo Apellido</p></td> 
						<td><input type="text" name="sapellido" id="sapellido"><span>*</span></td>			
					</tr>
					<tr>
						<td><p>Tipo de Documento</p></td>
						<td>
						<select name="tipoDoc" id="tipo">
                <option value="1" <?php if(isset($usuario['tipo_doc'])){ if($usuario['tipo_doc']=='1'){ echo 'selected="selected"'; }} ?>>DUI</option>
                <option value="2" <?php if(isset($usuario['tipo_doc'])){ if($usuario['tipo_doc']=='2'){ echo 'selected="selected"'; }} ?>>Pasaporte</option>
                <option value="3" <?php if(isset($usuario['tipo_doc'])){ if($usuario['tipo_doc']=='3'){ echo 'selected="selected"'; }} ?>>Carnet de residente</option>
        	</select><span>*</span></td>			
						<td><p>Número de Documento</p></td> 
						<td><input type="text" name="numeroDoc" id="numeroDoc"><span>*</span></td>			
					</tr>
					<tr>
						<td><p>País de Residencia</p></td>
						<td><select id="paisResidencia" name="paisResidencia">
						<option value="SV">El Salvador</option>
						<option value="OT">Otros</option>
						</select><span>*</span></td>			
						<td>&nbsp;</td> 
						<td>&nbsp;</td> 		
					</tr>
					</table>
					<p class="encabezado">&nbsp;</p>
					<br>
					<p class="encabezado-texto">DATOS PARA USUARIO E-BANCA PERSONAS / BANCA MOVIL:</p>
					
					<table class="table_class">
					<tr>
						<td><p>Correo Electrónico</p></td>
						<td><input type="text" name="email" id="email" onCut="return false" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false"><span>*</span></td>
						<td>Verifique el correo electrónico</td>
						<td><input type="text" name="email2" id="email2" onCut="return false" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false"><span>*</span></td>						
					</tr>
					<tr>
						<td><p>Telefono Celular</p></td>
						<td><input type="text" name="celular" id="celular" onCut="return false" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false"><span>*</span></td>
						<td>Verifique Telefono Celular</td>
						<td><input type="text" name="celular2" id="celular2" onCut="return false" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false"><span>*</span></td>						
					</tr>
					<tr>
						<td><p>Usuario E-Banca</p></td>
						<td><input type="text" name="username" id="username" onCut="return false" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false"><span>*</span></td>
						<td><p>Verifique Usuario</p></td>
						<td><input type="text" name="username2" id="username2" onCut="return false" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false"><span>*</span></td>						
					</tr>
					<tr>
						<td><p>Contraseña</p></td>
						<td><input type="password" name="contrasena" id="contrasena" onCut="return false" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false"><span>*</span></td>
						<td><p>Verifique Contraseña</p></td>
						<td><input type="password" name="reContrasena" id="reContrasena" onCut="return false" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false"><span>*</span></td>						
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>Mayor a 8 caracteres <br> La contraseña debe tener un mínimo de 8 caracteres un máximo de 16, además deberá tener numeros y letras</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>						
					</tr>
					</table>
					
					
				</form>
				</div>
					<div id="boton_submit">
					<img id="submit-guardar-y-continuar" src="images/guardar-y-continuar.png">
					</div>

				



 
			</div>

		<footer>
	<p class="texto-footer">© COPYRIGHT 2014 BANCOAGRICOLA.COM - CALL CENTER (503) 2210-0000</p>

		</footer>
</div>
</body>

</html>