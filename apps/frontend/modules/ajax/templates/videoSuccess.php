<style>
a:active {  outline:none; }
:focus   { -moz-outline-style:none; }
a.player {	
	margin-top:40px;
	display:block;
	background-color: #000;
	width:425px;
	height:344px;
	padding: 20px;	
	text-align:center;
	color:#fff;
	text-decoration:none;
	cursor:pointer;
}
a.player img {
	margin-top:115px;
	border:0;	
}

</style>


<script src="http://static.flowplayer.org/js/jquery.mousewheel.js"></script>
<script src="http://static.flowplayer.org/js/flowplayer.playlist-3.0.2.min.js"></script>
<script src="http://static.flowplayer.org/js/jquery.scrollable-1.0.1.min.js"></script>



<script>

$(function() {
	// setup scrolling for the playlist elements
	$("div.playlist").scrollable({
		items:'div.clips',
		vertical:true,
		next:'a.down',
		prev:'a.up'
	});
	
	// setup player 
	$f("player", "/js/flowplayer/flowplayer-3.0.3.swf").playlist("div.clips");		
});
</script>

<div style="float:left">
	
	<a class="go up"></a>
	
	<div class="playlist">	
		
		<div class="clips low">
			<?php foreach($videos as $video): ?>	
			<a href="<?php echo $video->getUrl()?>">
				<?php echo $video->getTitulo()?><br />
				<em><?php echo $video->getFecha()?></em>
			</a>
			<?php endforeach;?>	
		</div>

		 
	</div>
	
	<a class="go down"></a>
	
</div>
	

<a id="player" class="player " style="float:left;margin-top:25px">
	<img src="/img/player/btn/play.png" />
</a>

<br clear="all" />


