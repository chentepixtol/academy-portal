<?php slot('title',"Academia de Computación de Esime - " . $video->getTitulo())?>
<?php slot('description', "Video Academico titulado como " . $video->getTitulo())?>
<h2>Video</h2>

<div class="titulo"> <?php echo $video->getTitulo() ?> </div>

<a
  href="<?php echo $video->getURl()?>"  
  style="display:block;width:400px;height:300px"  
  id="player"> 
</a>

<script>
  flowplayer('player','/js/flowplayer/flowplayer-3.0.3.swf');
</script>