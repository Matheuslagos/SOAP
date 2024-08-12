<?php

require_once 'Calculator.php';

$options = array('uri' => 'urn:Calculator');
$server = new SoapServer('calculator.wsdl', $options);
$server->setClass('Calculator');
$server->handle();

?>
