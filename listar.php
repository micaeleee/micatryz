<?php
    try {
        require('conexao.php');
        $consulta = $pdo->prepare("SELECT aluno.nome,aluno.sobrenome,  aluno.cpf, FROM aluno.aluno AS aluno");
        $consulta->execute();

        $alunos = $consulta->fetchAll();
        foreach($alunos as $aluno) {
            echo "<tr>
                    <td>{$aluno["nome"]}</td>
                    <td>{$aluno["sobrenome"]}</td>
                    <td>{$aluno["cpf"]}</td>
                  
                </tr>";
        }

    } catch(Exception $e) {
        die("Erro de banco de dados: " . $e->getMessage());
    }    
?>    


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estude com Micatryz</title>
    <link rel="stylesheet" href="perfil.css" />
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="iconesection.png">
    <div class="links">
   <nav>
       <ul>
           <li><a href="index.php">Início</a></li>
           <li><a href="aula.php">Aulas</a></li>
           <li><a href="cronograma.php">Cronograma</a></li>
        
       </ul>
    </nav>
    </div>
    
       <h1><strong>Estude com Micatryz</strong></h1>

</head>
<body>
    <table class="table table-striped table-hover">
        <thead>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>CPF</th>
        </thead>

    </table>
    <p><a href="index.php">Voltar ao início.</a></p>
</body>
</html>
