<?php
require_once 'Cliente.php';
require_once 'config.php';

$clientes = preencheArray();
echo "NORMAL: <br>";
print_r($clientes);

echo "<br><br>";

krsort($clientes);

echo "Decrescente: <br>";
print_r($clientes);

echo "<br><br>";

$i = 0;
foreach ($clientes as $cliente ){
    echo $cliente->getNome()."<br>";
}