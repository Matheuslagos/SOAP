<?php
// Definindo a interface do serviço
interface InterfaceJogo {
    public function escolherNumero($numero, $nome);
    public function verificarPosicoes();
}

// Implementando o serviço
class ServicoJogo implements InterfaceJogo {
    private $posicoes = [];

    public function escolherNumero($numero, $nome) {
        if ($numero < 1 || $numero > 5) {
            return "Número inválido. Escolha um número entre 1 e 5.";
        }

        if (array_key_exists($numero, $this->posicoes)) {
            $usuarioAnterior = $this->posicoes[$numero];
            $this->posicoes[$numero] = $nome;
            return "Você matou " . $usuarioAnterior;
        } else {
            $this->posicoes[$numero] = $nome;
            return "Número " . $numero . " escolhido com sucesso por " . $nome;
        }
    }

    public function verificarPosicoes() {
        $status = "";
        for ($i = 1; $i <= 5; $i++) {
            if (array_key_exists($i, $this->posicoes)) {
                $status .= "Posição " . $i . ": " . $this->posicoes[$i] . "\n";
            } else {
                $status .= "Posição " . $i . ": Vazia\n";
            }
        }
        return $status;
    }
}

// Criando o servidor SOAP
$options = [
    'uri' => 'http://localhost/soap',
    'trace' => 1
];

$server = new SoapServer(null, $options);
$server->setClass('ServicoJogo');
$server->handle();
