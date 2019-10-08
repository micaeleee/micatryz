

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

   
   <div class="links">
   <nav>
       <ul>
           <li><a href="index.php">Início</a></li>
           <li><a href="aula.php">Aulas</a></li>
           <li><a href="cronograma.php">Cronograma</a></li>
        
       </ul>
    </nav>
    </div>
    <div class="conteudo">
       <h1><strong>Estude com Micatryz</strong></h1>
       </div>
</header>
<div id="titulo">
    <p>
        Tabela Periódica
    </p>
</div>
<div id="texto">
    <p1 align="justify">
            A tabela periódica é uma disposição sistemática dos elementos químicos ordenados por seus números atômicos, configuração eletrônica, e recorrência das propriedades periódicas. 
    </p1>

</div>
<div id="titulo">
       
        <div id="player"></div>
    
        <script>
         
          var tag = document.createElement('script');
    
          tag.src = "https://www.youtube.com/iframe_api";
          var firstScriptTag = document.getElementsByTagName('script')[0];
          firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    
     
          var player;
          function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
             
              width: '100%',
              videoId: 'yv5168bi1X4',
              events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
              }
            });
          }
    
          function onPlayerReady(event) {
            event.target.playVideo();
          }
    
        
          function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING && !done) {
              setTimeout(stopVideo, 6000);
              done = true;
            }
          }
          function stopVideo() {
            player.stopVideo();
          }
        </script>



</div>
</body>
</html>