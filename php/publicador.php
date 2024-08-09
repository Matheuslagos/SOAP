<?php
// Definindo o serviço e configurando o servidor SOAP

// Incluindo a definição da interface e implementação do serviço
include 'interface.php'; // Certifique-se de que o arquivo da interface está no mesmo diretório
include 'jogo.php';   // Certifique-se de que o arquivo da implementação está no mesmo diretório

// Configurações do servidor SOAP
$options = [
    'uri' => 'http://10.25.2.30:9876/soap',
    'trace' => 1
];

// Criando o servidor SOAP
$server = new SoapServer(null, $options);
$server->setClass('ServicoJogo');

// Inicia o servidor SOAP e trata as requisições
$server->handle();

echo "Serviço do jogo em execução...\n";
