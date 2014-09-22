<?php
require_once 'Cliente.php';

function preencheArray(){
    $clientes = array();
    for ($i = 0; $i < 10; $i++){
        $objeto = new Cliente();
        $objeto
            ->setNome("Cliente ".$i)
            ->setCpf(mt_rand())
            ->setRg(mt_rand())
            ->setDataNascimento(mt_rand(1,31)."/".mt_rand(1,12)."/".mt_rand(1940,2014))
            ->setCelular(mt_rand())
            ->setFixo(mt_rand())
            ->setEmail("cliente".$i."@email.com.br")
            ->setCep(mt_rand())
            ->setEndereco("Rua ".$i.", ".mt_rand(1,10000))
            ->setCidade("Santa Teresa")
            ->setEstado("ES")
            ->setBairro("Centro");

        $clientes[] = $objeto;
    }

    return $clientes;
}