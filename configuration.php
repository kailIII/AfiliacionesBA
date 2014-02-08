<?php
/* CONFIGURACIÓN AGRICOLA */

//$soapaction = "http://172.32.0.146:9080/BancaMovil/services/BancaMovilSOAP?WSDL";
//$soapClient = "http://172.32.0.146:9080/BancaMovil/services/BancaMovilSOAP";

/**********************/
/*CONFIGURACION WEB INFORMATICA */

$soapaction = "http://localhost/AfiliacionesBA/BancaMovilSOAP.php?WSDL";
$soapClient = "http://localhost/AfiliacionesBA/BancaMovilSOAP.php";

/**********************/

/* conexion a Web Servies? -- 1 envía movimientos a Web Services, 0 Simula el envío */

$debugWS = 0;
$resultadoConsulta = '<Response>
      <Header>
            <id>1200009</id>
            <idTransaccion></idTransaccion>
            <fechaHora>20131128153448</fechaHora>
            <codigo>00</codigo>
            <descripcion>PROCESO FINALIZADO SATISFACTORIAMENTE</descripcion>
      </Header>
      <Body>
            <idSolicitud>3acc456e1</idSolicitud>
            <mensaje>
            </mensaje>
      </Body>
</Response>';

$data['mensaje']=$resultadoConsulta;

				

?>