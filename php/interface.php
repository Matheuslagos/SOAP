<?php
// Definindo a interface do serviço
interface InterfaceJogo {
    /**
     * Escolhe um número e associa a um nome.
     *
     * @param int $numero O número a ser escolhido.
     * @param string $nome O nome associado ao número.
     * @return string Mensagem com o resultado da escolha.
     */
    public function escolherNumero($numero, $nome);

    /**
     * Verifica as posições atuais e retorna o status.
     *
     * @return string Status das posições.
     */
    public function verificarPosicoes();
}
?>
