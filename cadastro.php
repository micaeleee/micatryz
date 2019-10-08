<?php
session_start();
?>


<!DOCTYPE html>
<html>
    
<header>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estude com Micatryz</title>
    <link rel="stylesheet" href="perfil.css" />
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="main.js">
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

    
</header>
 
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro</h3>
                    <h3 class="title has-text-grey"><a  target="_blank">Aluno</a></h3>
                    <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                      
                    </div>
                    
                    <div class="box">
                        <form action="tratar.php" method="POST">
        <div class="field">
                   <div class="control">
                        <input name="Nome" class="input is-large"  id="nome" placeholder="Nome" name="nome">
                     </div>
          </div>
        
   
          <div class="field">
                   <div class="control">
                        <input name="Sobrenome" class="input is-large"id="sobrenome"  name="sobrenome">
                     </div>
          </div>      
           <div class="field">
                   <div class="control">
                        <input name="CPF" class="input is-large" id="cpf" placeholder="cpf" name="cpf" size="11" maxlength="11">
                     </div>
          </div>      
                 
        
        </div>
        
         
            
         <div class="field">
                   <div class="control">
                        <input name="email" class="input is-large" id="email"  placeholder="seuemail@email.com" name="email">
                     </div>
          </div>
 
        
        <div class="field">
                   <div class="control">
                        <input name="senha" class="input is-large" type="password" placeholder="senha">
                     </div>
          </div>

        
        <button type="submit" class="btn btn-primary">Enviar</button>
           </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
 
</html>


       
        

        
  