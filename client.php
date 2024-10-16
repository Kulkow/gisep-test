<?php

$client = new SoapClient('http://localhost:8000/calculator.wsdl', [
    'location' => "http://localhost:8000/server.php"
]);
$result = $client->addNumbers(3, 5);
echo "The sum is: " . $result;
