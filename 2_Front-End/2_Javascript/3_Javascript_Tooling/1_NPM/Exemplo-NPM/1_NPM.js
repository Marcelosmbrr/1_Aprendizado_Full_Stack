//NODE PACKAGE MANAGER
//https://www.npmjs.com/
//https://www.hostinger.com.br/tutoriais/o-que-e-npm
//https://dicasdejavascript.com.br/como-instalar-um-pacote-com-npm/

// ======================= O QUE É NPM =================================== //

//NPM é um gerenciador de pacotes para a linguagem de programação JavaScript
//O NPM está para o JS, assim como o composer está para o PHP 
//O NPM é uma ferramenta de linha de comando que necessita do NodeJS
//Assim como o composer, o NPM gera um arquivo de "declaração" do projeto em questão, cujo nome é package.json

// ======================= COMANDO NPM INIT =================================== //

//Primeiro deve ser executado o comando "NPM init -y"
//Este comando é igual ao comando "NPM init", mas com o adicional de que é gerado e preenchido automaticamente

// ======================= ARQUIVO PACKAGE.JSON =================================== //

//Como dito previamente, este arquivo é a declaração gerada do projeto existente no diretório 
//Este arquivo contém metadados sobre a aplicação, como seu nome, versão, descrição, licença, e outros dados
//Também contém a declaração das dependências locais ou externas do projeto

// ======================= COMO INCLUIR DEPENDÊNCIAS NO PROJETO COM VERSÃO MAIS RECENTE =================================== //

//Em NodeJS, quando você está utilizando algum módulo que não faz parte do core, você precisa instalá-lo com o comando "npm install <nome do pacote>" 
//Na verdade existem dois comandos possíveis: o "npm install <nome do pacote>" e o "npm install <nome do pacote> -E" 
//Ambos os comandos irão instalar a versão mais recente, mas o primeiro irá instalar com o mecanismo de atualização automática "^version", e o segundo não, "version"

// ======================= COMO INCLUIR DEPENDÊNCIAS NO PROJETO COM VERSÃO ESPECIFICA =================================== //

//Para incluir uma dependência com uma versão específica basta utilizar o comando "NPM install "<nome do pacote>@<versão>"
//Neste caso também é possível utilizar o comando -E para que a versão instalada não seja atualizável

// ======================= ATRIBUTO DEPENDENCIES E PASTA NODE-MODULES =================================== //

//Quando executado o comando de instalação, o NPM irá gerar um novo atributo "dependencies: { }" no packjson
//O atributo "dependencies" terá novos pares chave-valor, em que a chave será o nome da dependência, e o valor a sua versão 
//Além disso, será gerada uma pasta de nome "node-modules", onde serão alocados todos os recursos das dependências instaladas

// ======================= ATRIBUTO DEVDEPENDENCIES =================================== //

//"Dependencies" são todos os programas necessários para a aplicação funcionar
//"devDependencies" são todos os programas necessários para ambiente de "dev", desenvolvimento, da aplicação, como testes unitários, ferramentas de debug, etc
//Para instalar uma "devDependencie" basta utilizar o comando "NPM install <nome do pacote> --save-dev"

// ======================= ATUALIZAR O NPM DO PROJETO =================================== //

//Para atualizar a declaração do projeto, se houverem quaisquer alterações, basta utilizar o comando "NPM update"

// ======================= DESINSTALAR DEPENDÊNCIA =================================== //

//Para desinstalar uma dependência, basta utilizar o comando "NPM unninstall <nome do pacote>""
