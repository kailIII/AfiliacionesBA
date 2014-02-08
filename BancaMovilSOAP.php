<?php
//call library
require_once('nusoap/lib/nusoap.php');
$URL       = "www.test.com";
$namespace = $URL . '?wsdl';
//using soap_server to create server object
$server    = new soap_server;
$server->configureWSDL('validarSolicitudRegistroUsuarioRequest', $namespace);

//register a function that works on server
$server->register('validarSolicitudRegistroUsuarioRequest');

// create the function
function validarSolicitudRegistroUsuarioRequest($name)
{
    if (!$name) {
        return new soap_fault('Client', '', 'Put your name!');
    }
   

    $result = "Hello, " . $name;
    return $result;
}
// create HTTP listener
$server->service($HTTP_RAW_POST_DATA);
exit();
?>