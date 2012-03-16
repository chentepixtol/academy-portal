<h1>Videos</h1>
<ul>
<?php foreach($videos as $video):?>
<li>
<a href="<?php echo url_for('video',$video)?>"><?php echo $video->getTitulo()?></a>
</li>
<?php endforeach;?>
</ul>