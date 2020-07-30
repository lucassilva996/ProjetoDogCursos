<?php

include 'db.php';
$nome_aluno = $_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];

$query = "INSERT INTO ALUNOS(NOME_ALUNO, DATA_NASCIMENTO) 
            VALUES('$nome_aluno','$data_nascimento')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');