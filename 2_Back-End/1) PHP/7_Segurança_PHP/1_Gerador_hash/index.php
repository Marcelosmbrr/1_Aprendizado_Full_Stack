<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="#" method= "GET">
        <input type="text" name = "input_senha" placeholder= "Senha"><br>
        <div class = "form_buttons">
            <input type="submit" value = "Gerar Hash" name = "btn_encode">
        </div>
    </form>

    <?php
        
        if(isset($_GET["input_senha"]) && !empty($_GET["input_senha"])){
            $senha = $_GET["input_senha"]; //Recebe o valor posto no input
            $senha_hash = password_hash($senha, PASSWORD_BCRYPT); //Recebe o valor encriptografado
            echo "Hash da senha:". $senha_hash . "<br>"; //Imprime a criptografia
            echo "<strong>Anote a senha e o valor de hash gerado</strong>";

        }else if(empty($_GET["input_senha"])){
            echo "Digite um valor para gerar um hash<br>";
            echo "<strong>Anote a senha e o hash</strong>";
        }   
    ?>

    <hr>
    
    <h2>VERIFICAR COMPATIBILIDADE</h2>
    <form action="#" method= "GET">
        <input type="text" name = "input_senha_t" placeholder= "Senha"><br>
        <input type="text" name = "input_hash_t" placeholder= "Hash"><br>
        <div class = "form_buttons">
            <input type="submit" value = "Verificar" name = "btn_verificar">
        </div>
    </form>

    <?php
        
        if(isset($_GET["input_senha_t"]) && !empty($_GET["input_senha_t"]) && isset($_GET["input_hash_t"]) && !empty($_GET["input_hash_t"])){
            $senha_t = $_GET["input_senha_t"]; //Recebe o valor posto no input
            $hash_t = $_GET["input_hash_t"];
            if(password_verify($senha_t, $hash_t)){
                echo "Compatíveis";
            }else{
                echo "Incompatíveis";
            }
        }
 
    ?>

</body>
</html>