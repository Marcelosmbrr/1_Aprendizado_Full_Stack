<html>
    <head>
        <meta charset="UTF-8">
        <title> Livro </title>
    </head>
    <body>
        <h1> Livro </h1>
        
        <pre> <!-- Tag de formatação -->
        <?php
        
        /* Poderia haver uma recuperação de dados via GET em laços, como
        for($con = 0; $con <= 2; $con ++){
          $nome[$con] = isset($_GET["nome_form"]) ? $_GET["nome_form] : null;
          $idade[$con] = isset($_GET["idade_form"]) ? $_GET["idade_form] : null;
          $sexo[$con] = isset($_GET["sexo_form"]) ? $_GET["sexo_form] : null;
         }
         */
        
        require_once 'Pessoa.php';
        require_once 'Livro.php';
     
        
        for($cont = 0; $cont <= 2; $cont ++){
            if($cont == 0){
                $pessoa[$cont] = new Pessoa("Maria", 22, "Feminino");
                $livro[$cont] = new Livro("Política", "Aristóteles", 120, 0, false, $pessoa[$cont]->getNome());
                echo "<h3>Laço 0:</h3>";
                print_r($pessoa[$cont]);
                print_r($livro[$cont]);
                }
            else if($cont == 1){
                $pessoa[$cont] = new Pessoa("Steve Rogers", 32, "Masculino");
                $livro[$cont] = new Livro("Capitão América - Comic Book", "Marvel", 220, 3, true, $pessoa[$cont]->getNome());
                echo "<h3>Laço 1:</h3>";
                print_r($pessoa[$cont]);
                print_r($livro[$cont]);
            }
            else if($cont == 2){
                $pessoa[$cont] = new Pessoa("Bruce Wayne", 47, "Masculino");
                $livro[$cont] = new Livro("O Príncipe", "Maquiável", 210, 12, false, $pessoa[$cont]->getNome());
                echo "<h3>Laço 2:</h3>";
                print_r($pessoa[$cont]);
                print_r($livro[$cont]);
            }
        }
        
        for($cont = 0; $cont <= 2; $cont ++ ){
            echo "<h2>Detalhes do livro da pessoa {$pessoa[$cont]->getNome()}:</h2>";
            $livro[$cont]->detalhes();
        }
        
        /* A partir daqui se pode chamar os métodos da interface, por meio de laços, que irão alterar os valores dos atributos dos objetos Livro*/
        
        
            
       
        
        ?>
        </pre>
         
    </body>
</html>