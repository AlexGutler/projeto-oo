<?php

namespace AG\Cliente\Types;
use AG\Cliente\ClienteAbstract as ClienteAbstract;
use AG\Cliente\Types\ClienteDadosInterface as ClienteDadosInterface;

class ClienteFisica extends ClienteAbstract implements ClienteDadosInterface
{
    private $cpf;
    private $rg;
    private $data_nascimento;
} 