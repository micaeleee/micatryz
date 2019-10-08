<?php
    //var_dump($_POST);
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
   
    

    
    try {
        include_once('conexao.php');
        $consulta = $pdo->prepare("INSERT INTO aluno
        (nome, sobrenome, cpf, email,senha)
        VALUES
        (:nome,:sobrenome, :cpf, :email,:senha)");

        $consulta->bindValue(":nome", $nome);
        $consulta->bindValue(":sobrenome", $sobrenome);
        $consulta->bindValue(":cpf", $cpf);
        $consulta->bindValue(":email", $email);
        $consulta->bindValue(":senha", $senha);
       

        $consulta->execute();

    } catch(Exception $e) {
        die("Erro de banco de dados: " . $e->getMessage());
    }

    header('location: listar.php');
?>