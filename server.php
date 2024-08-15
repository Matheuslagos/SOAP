<?php
require_once 'Calculator.php';

// Cria uma instância do servidor SOAP
$server = new SoapServer("http://localhost/server.wsdl");

// Define a classe que implementa os métodos SOAP
$server->setClass('Calculator');

$server->handle();
?>
