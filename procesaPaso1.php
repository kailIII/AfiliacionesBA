<?php
session_start();
require_once('funciones.php');
require_once('configuration.php');



/* SE RECUPERAN LAS VARIABLES A UTILIZAR */

$_SESSION['pname'] = $_REQUEST["pname"] ;
$_SESSION['sname'] = $_REQUEST["sname"];
$_SESSION['papellido'] = $_REQUEST["papellido"];
$_SESSION['sapellido'] = $_REQUEST["sapellido"];
$_SESSION['tipoDoc'] = $_REQUEST["tipoDoc"];
$_SESSION['numeroDoc'] = $_REQUEST["numeroDoc"];
$_SESSION['paisResidencia'] = $_REQUEST["paisResidencia"];
$_SESSION['email'] = $_REQUEST["email"];
$_SESSION['username'] = $_REQUEST["username"];
$_SESSION['contrasena'] = $_REQUEST["contrasena"];
$_SESSION['celular'] = $_REQUEST["celular"];




/* SE CONSUME EL WEB SERVICE */
$fechahora=date('YmdHis');

		/* SE PREPARA EL XML A ENVIAR AL SISTEMA */
		
		
		$operacion	=	"validarSolicitudRegistroUsuario";
		$xml		=  	'<?xml version="1.0" encoding="utf-8"?>
							<SOAP-ENV:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
							  <SOAP-ENV:Body>
								<tnsa:validarSolicitudRegistroUsuarioRequest xmlns:tns="http://schemas.xmlsoap.org/soap/encoding/" xmlns:tnsa="http://localhost/BancaMovil/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
								  <validarSolicitudRegistroUsuarioRequest>
										<![CDATA[<Request>
											<Header>
												<id>1200009</id>
												<idTransaccion></idTransaccion>
												<fechahora>'.$fechahora.'</fechahora>
												<usuario>bancaMovil</usuario>
											</Header>
											<Body>
												<idSolicitud></idSolicitud>
												<usuario>'.$_SESSION['username'].'</usuario>
												<nombre1>'.$_SESSION['pname'].'</nombre1>
												<nombre2>'.$_SESSION['sname'].'</nombre2>
												<apellido1>'.$_SESSION['papellido'].'</apellido1>
												<apellido2>'.$_SESSION['sapellido'].'</apellido2>
												<tipoDocumento>'.$_SESSION['tipoDoc'].'</tipoDocumento>
												<numeroDocumento>'.$_SESSION['numeroDoc'].'</numeroDocumento>
												<numeroTelefono>'.$_SESSION['celular'].'</numeroTelefono>
												<correoElectronico>'.$_SESSION['email'] .'</correoElectronico>
												<clave>'.$_SESSION['contrasena'].'</clave>
											</Body>
										</Request>]]>
									 </validarSolicitudRegistroUsuarioRequest>
									</tnsa:validarSolicitudRegistroUsuarioRequest>
								  </SOAP-ENV:Body>
								</SOAP-ENV:Envelope>';
						//echo $xml;

		if ($debugWS == 1){
		$respuesta=cliente($operacion,$xml);
		}else{
		$respuesta=$resultadoConsulta;
		}
		
		
		$xml = new SimpleXMLElement($resultadoConsulta);
		$codigo = $xml->Header->codigo;
		$mensaje .=  '<br>'.$xml->Header->descripcion;
		$idSolicitud=$xml->Body->idSolicitud;
		
		
		//print_r ($xml);
		//die();
		
		if($codigo!='00'){
				$data['mensaje']=$mensaje;
				$data['usuario']=$post;
				//$this->index($data);
				$_SESSION["msgError"] = $mensaje;
				header( 'Location: paso1.php' ) ;
			}
		else{

			$_SESSION['idSolicitud']=$idSolicitud;
			 header( 'Location: paso2.php' ) ;
			

		}
			

 
		
?>