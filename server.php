<?php


class Calculator {
    public function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }
}

$options = array('uri' => 'urn:Calculator');
$server = new SoapServer('calculator.wsdl', $options);
$server->setClass('Calculator');
$server->handle();