create database testes_banco;

use testes_banco;

/********************************** CRIANDO AS TABELAS E AS PREENCHENDO - CREATE (DDL) + INSERT (DML) ***************************************************************************************/
CREATE TABLE cursos(
	
    id_curso int not null auto_increment,
    nome varchar(30) not null,
    descricao text,
    total_aulas int unsigned not null,
    ano year DEFAULT '2021',
    preco decimal(2, 2) not null,
    PRIMARY KEY(id_curso)
    
) ENGINE = InnoDB; /* Suporta transações - DTL */

select * from cursos;

ALTER TABLE cursos MODIFY COLUMN preco decimal(10,2); 

INSERT INTO cursos (nome, descricao, total_aulas, ano, preco) VALUES 
('Curso de HTML5', 'Do básico ao avançado com a linguagem declarativa HTML5', 20, '2015', 25),
('Curso de CSS3', 'Do básico ao avançado com a linguagem de estilização CSS3', 30, '2020', 29),
('Curso de Javascript', 'Compreenda a linguagem pura e também o seu uso no front-end de aplicações Web', 40, '2020', 35),
('Curso de Bootstrap', 'Aprenda a utilizar o melhor framework para agilizar seus projetos com HTML, CSS e JS', 15, '2019', 22);

select * from cursos;

INSERT INTO cursos (nome, descricao, total_aulas, ano, preco) VALUES 
('Curso de PHP8', 'Do básico ao avançado com a linguagem de programação back-end mais popular do mercado', 50, '2021', 50);

select * from cursos;

CREATE TABLE clientes(

    id int not null auto_increment,
    id_curso int,
    nome varchar(50) not null,
    sexo enum('M', 'F') not null,
    dt_nascimento date not null,
    dt_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id),
    FOREIGN KEY(id_curso) REFERENCES cursos(id_curso)
    
) ENGINE = InnoDB; /* Suporta transações - DTL */

INSERT INTO clientes (id_curso, nome, sexo, dt_nascimento, dt_cadastro) VALUES 
(2, 'Roberto Costa', 'M', '1997-05-01', DEFAULT),
(1, 'Mario da Silva', 'M', '1968-12-20', DEFAULT),
(2, 'Maria Cortes', 'F', '1990-10-10', DEFAULT),
(3, 'Marcelo de Souza Moreira', 'M', '1998-05-12', DEFAULT),
(3, 'Fernanda de Souza Moreira', 'F', '2001-10-18', DEFAULT),
(4, 'Leticia Elert', 'F', '1979-08-17', DEFAULT),
(4, 'Larissa Manoela', 'F', '2003-09-01', DEFAULT),
(4, 'Felipe da Silva', 'M', '1963-11-11', DEFAULT),
(4, 'Manoela Ribeiro', 'F', '1989-02-01', DEFAULT);

INSERT INTO clientes (id_curso, nome, sexo, dt_nascimento, dt_cadastro) VALUES 
(null, 'Marcele Pedra', 'F', '1993-05-01', DEFAULT),
(null, 'Adir Silva', 'M', '1968-10-12', DEFAULT);

INSERT INTO clientes (id_curso, nome, sexo, dt_nascimento, dt_cadastro) VALUES 
(2, 'Luiz', 'M', '1998-05-06', DEFAULT),
(3, 'Luis', 'M', '1997-05-01', DEFAULT);

select * from clientes;
describe clientes;

/******************************************************************* TESTES SELECT (DQL) ***************************************************************************************/

/** TESTES COM WHERE*/
select nome, curso as curso_inscrito from clientes;
select nome from clientes WHERE id = 2;
select * from clientes WHERE nome LIKE'M%'; /* nomes que começam pela letra M*/
select * from clientes WHERE nome LIKE '__r%' AND sexo = 'M'; /* nomes cuja terceira letra é o r, e as posterior quaisquer */
select * from clientes WHERE dt_nascimento > '2002-01-01'; /* Ver menores de idade */
select * from clientes WHERE dt_nascimento < '2000-01-01' AND sexo = 'M'; /*Maiores de idade do sexo masculino*/
select * from clientes WHERE sexo = 'F' or sexo = 'M'; /* Realiza a procura de todos os registros, validando a condição um por um*/
select * from clientes where dt_nascimento NOT BETWEEN '2000-01-01' AND '1980-01-01';
select * from clientes where SOUNDEX(nome) = SOUNDEX('Luis'); /* Compara pelo som da palavra, mas a primeira letra deve ser necessariamente igual */
select * from clientes where id_curso IS NULL; 

/**TESTES COM JOIN*/
/* Este comando, JOIN, permite consultar dados de mais de uma tabela quando existe algum relacionamento, isto é, registros com dados de outra "tabela estrangeira" */
/* A clausula ON é obrigatória por via de regra, pois estabelece a especificação relacional */
select clientes.nome, clientes.curso as curso_preferido, cursos.nome, cursos.ano from clientes join cursos; /* Sem ON */
select clientes.nome, clientes.id_curso as curso_preferido, cursos.nome, cursos.ano from clientes join cursos on cursos.id_curso = clientes.id_curso; /* Com ON */
/* Se a PK e a FK tiverem o mesmo nome, é possível usar USING, ao invés de ON, para rapidamente encontrar os registros que possuem valor no campo FK - ou seja, relação com a outra tabela */
select clientes.id, clientes.nome, clientes.sexo, clientes.id_curso as curso_inscrito from clientes join cursos USING(id_curso) ORDER BY clientes.id; 
select clientes.nome, clientes.id_curso as curso_preferido, cursos.nome, cursos.ano from clientes left join cursos on cursos.id_curso = clientes.id_curso;

/**TESTES COM ORBDER BY E LIMIT*/
select * from clientes order by nome; /* em ordem ASC por padrão */
select * from clientes order by nome DESC; /* em ordem decrescente DESC*/
select * from clientes order by dt_nascimento;
select * from clientes order by nome limit 0, 3; /* Limite impõe um limite quantitativo de retorno de registros */ /* Neste caso, seriam os três primeiros a partir do 0*/
select * from clientes WHERE MONTH(dt_nascimento) = 5 order by nome limit 3;

/******************************************************************* TESTES UPDATE (DML), DELETE (DML) E TRUNCATE *****************************************************************/

/* Cuidado com o filtro where */
UPDATE clientes SET nome = 'Tatiane Pedra' WHERE id = 2;
UPDATE clientes SET nome = 'Elon Musk', dt_nascimento = '1966-08-01' WHERE id = 1;
DELETE from clientes WHERE id = 2; /* Sem where, toda a tabela é apagada (mas não formatada) */ 
TRUNCATE nome_da_tabela; /* A tabela é formatada */

/******************************************************************* TESTE COM TRANSACTION (DTL) ***************************************************************************************/

START TRANSACTION; /* Inicia uma transação segura*/

delete from clientes; /* exclui todos os registros */
select * from clientes;

ROLLBACK; /* Nega a transação*/ /* recupera os registros excluídos*/
COMMIT; /* Confirma a transação, ou seja, a exclusão dos registros*/

/******************************************************************* TESTE COM SUBQUERY ***************************************************************************************/

/* Uma query procura um dado retornado por outra */ /* Não existe limite*/
/* A ordem é da direita para esquerda*/
select nome from clientes WHERE id IN(select id from clientes where nome like 'A%');















