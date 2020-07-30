<h1>Inserir nova matrícula</h1>
<br><br>
<form method="post" action="processa_matricula.php"> 
    <p class="badge badge-secondary">Selecione o aluno</p>
    <select class="form-control" name="escolha_aluno">
        <option>Selecione um Aluno</option>
        <?php
        while($linha = mysqli_fetch_array($consulta_alunos)){
            echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
           // echo '<td>'.$linha['data_nascimento'].'</td></tr>';
        }
        ?>
    </select>
    <br><br>
    <p class="badge badge-secondary">Selecione o curso</p>
    <select class="form-control" name="escolha_curso">    
    <option>Selecione um Curso</option>
<?php 
while($linha = mysqli_fetch_array($consulta_cursos)){
    echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
           // echo '<td>'.$linha['data_nascimento'].'</td></tr>';
        }

        ?>
    </select>
    <br><br>
    <input class="btn btn-success"  type="submit" value="Matricular aluno no curso">       
</form>