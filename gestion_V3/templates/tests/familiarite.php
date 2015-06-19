<!DOCTYPE html>
<html>
    <style>
        
       
         div>label{
           
            float:left;
            width:48%;
            text-align: right;
            }
        div>input{
            position: absolute;
            left:49.5%;
            }
        
    
    </style>

	<body>
    <br/>
	<p style="font-size:150%">Choisissez sur une echelle de 1 à 6, votre degre de familiarite avec ce son (1=Peu familier; 6=Tres familier). Vous pouvez rejouer le son autant de fois que necessaire.<p>
	<audio id="audioPlayer" width="300" height="32" src="./__SON__"></audio>
    <button onclick="play('audioPlayer', this); this.onclick=''"><img src="./templates/image/ecouter.png"></button>
    <script type="text/javascript">

     function play(idAudioPlayer, context) {
     var audioplayer = document.querySelector('#' + idAudioPlayer);


    if (audioplayer.played) {
        audioplayer.play();
        context.textContent = 'déjà écouté';
        
       }
       }

       
</script>
	<form method="post" action="templates/tests/familiarite_post.php">
	<p>
    
    <label class="center" for="reponse">Votre choix:</label>
	<div>
	<label  for="1">1</label><input type="radio" name="reponse" value="1" id="1"/><br/>
	<label  for="2">2</label><input type="radio" name="reponse" value="2" id="2"/><br/>
	<label  for="3">3</label><input type="radio" name="reponse" value="3" id="3"/><br/>
	<label  for="4">4</label><input type="radio" name="reponse" value="4" id="4"/><br/>
	<label  for="5">5</label><input type="radio" name="reponse" value="5" id="5"/><br/>
	<label  for="6">6</label><input type="radio" name="reponse" value="6" id="6"/><br/>
    </div>
	
	
	<br/>
	<input type="submit" value="OK" /><br/>
	
	</p>
	</body>
</html>
	