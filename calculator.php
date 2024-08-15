<?php
// Calculator.php

// Define a interface com o método que será exposto pelo servidor SOAP
interface CalculatorInterface {
    public function add($a, $b);
}

// Implementa a classe Calculator que define o método add
class Calculator implements CalculatorInterface {
    public function add($a, $b) {
        return $a + $b;
    }
}
?>
