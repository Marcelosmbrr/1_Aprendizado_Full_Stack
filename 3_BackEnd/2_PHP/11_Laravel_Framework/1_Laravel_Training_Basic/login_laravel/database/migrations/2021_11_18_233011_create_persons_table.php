<?php

/*

- Essa é a migration da tabela Persons 
- Foi criada com o comando php artisan make:migration [create]_persons_table

- Dependendo do nome da migration criada o seu código irá mudar
- O nome create_tableName_table irá criar uma Migration para criação e deleção de tabela
- O nome add_columnName_to_tablename_table irá criar uma Migration para adição 
- O nome update_columnName_to_tablename_table irá criar uma Migration para renomear colunas da tabela
- O nome remove_columnName_from_tablename_table irá criar uma Migration para remover colunas de uma tabela
- O nome drop_tableName_table irá criar uma Migration para remover tabelas de um banco de dados

- O Laravel possui um recurso chamado Migrations que permite gerenciar as tabelas do banco de dados
- Os arquivos de migrations (estrutura das tabelas) ficam em database/migrations/

- Em uma classe de Migration existe basicamente dois métodos, o up() e o down()
- O método up() serve para definir a estrutura da tabela
- O método down() serve para definir como a tabela será deletada


*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string("name", 200)->nullable(false);
            $table->enum('sex', ['masc', 'fem'])->nullable(true)->default(null);
            $table->string("email", 200)->nullable(false);
            $table->string("cpf", 11)->nullable(false);
            $table->string("cep", 8)->nullable(false);
            $table->string("username", 50)->nullable(false);
            $table->string("password", 200)->nullable(false);
            $table->ipAddress('person_ip')->nullable(false);
            $table->enum("access", [1, 2, 3])->nullable(false)->default(3);
            $table->string("code", 5)->nullable(true)->default(null);
            $table->boolean("status")->nullable(false)->default(false);
            $table->timestamps();
            $table->unique(['cpf', 'username']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
