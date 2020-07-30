<?php
#conexão com banco de Dados MYSQL
# mysqli
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

if (mysqli_query($conexao, "UPDATE ALUNOS SET NOME_ALUNO = 'Lucas da Silva' WHERE id_aluno = 1")){
    echo 'Alterado com sucesso!<br>';
}
if (mysqli_query($conexao, "UPDATE ALUNOS SET NOME_ALUNO = 'Daniele Lima Ribeiro' WHERE id_aluno = 3")){
    echo 'Alterado com sucesso!<br>';
}


?>
