<?php
$lim_1er_m = $lim_1er_v = 18;
$lim_2do_m = $lim_2do_v = 11;
$lim_3er_m = $lim_3er_v = 14;
$lim_4to_m = $lim_4to_v = 10;
$lim_5to_m = 10;
$lim_5to_v = 9;
$lim_6to_m = $lim_6to_v = 6;
$lim_7mo_m = 6;
$lim_7mo_v = 5;
?>
<script type="text/javascript" language="JavaScript">
	var baseHorarios="http://148.204.219.23/cescolar/asp/";
	function ventana(url) {
    		window.open(baseHorarios + url, "", "width=740,height=330,top=0,left=0,ScrollBars = No");
	}	
</script>
<style type="text/css">
	.coloreado{
		background-color: #CCCCCC;
		font-size: 70%;
		color: #990b0b;
	}
	.TableH{
		background-color: #890b0b;
		color: white;
		font-weight: bold;
		padding: 1px;
	}
	.horarios td{
		text-align:center;
	}
</style>
<table class="horarios">
	<!-- Primer Semestre-->
	<tr>
		<td colspan="2" class="TableH">Primer Semestre</td>
	</tr>
	<tr>
		<td class="coloreado">Matutino</td>
		<td class="coloreado">Vespertino</td>
	</tr>
	<tr>
		<td>
			<?php
			for($i=1; $i <= $lim_1er_m; $i++):?>
				<a href="javascript:ventana('Horarios.asp?Gpo=1C<?=$i?>M&GpoH=1C<?=$i?>M&Carr=ICE&Plan=04')"> 1C<?=$i?>M</a>&nbsp;&nbsp;&nbsp;
			<?php endfor; ?>
		</td>
		<td>
			<?php
			for($i=1; $i <= $lim_1er_v; $i++):?>
				<a href="javascript:ventana('Horarios.asp?Gpo=1C<?=$i?>V&GpoH=1C<?=$i?>V&Carr=ICE&Plan=04')"> 1C<?=$i?>V</a>&nbsp;&nbsp;&nbsp;
			<?php endfor; ?>
		</td>
	</tr>
	<!-- Segundo Semestre-->
	<tr>
		<td colspan="2" class="TableH">Segundo Semestre</td>
	</tr>
	<tr>
		<td class="coloreado">Matutino</td>
		<td class="coloreado">Vespertino</td>
	</tr>
	<tr>
		<td>
			<?php
			for($i=1; $i <= $lim_2do_m; $i++):?>
				<a href="javascript:ventana('Horarios.asp?Gpo=2C<?=$i?>M&GpoH=2C<?=$i?>M&Carr=ICE&Plan=04')"> 2C<?=$i?>M</a>&nbsp;&nbsp;&nbsp;
			<?php endfor; ?>
		</td>
		<td>
			<?php
			for($i=1; $i <= $lim_2do_v; $i++):?>
				<a href="javascript:ventana('Horarios.asp?Gpo=2C<?=$i?>V&GpoH=2C<?=$i?>V&Carr=ICE&Plan=04')"> 2C<?=$i?>V</a>&nbsp;&nbsp;&nbsp;
			<?php endfor; ?>
		</td>
	</tr>
	<!-- Tercer Semestre-->
	<tr>
		<td colspan="2" class="TableH">Tercer Semestre</td>
	</tr>
	<tr>
		<td class="coloreado">Matutino</td>
		<td class="coloreado">Vespertino</td>
	</tr>
	<tr>
		<td>
			<?php
			for($i=1; $i <= $lim_3er_m; $i++):?>
				<a href="javascript:ventana('Horarios.asp?Gpo=3C<?=$i?>M&GpoH=3C<?=$i?>M&Carr=ICE&Plan=04')"> 3C<?=$i?>M</a>&nbsp;&nbsp;&nbsp;
			<?php endfor; ?>
		</td>
		<td>
			<?php
			for($i=1; $i <= $lim_3er_v; $i++):?>
				<a href="javascript:ventana('Horarios.asp?Gpo=3C<?=$i?>V&GpoH=3C<?=$i?>V&Carr=ICE&Plan=04')"> 3C<?=$i?>V</a>&nbsp;&nbsp;&nbsp;
			<?php endfor; ?>
		</td>
	</tr>
<!-- Cuarto  Semestre-->
	<tr>
		<td colspan="2" class="TableH">Cuarto Semestre</td>
	</tr>
	<tr>
		<td class="coloreado">Matutino</td>
		<td class="coloreado">Vespertino</td>
	</tr>
	<tr>
		<td>
			<?php
			for($i=1; $i <= $lim_4to_m; $i++):?>
				<a href="javascript:ventana('Horarios.asp?Gpo=4C<?=$i?>M&GpoH=4C<?=$i?>M&Carr=ICE&Plan=04')"> 4C<?=$i?>M</a>&nbsp;&nbsp;&nbsp;
			<?php endfor; ?>
		</td>
		<td>
			<?php
			for($i=1; $i <= $lim_4to_v; $i++):?>
				<a href="javascript:ventana('Horarios.asp?Gpo=4C<?=$i?>V&GpoH=4C<?=$i?>V&Carr=ICE&Plan=04')"> 4C<?=$i?>V</a>&nbsp;&nbsp;&nbsp;
			<?php endfor; ?>
		</td>
	</tr>
<!-- Quinto Semestre-->
	<tr>
		<td colspan="2" class="TableH">Quinto Semestre</td>
	</tr>
	<tr>
		<td class="coloreado">Matutino</td>
		<td class="coloreado">Vespertino</td>
	</tr>
	<tr>
		<td>
			<?php
			for($i=1; $i <= $lim_5to_m; $i++):?>
				<a href="javascript:ventana('Horarios.asp?Gpo=5C<?=$i?>M&GpoH=5C<?=$i?>M&Carr=ICE&Plan=04')"> 5C<?=$i?>M</a>&nbsp;&nbsp;&nbsp;
			<?php endfor; ?>
		</td>
		<td>
			<?php
			for($i=1; $i <= $lim_5to_v; $i++):?>
				<a href="javascript:ventana('Horarios.asp?Gpo=5C<?=$i?>V&GpoH=5C<?=$i?>V&Carr=ICE&Plan=04')"> 5C<?=$i?>V</a>&nbsp;&nbsp;&nbsp;
			<?php endfor; ?>
		</td>
	</tr>
<!--  Sexto Semestre-->
	<tr>
		<td colspan="2" class="TableH">Sexto Semestre</td>
	</tr>
	<tr>
		<td class="coloreado">Matutino</td>
		<td class="coloreado">Vespertino</td>
	</tr>
	<tr>
		<td>
			<?php
			for($i=1; $i <= $lim_6to_m; $i++):?>
				<a href="javascript:ventana('Horarios.asp?Gpo=6C<?=$i?>M&GpoH=6C<?=$i?>M&Carr=ICE&Plan=04')"> 6C<?=$i?>M</a>&nbsp;&nbsp;&nbsp;
			<?php endfor; ?>
		</td>
		<td>
			<?php
			for($i=1; $i <= $lim_6to_v; $i++):?>
				<a href="javascript:ventana('Horarios.asp?Gpo=6C<?=$i?>V&GpoH=6C<?=$i?>V&Carr=ICE&Plan=04')"> 6C<?=$i?>V</a>&nbsp;&nbsp;&nbsp;
			<?php endfor; ?>
		</td>
	</tr>
<!-- Septimo Semestre-->
	<tr>
		<td colspan="2" class="TableH">Septimo Semestre</td>
	</tr>
	<tr>
		<td class="coloreado">Matutino</td>
		<td class="coloreado">Vespertino</td>
	</tr>
	<tr>
		<td>
			<?php
			for($i=1; $i <= $lim_7mo_m; $i++):?>
				<a href="javascript:ventana('Horarios.asp?Gpo=7C<?=$i?>M&GpoH=7C<?=$i?>M&Carr=ICE&Plan=04')"> 7C<?=$i?>M</a>&nbsp;&nbsp;&nbsp;
			<?php endfor; ?>
		</td>
		<td>
			<?php
			for($i=1; $i <= $lim_7mo_v; $i++):?>
				<a href="javascript:ventana('Horarios.asp?Gpo=7C<?=$i?>V&GpoH=7C<?=$i?>V&Carr=ICE&Plan=04')"> 7C<?=$i?>V</a>&nbsp;&nbsp;&nbsp;
			<?php endfor; ?>
		</td>
	</tr>
	<!-- Octavo Semestre-->
	<tr>
		<td colspan="2" class="TableH">Octavo Semestre</td>
	</tr>
	<tr>
		<td class="coloreado">Matutino</td>
		<td class="coloreado">Vespertino</td>
	</tr>
	<tr>
 <td class="Grupo" align="center">

<a href="javascript:ventana('Horarios.asp?Gpo=8CM1&amp;GpoH=8C1MCM&amp;Carr=ICE&amp;Plan=04')"> 8C1MCM</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=8CM2&amp;GpoH=8C2MCM&amp;Carr=ICE&amp;Plan=04')"> 8C2MCM</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=8CM6&amp;GpoH=8C1ME&amp;Carr=ICE&amp;Plan=04')"> 8C1ME</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=8CMB&amp;GpoH=8C1MCP&amp;Carr=ICE&amp;Plan=04')"> 8C1MCP</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=8CMG&amp;GpoH=8C1MA&amp;Carr=ICE&amp;Plan=04')"> 8C1MA</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=8CML&amp;GpoH=8C1MCN&amp;Carr=ICE&amp;Plan=04')"> 8C1MCN</a>&nbsp;&nbsp;&nbsp;


<br>

<a href="javascript:ventana('Horarios.asp?Gpo=8CMR&amp;GpoH=8C2MA&amp;Carr=ICE&amp;Plan=04')"> 8C2MA</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=8CMS&amp;GpoH=8C3MCM&amp;Carr=ICE&amp;Plan=04')"> 8C3MCM</a>&nbsp;&nbsp;&nbsp;


	 </td><td class="Grupo" align="center">

<a href="javascript:ventana('Horarios.asp?Gpo=8CV1&amp;GpoH=8C1VCM&amp;Carr=ICE&amp;Plan=04')"> 8C1VCM</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=8CV2&amp;GpoH=8C2VCM&amp;Carr=ICE&amp;Plan=04')"> 8C2VCM</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=8CV6&amp;GpoH=8C1VE&amp;Carr=ICE&amp;Plan=04')"> 8C1VE</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=8CVB&amp;GpoH=8C1VCP&amp;Carr=ICE&amp;Plan=04')"> 8C1VCP</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=8CVG&amp;GpoH=8C1VA&amp;Carr=ICE&amp;Plan=04')"> 8C1VA</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=8CVL&amp;GpoH=8C1VCN&amp;Carr=ICE&amp;Plan=04')"> 8C1VCN</a>&nbsp;&nbsp;&nbsp;

</td></tr>

<tr>
		<td colspan="2" class="TableH">Noveno Semestre</td>
	</tr>
	<tr>
		<td class="coloreado">Matutino</td>
		<td class="coloreado">Vespertino</td>
	</tr>
	
<tr>

 <td class="Grupo" align="center">

<a href="javascript:ventana('Horarios.asp?Gpo=9CM1&amp;GpoH=9C1MCM&amp;Carr=ICE&amp;Plan=04')"> 9C1MCM</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=9CM2&amp;GpoH=9C2MCM&amp;Carr=ICE&amp;Plan=04')"> 9C2MCM</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=9CM3&amp;GpoH=9C3MCM&amp;Carr=ICE&amp;Plan=04')"> 9C3MCM</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=9CM6&amp;GpoH=9C1ME&amp;Carr=ICE&amp;Plan=04')"> 9C1ME</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=9CM7&amp;GpoH=9C2ME&amp;Carr=ICE&amp;Plan=04')"> 9C2ME</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=9CMB&amp;GpoH=9C1MCP&amp;Carr=ICE&amp;Plan=04')"> 9C1MCP</a>&nbsp;&nbsp;&nbsp;


<br>

<a href="javascript:ventana('Horarios.asp?Gpo=9CMC&amp;GpoH=9C2MCP&amp;Carr=ICE&amp;Plan=04')"> 9C2MCP</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=9CMG&amp;GpoH=9C1MA&amp;Carr=ICE&amp;Plan=04')"> 9C1MA</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=9CML&amp;GpoH=9C1MCN&amp;Carr=ICE&amp;Plan=04')"> 9C1MCN</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=9CMR&amp;GpoH=9C4MCM&amp;Carr=ICE&amp;Plan=04')"> 9C4MCM</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=9CMS&amp;GpoH=9C5MCM&amp;Carr=ICE&amp;Plan=04')"> 9C5MCM</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=9CMT&amp;GpoH=9C3ME&amp;Carr=ICE&amp;Plan=04')"> 9C3ME</a>&nbsp;&nbsp;&nbsp;


<br>

<a href="javascript:ventana('Horarios.asp?Gpo=9CMU&amp;GpoH=9C2MA&amp;Carr=ICE&amp;Plan=04')"> 9C2MA</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=9CMW&amp;GpoH=9C2MCN&amp;Carr=ICE&amp;Plan=04')"> 9C2MCN</a>&nbsp;&nbsp;&nbsp;


	 </td><td class="Grupo" align="center">

<a href="javascript:ventana('Horarios.asp?Gpo=9CV1&amp;GpoH=9C1VCM&amp;Carr=ICE&amp;Plan=04')"> 9C1VCM</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=9CV2&amp;GpoH=9C2VCM&amp;Carr=ICE&amp;Plan=04')"> 9C2VCM</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=9CV3&amp;GpoH=9C3VCM&amp;Carr=ICE&amp;Plan=04')"> 9C3VCM</a>&nbsp;&nbsp;&nbsp;

<a href="javascript:ventana('Horarios.asp?Gpo=9CV6&amp;GpoH=9C1VE&amp;Carr=ICE&amp;Plan=04')"> 9C1VE</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=9CVB&amp;GpoH=9C1VCP&amp;Carr=ICE&amp;Plan=04')"> 9C1VCP</a>&nbsp;&nbsp;&nbsp;


<a href="javascript:ventana('Horarios.asp?Gpo=9CVG&amp;GpoH=9C1VA&amp;Carr=ICE&amp;Plan=04')"> 9C1VA</a>&nbsp;&nbsp;&nbsp;


<br>

<a href="javascript:ventana('Horarios.asp?Gpo=9CVL&amp;GpoH=9C1VCN&amp;Carr=ICE&amp;Plan=04')"> 9C1VCN</a>&nbsp;&nbsp;&nbsp;

</td></tr>


</table>