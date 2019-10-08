<?php

  session_start();
 
$id = 5;
try {
	$pdo = new PDO("@mysql:host=localhost:3306;dbname=aluno", "root", "123456");
  $stmt = $pdo->prepare('SELECT * FROM aluno WHERE id = :id');
  $stmt->execute(array('id' => $id));
	$host = '127.0.0.1';
	$port = '3306';
  $aluno = 'root'; 
  $senha = '123456'; 
  $db = 'aluno';
;
  
  $result = $stmt->fetchAll();
  
  if ( count($result) ) { 
    foreach($result as $row) {
      print_r($row);
    }   
  } else {
    echo "Nennhum resultado retornado.";
  }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
$obj = $stmt->fetchObject();

if ($obj) { 
	$_SESSION['aluno'] = $_POST['aluno']; 
	header('Location: aulas.php'); 
	} else { 
		header('Location: index.php');
	} 
	$id = (int) $_GET['id'];
	 
	$select = $pdo->query("
	select*from usuario_id,usuario where aluno= '{$aluno}' and senha= md5('{$senha}'); '".$id."'");
	$result = $select->fetchAll(PDO:: $conexao,$query);
	print_r($result);
	$row = $pdo  ->prepare($result);
	echo $row;exit;
	if($row==1){
		$_SESSION['root'] = $usuario;
		header('Location:aulas.php');
		exit();
	}
	else {
		$_SESSION['nao_auteticado'] = true;
		header('Location: index.php');
		exit();
	}
 ?>

<form action="login.php" method="post"> 
Login: 
<input type="root" name=root /> 
Senha: 
<input type="123456" name="123456" /> 
<input name="submit" type="submit" value="Enviar" /> 
</form>




