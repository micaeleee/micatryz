
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
        Segunda Guerra Mundial
    </p>
</div>
<div id="texto">
    <p1 align="justify">
        A Segunda Guerra Mundial foi um conflito bélico que ocorreu na primeira metade do século XX, envolveu mais de setenta nações, opondo os Aliados às Potências do Eixo. A guerra teve início em 1 de setembro de 1939 com a invasão da Polônia pela Alemanha e as subsequentes declarações de guerra da França e da Grã-Bretanha, estendendo-se até 2 de setembro de 1945.
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
              videoId: 'RedndCHHtYc',
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