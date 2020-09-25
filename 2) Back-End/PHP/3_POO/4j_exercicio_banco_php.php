<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <pre> <!-- Tag de formatação -->
        <?php
        
        $tipo_conta = isset($_GET["tipo_conta"]) ? $_GET["tipo_conta"]: null;
        $cpf_cliente = isset($_GET["cpf_cliente"]) ? $_GET["cpf_cliente"]: null;
        $nome_cliente = isset($_GET["nome_cliente"]) ? $_GET["nome_cliente"]: null;
        
        require_once 'Conta_bancaria.php';
        if($tipo_conta != null && $cpf_cliente != null && $nome_cliente != null){
            $conta1 = new Conta_bancaria($tipo_conta, $cpf_cliente, $nome_cliente, "não definida", null, true);
        }
        print_r($conta1);
        $conta1->setNum_conta("450-12");
        echo "<p> O número da conta foi definido e é {$conta1->getNum_conta()}.</p>";
        if($tipo_conta == "CC" || $tipo_conta == "cc"){
            $conta1->setSaldo(100);
        }
        else if($tipoconta == "CP" || $tipoconta == "cp"){
            $conta1->setSaldo(150);
        }
        echo "<p> Por ser um conta do tipo {$tipo_conta} o saldo inicial padrão é de {$conta1->getSaldo()}.</p>";
        echo "<p> Senhor(a) {$conta1->getDono()}, veja abaixo os dados atualizados de sua conta bancária: </p>";
        print_r($conta1);
        
        
        
        
        
        
        
        ?>
        </pre>
    </body>
</html>
