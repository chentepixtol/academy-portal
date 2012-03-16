			<p> <?php echo $i ." .-" . $eval->getPregunta()->getPregunta()?> </p>
			<table cellpadding="2" cellspacing="0" width="740">
			
					
		<tbody><tr>

			<td width="15%"><strong><?php echo $eval->getPregunta()->getRespuesta1()?></strong></td>
			<td width="10%"><? echo( $eval->getPorcentajeResp1() ) ?>%</td>
			<td>
				<table bgcolor="#00ffff" width="<? echo( $eval->getPorcentajeResp1() ) ?>%">
				<tbody><tr><td> </td></tr>
				</tbody></table>
			</td>

		</tr>
			
				
		<tr>
			<td width="15%"><strong>  <?php echo $eval->getPregunta()->getRespuesta2()?> </strong></td>
			<td width="10%"><? echo( $eval->getPorcentajeResp2() ) ?>%</td>
			<td>
				<table bgcolor="#7fffd4" width="<? echo( $eval->getPorcentajeResp2() ) ?>%">
				<tbody><tr><td> </td></tr>

				</tbody></table>
			</td>
		</tr>
			
				
		<tr>
			<td width="15%"><strong> <?php echo $eval->getPregunta()->getRespuesta3()?> </strong></td>
			<td width="10%"><? echo( $eval->getPorcentajeResp3() ) ?>%</td>
			<td>

				<table bgcolor="#ffe4c4" width="<? echo( $eval->getPorcentajeResp3() ) ?>%">
				<tbody><tr><td> </td></tr>
				</tbody></table>
			</td>
		</tr>
			
				
		<tr>
			<td width="15%"><strong>  <?php echo $eval->getPregunta()->getRespuesta4()?>  </strong></td>

			<td width="10%"><? echo( $eval->getPorcentajeResp4() )?>%</td>
			<td>
				<table bgcolor="#000000" width="<? echo( $eval->getPorcentajeResp4() )?>%">
				<tbody><tr><td> </td></tr>
				</tbody></table>
			</td>
		</tr>
			
									
			</tbody></table>
				