<?php
    require_once 'menu.php';
    require_once 'config.php';

    $clientes = preencheArray();
?>

<div class="container principal">
<div class="col-md-offset-2 col-md-8">

<table class="table">
    <thead>
    <tr>
        <td colspan="2" class="text-center">
            <a href="?crescente=true" class="btn btn-primary" name="enviar"
                <?php if (!isset($_GET['decrescente'])) echo "disabled" ?>>Ordem Crescente</a>
            <a href="?decrescente=true" class="btn btn-warning"
                <?php if (isset($_GET['decrescente'])) echo "disabled" ?>>Ordem Descrescente</a>
        </td>
    </tr>
    <tr>
        <td class="col-md-6">Nome</td>
        <td class="col-md-6">Tipo Pessoa</td>
        <td  class="col-md-2">Ação</td>
    </tr>
    </thead>
    <tbody>

<?php
    if (!isset($_GET['decrescente'])){
        ksort($clientes);
        $ordem = "&crescente=true";
    } elseif (isset($_GET['decrescente'])){
        krsort($clientes);
        $ordem = "&decrescente=true";
    }
    $i = 0;
    foreach ($clientes as $cliente){
        echo "<tr>";

        if (isset($_GET['id']) && $_GET['id']==$i){
            echo "<td>";
            $cliente->toString();
            echo "</td>";
            if ($cliente instanceof AG\Cliente\Types\ClienteFisica){
                echo "<td>Pessoa Física</td>";
            } elseif ($cliente instanceof AG\Cliente\Types\ClienteJuridica) {
                echo "<td>Pessoa Jurídica</td>";
            }
            echo '<td><a class="btn btn-primary" href="?id=-1'.$ordem.'">'."Esconder</a>";
        } else {
            echo "<td>".$cliente->getNome()."</td>";
            if ($cliente instanceof AG\Cliente\Types\ClienteFisica){
                echo "<td>Pessoa Física</td>";
            } elseif ($cliente instanceof AG\Cliente\Types\ClienteJuridica) {
                echo "<td>Pessoa Jurídica</td>";
            }
            echo '<td><a class="btn btn-primary" href="?id='.$i.$ordem.'">'."Detalhes</a>";
        }

        echo "</tr>";
        $i++;
    }
?>
</table>
</div>
</div>
<?php
    require_once 'footer.php';
?>
