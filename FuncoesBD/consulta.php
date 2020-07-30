<?php
#conexão com banco de Dados MYSQL
# mysqli
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

echo '<table border=1>
        <th>id</th>
        <th>Nome</th>
        <th>Data de Nascimeno</th>
     </tr>';
$consulta = mysqli_query($conexao, "SELECT * FROM ALUNOS");
while($linha = mysqli_fetch_array($consulta)){
    echo '<tr><td>'.$linha['id_aluno'];
    echo '</td><td>'.$linha['nome_aluno'];
    echo '</td><td>'.$linha['data_nascimento'].'</td></tr>';
}
echo '</table>';

?>