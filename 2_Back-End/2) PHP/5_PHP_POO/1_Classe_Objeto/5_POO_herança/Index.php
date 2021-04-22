<html>
    <head>
        <meta charset="UTF-8">
        <title> Herança </title>
    </head>
    <body>
        <h1> Herança </h1>
        
        <pre> <!-- Tag de formatação -->
        <?php
        
        require_once 'Pessoa_superclasse.php';
        require_once 'Aluno_classe.php';
        require_once 'Professor_classe.php';
        require_once 'Funcionario_classe.php';
        
        /* Todos os objetos irão conter seus atributos e métodos próprios, mais os herdados da superclasse Pessoa*/
        $pessoa = new Pessoa_superclasse();
        $aluno = new Aluno_classe("20181LC0348", "Computação");
        $professor = new Professor_classe("Física", 5.500);
        $funcionario = new Funcionario_classe("Limpeza", true);
        
        $aluno->setNome("Valdemir");
        $aluno->setIdade(12);
        $aluno->setSexo("Masculino");
        print_r($aluno);
        
        $aluno->fazer_aniversario();
        print_r($aluno);
        
        
        
        
        
            
       
        
        ?>
        </pre>
         
    </body>
</html>