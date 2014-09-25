<?php
require_once 'ClienteAbstract.php';

//function preencheArray(){
//    $clientes = array();
//    for ($i = 0; $i < 10; $i++){
//        $objeto = new Cliente();
//        $objeto
//            ->setNome("Cliente ".$i)
//            ->setCpf(mt_rand())
//            ->setRg(mt_rand())
//            ->setDataNascimento(mt_rand(1,31)."/".mt_rand(1,12)."/".mt_rand(1940,2014))
//            ->setCelular(mt_rand())
//            ->setFixo(mt_rand())
//            ->setEmail("cliente".$i."@email.com.br")
//            ->setCep(mt_rand())
//            ->setEndereco("Rua ".$i.", ".mt_rand(1,10000))
//            ->setCidade("Santa Teresa")
//            ->setEstado("ES")
//            ->setBairro("Centro");
//
//        $clientes[] = $objeto;
//    }
//
//    return $clientes;
//}
function preencheArray(){
    $clientes = array();

    $objeto = new Cliente();
    $objeto
        ->setNome("Alex Gutler")
        ->setCpf("15878896501")
        ->setRg("9856124")
        ->setDataNascimento("15/03/1992")
        ->setCelular("999954189")
        ->setFixo("32592200")
        ->setEmail("alex@email.com.br")
        ->setCep("29650000")
        ->setEndereco("Rua Jose, 252")
        ->setCidade("Santa Teresa")
        ->setEstado("ES")
        ->setBairro("Centro");

    $clientes[] = $objeto;

    $objeto = new Cliente();
    $objeto
        ->setNome("Renan Gutler")
        ->setCpf("13556687409")
        ->setRg("3074131")
        ->setDataNascimento("12/09/1993")
        ->setCelular("998954389")
        ->setFixo("32592222")
        ->setEmail("renan@email.com.br")
        ->setCep("29650000")
        ->setEndereco("Rua Anchieta, 202")
        ->setCidade("Santa Teresa")
        ->setEstado("ES")
        ->setBairro("Centro");

    $clientes[] = $objeto;

    $objeto = new Cliente();
    $objeto
        ->setNome("Henrique Gutler")
        ->setCpf("13535526708")
        ->setRg("3074545")
        ->setDataNascimento("14/01/2004")
        ->setCelular("998969700")
        ->setFixo("32592225")
        ->setEmail("rick@email.com.br")
        ->setCep("29650000")
        ->setEndereco("Rua Primeiro de Abril, 666")
        ->setCidade("Santa Teresa")
        ->setEstado("ES")
        ->setBairro("Centro");

    $clientes[] = $objeto;

    $objeto = new Cliente();
    $objeto
        ->setNome("Adeumar Gutler")
        ->setCpf("14534524709")
        ->setRg("9854165")
        ->setDataNascimento("14/03/1964")
        ->setCelular("997562114")
        ->setFixo("32592211")
        ->setEmail("adeumar@email.com.br")
        ->setCep("29650000")
        ->setEndereco("Rua Antonio, 266")
        ->setCidade("Santa Teresa")
        ->setEstado("ES")
        ->setBairro("Vila Nova");

    $clientes[] = $objeto;

    $objeto = new Cliente();
    $objeto
        ->setNome("Neuza Hoffmann")
        ->setCpf("13245678909")
        ->setRg("3694561")
        ->setDataNascimento("26/10/1968")
        ->setCelular("99925468")
        ->setFixo("32592214")
        ->setEmail("neuza@email.com.br")
        ->setCep("29650000")
        ->setEndereco("Rua Geronimo, 166")
        ->setCidade("Santa Teresa")
        ->setEstado("ES")
        ->setBairro("Eco");

    $clientes[] = $objeto;

    $objeto = new Cliente();
    $objeto
        ->setNome("Antonio Carlos")
        ->setCpf("14565525478")
        ->setRg("3067414")
        ->setDataNascimento("01/03/1992")
        ->setCelular("997979797")
        ->setFixo("32592210")
        ->setEmail("antonio@email.com.br")
        ->setCep("29650000")
        ->setEndereco("Rua Virgilio, 666")
        ->setCidade("Santa Teresa")
        ->setEstado("ES")
        ->setBairro("Alvorada");

    $clientes[] = $objeto;

    $objeto = new Cliente();
    $objeto
        ->setNome("Tiago Oliveira")
        ->setCpf("16625898746")
        ->setRg("3056123")
        ->setDataNascimento("11/10/1989")
        ->setCelular("999555148")
        ->setFixo("32592201")
        ->setEmail("tiago@email.com.br")
        ->setCep("29650000")
        ->setEndereco("Rua Bellumat, 147")
        ->setCidade("Santa Teresa")
        ->setEstado("ES")
        ->setBairro("Alvorada");

    $clientes[] = $objeto;

    $objeto = new Cliente();
    $objeto
        ->setNome("Maria José")
        ->setCpf("13545526708")
        ->setRg("3785014")
        ->setDataNascimento("11/09/1974")
        ->setCelular("989898989")
        ->setFixo("32590101")
        ->setEmail("maria@email.com.br")
        ->setCep("29650000")
        ->setEndereco("Rua Cavalcante, 888")
        ->setCidade("Santa Teresa")
        ->setEstado("ES")
        ->setBairro("Jardim da Montanha");

    $clientes[] = $objeto;

    $objeto = new Cliente();
    $objeto
        ->setNome("Simone Sousa")
        ->setCpf("14535528907")
        ->setRg("3321125")
        ->setDataNascimento("27/06/1996")
        ->setCelular("996562512")
        ->setFixo("32592119")
        ->setEmail("simone@email.com.br")
        ->setCep("29650000")
        ->setEndereco("Rua Elite, 17")
        ->setCidade("Santa Teresa")
        ->setEstado("ES")
        ->setBairro("Centro");

    $clientes[] = $objeto;

    $objeto = new Cliente();
    $objeto
        ->setNome("Marina Mara")
        ->setCpf("14569987409")
        ->setRg("7896522")
        ->setDataNascimento("10/10/1986")
        ->setCelular("999739945")
        ->setFixo("32591929")
        ->setEmail("mm@email.com.br")
        ->setCep("29650000")
        ->setEndereco("Rua Roatti, 1000")
        ->setCidade("Santa Teresa")
        ->setEstado("ES")
        ->setBairro("São Lourenço");

    $clientes[] = $objeto;

    return $clientes;
}
?>
