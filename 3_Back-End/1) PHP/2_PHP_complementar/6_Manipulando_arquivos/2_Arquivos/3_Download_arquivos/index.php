<?php

    //DOWNLOAD DE ARQUIVOS

    //Pode ser um link ou um endereço de um diretório local
    $link = "https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/368px-Google_2015_logo.svg.png";

    //Recebe o arquivo em formato bruto, ilegível //Em formato de string
    $content = file_get_contents($link);

    //O algoritmo parse é um interpretador que lê, compreende e converte uma estrutura em outra
    //O algoritmo parse é empregado para diversas finalidades e em diversas linguagens
    //Neste caso interpreta uma URL e retorna os seus componentes, em forma de array
    //Ver em: https://www.php.net/manual/pt_BR/function.parse-url.php
    $parse = parse_url($link);

    //Para verificar o array associativo que contém as informações do arquivo recuperado
    //var_dump($parse);

    //Retorna o componente do nome final do caminho
    //Ver em: https://www.php.net/manual/en/function.basename.php
    $basename = basename($parse["path"]);

    echo "<br>";

    //Por ser uma imagem, aqui o valor será o nome final, de caminho, e sua extensão (como png, se for o caso)
    echo "Basename: ".$basename;

    //A função fopen() abre um arquivo, se existir, ou cria um no caminho especificado
    //fopen("caminho, nome e extensão do arquivo", "modo da função") //O modo é a forma com que o arquivo será tratado
    //Neste caso, será criado um arquivo de imagem com o "nome.extensão" contido na variável $basename
    $file = fopen($basename, "w+");

    //Essa função serve para escrever o valor do arquivo //Se fosse um arquivo.txt poderia ser usada para escrever texto, por exemplo
    //Mas, por ser uma imagem, e para que se torne tal, no arquivo será escrito o código bruto contido em $content que forma a estrutura do arquivo
    fwrite($file, $content);

    //Fim da operação de manipulação do arquivo
    fclose($file);

?>

<!-- IMAGEM BAIXADA PARA O DIRETÓRIO E RENDERIZADA PELO SCRIPT ABAIXO -->
<img src="<?php echo $basename ?>" alt="">