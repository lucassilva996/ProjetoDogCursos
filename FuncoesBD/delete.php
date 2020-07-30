<?php
#conexão com banco de Dados MYSQL
# mysqli
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

/*Exclusão com comando OR*/
if(mysqli_query($conexao, "DELETE FROM ALUNOS WHERE ID_ALUNO = 7 or ID_ALUNO = 8")){
    echo 'Deletado com sucesso!<br>';
}
else{
    echo 'Falha ao deletar os dados!<br>';
}
/* --- EXCLUSÃO NORMAL
if(mysqli_query($conexao, "DELETE FROM ALUNOS WHERE ID_ALUNO = 6")){
    echo 'Deletado com sucesso!';
}
else{
    echo 'Falha ao deletar os dados!';
}*/

?>
