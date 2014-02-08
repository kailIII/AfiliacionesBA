<?php 
function cliente($operacion,$xml){
	
	require_once('nusoap/lib/nusoap.php');
	require_once('configuration.php');
	
	
	$client = new nusoap_client($soapClient);
	$client->soap_defencoding = 'utf-8';
	$client->useHTTPPersistentConnection(); // Uses http 1.1 instead of 1.0
	$client->operation = $operacion;//-->metodo, funcion

	$serverScript = '';
	$metodo = 'soapRequest';
	$request_bill_size = 8;
	$request_xml_index = '';

	$request_xml = $xml;

 	//error_log($request_xml,0);
 	$result = $client->send($request_xml, $soapaction, '');
  
 	if ($client->fault) {
		  $reporte = '<p>Fault: ';
		  //print_r($result);
		  $reporte .= '</p>';
		  $reporte .= '<p><b>Request:</b><br>';
		  $reporte .= htmlspecialchars($client->request, ENT_QUOTES) . '</p>';
		  $reporte .= '<p><b>Response:</b><br>';
		  $reporte .= htmlspecialchars($client->response, ENT_QUOTES) . '</p>';
		  $reporte .= '<p><b>Debug:</b><br>';
		  $reporte .= htmlspecialchars($client->debug_str, ENT_QUOTES) . '</p>';
		  
		  $resultadoOperacion['reporte']=$reporte;
		  $resultadoOperacion['estado']='error';
		  
	} else {
		  $err = $client->getError();
		  if ($err) {
			  
			   $reporte  = '<p>Error: '.$err.'</b></p>';
			   $reporte .= '<p><b>Request:</b><br>';
			   $reporte .= htmlspecialchars($client->request, ENT_QUOTES) . '</p>';
			   $reporte .= '<p><b>Response:</b><br>';
			   $reporte .= htmlspecialchars($client->response, ENT_QUOTES) . '</p>';
			   $reporte .= '<p><b>Debug:</b><br>';
			   $reporte .= htmlspecialchars($client->debug_str, ENT_QUOTES) . '</p>';
			   
			   $resultadoOperacion['reporte']=$reporte;
		  	   $resultadoOperacion['estado']='error';
			   
		  } else {
			   
			   $resultadoOperacion['reporte']=$result;
		  	   $resultadoOperacion['estado']='ok';
		  }
	}
	return $resultadoOperacion;
	
}

