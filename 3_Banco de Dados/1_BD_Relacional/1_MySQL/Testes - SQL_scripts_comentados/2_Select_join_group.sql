create database testes_bd_2;

use testes_bd_2;

create table tb_funcionarios(
	
    id_pessoa int not null auto_increment,
    nome varchar(50) not null,
    sexo enum('M', 'F') not null,
    PRIMARY KEY(id_pessoa)

) ENGINE = InnoDB;

ALTER TABLE tb_funcionarios CHANGE COLUMN id_pessoa id_funcionario int not null auto_increment;

insert into tb_funcionarios VALUES
(DEFAULT, 'Mario Mariano', 'M'),
(DEFAULT, 'Maria Madalena', 'F'),
(DEFAULT, 'Larissa Manoela', 'F'),
(DEFAULT, 'Lenita Souza', 'F'),
(DEFAULT, 'Mateus Silva', 'M'),
(DEFAULT, 'Felipe Schmidt', 'M'),
(DEFAULT, 'Marcelo Moreira', 'M');

select * from tb_funcionarios;
describe tb_funcionarios;

create table tb_vendas(
	
    id_produto_vendido int not null auto_increment,
    id_funcionario int not null,
    preco decimal(10,2) not null,
    dt_venda datetime default CURRENT_TIMESTAMP,
    primary key(id_produto_vendido),
    foreign key (id_funcionario) references tb_funcionarios (id_funcionario)
    
);

select * from tb_vendas;
describe tb_vendas;

insert into tb_vendas VALUES
(DEFAULT, 1, 300.00, DEFAULT),
(DEFAULT, 1, 320.00, DEFAULT),
(DEFAULT, 1, 480.99, DEFAULT),
(DEFAULT, 2, 360.45, DEFAULT),
(DEFAULT, 5, 250.00, DEFAULT),
(DEFAULT, 6, 190.45, DEFAULT),
(DEFAULT, 5, 20.00, DEFAULT),
(DEFAULT, 5, 30.00, DEFAULT),
(DEFAULT, 4, 15.15, DEFAULT),
(DEFAULT, 3, 80.00, DEFAULT),
(DEFAULT, 3, 85.99, DEFAULT);

/*********************************************************************** TESTES DE PESQUISA ***************************************************************************/

/** INNER JOIN OU JOIN **/
select * from tb_vendas INNER JOIN tb_funcionarios USING(id_funcionario);

/** LEFT JOIN**/
select * from tb_vendas LEFT JOIN tb_funcionarios USING(id_funcionario);

/** RIGHT JOIN **/
select * from tb_vendas RIGHT JOIN tb_funcionarios USING(id_funcionario);

/** PESQUISA PARA FILTRAR NOME E SEXO DOS FUNCIONÁRIOS QUE REALIZARAM VENDAS **/
select tb_funcionarios.nome, tb_funcionarios.sexo, tb_vendas.preco from tb_vendas INNER JOIN tb_funcionarios USING(id_funcionario);

/** PESQUISA PARA FILTRAR NOME, SEXO E PREÇO TOTAL DE VENDA DE CADA UM (PREÇO DOS PRODUTOS VENDIDOS SOMADOS), UTILIZANDO GROUP BY **/
select tb_funcionarios.nome, tb_funcionarios.sexo, SUM(tb_vendas.preco) from tb_vendas INNER JOIN tb_funcionarios USING(id_funcionario) GROUP BY tb_funcionarios.nome;

/** PESQUISA ANTERIOR ORDENADA POR VALOR **/
select tb_funcionarios.nome, tb_funcionarios.sexo, SUM(tb_vendas.preco) as Total_vendido from tb_vendas INNER JOIN tb_funcionarios USING(id_funcionario) GROUP BY tb_funcionarios.nome ORDER BY MAX(tb_vendas.preco);

/** PESQUISA ANTERIOR FILTRADA POR FAIXA DE VALOR - MENOR VALOR **/
select tb_funcionarios.nome, tb_funcionarios.sexo, MIN(tb_vendas.preco) from tb_vendas INNER JOIN tb_funcionarios USING(id_funcionario);

/** PESQUISA ANTERIOR FILTRADA POR FAIXA DE VALOR - MAIOR VALOR **/
select tb_funcionarios.nome, tb_funcionarios.sexo, MAX(tb_vendas.preco) from tb_vendas INNER JOIN tb_funcionarios USING(id_funcionario);

/** PESQUISA ANTERIOR AMPLIADA - ADIÇÃO DE CAMPOS DE PESQUISA */
select tb_funcionarios.nome,
 SUM(tb_vendas.preco) as total_vendido,
 MIN(tb_vendas.preco) as menor_valor, 
 MAX(tb_vendas.preco) as maior_valor,
 COUNT(*) as total_vendas from tb_vendas INNER JOIN tb_funcionarios USING(id_funcionario) GROUP BY tb_funcionarios.nome;
 
 /** CLAÚSULA HAVING - AUXILIAR DA GROUP BY - SELEÇÃO DE GRUPOS */
select tb_funcionarios.nome,
 SUM(tb_vendas.preco) as total_vendido,
 MIN(tb_vendas.preco) as menor_valor, 
 MAX(tb_vendas.preco) as maior_valor,
 COUNT(*) as total_vendas from tb_vendas INNER JOIN tb_funcionarios USING(id_funcionario) GROUP BY tb_funcionarios.nome HAVING SUM(tb_vendas.preco) > 500;






