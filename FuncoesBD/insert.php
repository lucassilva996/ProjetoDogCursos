<?php
#conexão com banco de Dados MYSQL
# mysqli
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

#criando tabelas usando php
#tabela cursos(nome do curso, carga horaria)
$query = "CREATE TABLE CURSOS(id_curso int not null auto_increment,
nome_curso varchar(255) not null, carga_horaria int not null,
primary key(id_curso)
)";
$executar = mysqli_query($conexao, $query);

#tabela alunos(nome do aluno, data de nascimento)
$query = "CREATE TABLE ALUNOS(id_aluno int not null auto_increment,
nome_aluno varchar(255) not null, data_nascimento varchar(255) not null,
primary key(id_aluno)
)";
$executar = mysqli_query($conexao, $query);

#tabela alunos_cursos (aluno,curso)
$query = "CREATE TABLE ALUNOS_CURSOS(id_aluno_curso int not null auto_increment,
id_aluno int not null, id_curso int not null,
primary key(id_aluno_curso)
)";
$executar = mysqli_query($conexao, $query);

# Inserir dados nas tabelas ***********

$query = "INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES('Lucas', '19-11-1996')";
$executar = mysqli_query($conexao, $query);
$query = "INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES('Daniele', '16-04-1997')";
$executar = mysqli_query($conexao, $query);

$query = "INSERT INTO CURSOS(nome_curso, carga_horaria) VALUES('PHP E MYSQL', 10)";
$executar = mysqli_query($conexao, $query);

#Alunos Cursos
$query = "INSERT INTO ALUNOS_CURSOS(id_aluno, id_curso) VALUES (6,1)";
$executar = mysqli_query($conexao, $query);

?>
