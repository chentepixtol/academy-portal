<?php
class GraficaBarras
{	
	var $cargar;
	var $prof_id;
	var $i =0;
	
	public function __construct($p)
	{
		$this->prof_id = $p;
	}

	public function loadDatos()
	{	
		$sql = "SELECT * FROM evaluacionProfesores WHERE profesor_id='$this->prof_id' LIMIT 1 ";
		$consulta = mysql_query($sql);
		$reg = mysql_fetch_array($consulta);
		if($reg == false)
			return false;
		else
		{
			$this->cargar = json_decode($reg['estadisticas'], true);
			return true;
		}
	}
	
	public function genera()
	{
		$c=0;
		foreach ($this->cargar as $Resp) {
			?>
			<p> <?php echo  $this->Preguntas[$c++]  ?> </p>
			<table width="640" cellspacing="0" cellpadding="2">
			
			<?php
			if( $c == 14 )
			{
				$this->grafica($Resp,$this->tipo2);
			}
			elseif($c == 17)
			{
				$this->grafica($Resp,$this->tipo3);
			}
			elseif($c == 22)
			{
				$this->grafica($Resp,$this->tipo4);
			}
			else
				$this->grafica($Resp,$this->tipo1);
		
			?>
			
			</table>
			<?php
			
		}
	}
	public function getMaximo($Resp)
	{
		$maximo = 0;
		foreach ( $Resp as $ElemArray ) { $maximo += $ElemArray; }
		return $maximo;
	}
	private function grafica($Resp,$tipo)
	{
		$maximo = $this->getMaximo($Resp);
		//-------------------------------------------
		$porcentaje = round((( $Resp["A"] / $maximo ) * 100),2);
		$this->i++;
		$this->plantilla($porcentaje, $tipo[0]);
		//-----------------------------------------
		$porcentaje = round((( $Resp["B"] / $maximo ) * 100),2);
		$this->i++;
		$this->plantilla($porcentaje, $tipo[1]);
		//-----------------------------------------
		$porcentaje = round((( $Resp["C"] / $maximo ) * 100),2);
		$this->i++;
		$this->plantilla($porcentaje, $tipo[2]);
		//-----------------------------------------
		$porcentaje = round((( $Resp["D"] / $maximo ) * 100),2);
		$this->i++;
		$this->plantilla($porcentaje, $tipo[3]);
		//-----------------------------------------
		$porcentaje = round((( $Resp["E"] / $maximo ) * 100),2);
		$this->i++;
		$this->plantilla($porcentaje, $tipo[4]);
		//-----------------------------------------
	}
	
	public function plantilla($porcentaje, $dato )
	{
		?>
		
		<tr>
			<td width="15%"><strong>  <? echo $dato ?> </strong></td>
			<td width="10%"><? echo( $porcentaje ) ?>%</td>
			<td>
				<table width="<? echo($porcentaje) ?>%" bgcolor="<? echo $this->webcolor[$this->i] ?>">
				<tr><td> </td></tr>
				</table>
			</td>
		</tr>
			
		<?php	
	}
	
	
	var $webcolor = array (
 "f0f8ff",
 "00ffff",
"7fffd4",
 "ffe4c4",
 "000000",
 "ffebcd",
"0000ff",
 "8a2be2",
 "a52a2a",
 "deb887",
"5f9ea0",
 "7fff00",
 "d2691e",
"ff7f50",
"6495ed",
 "fff8dc",
 "dc143c",
 "00ffff",
"00008b",
 "008b8b",
 "b8860b",
"a9a9a9",
 "006400",
 "bdb76b",
 "8b008b",
"556b2f",
"ff8c00",
 "9932cc",
 "8b0000",
 "e9967a",
 "8fbc8f",
 "483d8b",
 "2f4f4f",
 "00ced1",
 "9400d3",
 "ff1493",
 "00bfff",
 "696969",
 "1e90ff",
 "b22222",
"228b22",
 "ff00ff",
 "dcdcdc",
 "ffd700",
 "daa520",
 "808080",
"808080",
 "008000",
 "adff2f",
 "ff69b4",
 "cd5c5c",
 "4b0082",
 "f0e68c",
 "e6e6fa",
 "7cfc00",
 "fffacd",
 "add8e6",
 "f08080",
 "e0ffff",
"fafad2",
 "d3d3d3",
 "d3d3d3",
 "90ee90",
 "ffb6c1",
 "ffa07a",
 "20b2aa",
 "87cefa",
 "778899",
 "778899",
 "b0c4de",
 "00ff00",
 "32cd32",
 "ff00ff",
 "800000",
 "66cdaa",
"0000cd",
 "ba55d3",
"9370d8",
 "3cb371",
 "7b68ee",
 "00fa9a",
 "48d1cc",
 "c71585",
"191970",
 "ffe4e1",
 "ffe4b5",
 "000080",
"fdf5e6",
 "808000",
 "6b8e23",
"ffa500",
 "ff4500",
 "da70d6",
 "eee8aa",
"98fb98",
"afeeee",
 "d87093",
 "ffefd5",
 "ffdab9",
 "cd853f",
 "ffc0cb",
 "dda0dd",
 "b0e0e6",
 "800080",
 "ff0000",
 "bc8f8f",
 "4169e1",
 "8b4513",
"fa8072",
 "f4a460",
 "2e8b57",
 "fff5ee",
"a0522d",
"c0c0c0",
 "87ceeb",
 "6a5acd",
 "708090",
 "708090",
 "fffafa",
 "00ff7f",
 "4682b4",
 "d2b48c",
 "008080",
"d8bfd8",
 "ff6347",
 "40e0d0",
 "ee82ee",
"f5deb3",
 "ffffff",
 "f5f5f5",
 "ffff00",
 "9acd32"
);

var $Preguntas = array(
"  1.- ¿ El profesor falto a clases ?",
"  2.- ¿ El profesor fue puntual ?",
"  3.- ¿ El profesor fue ordenado al dar su clase ?",
"  4.- ¿ El profesor fue explícito al dar su clase ?",
"  5.- ¿ El profesor mostró dominio en su materia ?",
"  6.- ¿ El profesor aclaro dudas y preguntas en su clase ?",
"  7.- ¿ El profesor dio asesoría de teoría (y laboratorio) ?",
"  8.- ¿ El profesor dio al inicio del curso el temario o programa del estudio oficial ?",
"  9.- ¿ El profesor repartió los temas del curso para que los expusieran los alumnos ?",
"  10.- ¿ El profesor fue justo en la evaluación de exámenes ?",
"  11.- ¿ El profesor cubrió el programa de estudio oficial ?",
"  12.- ¿ El profesor cubrió los objetivos de los temas del programa de estudio ?",
"  13.- ¿ El profesor dio el nivel de profundidad que exige el programa de estudio ?",
"  14.- ¿ Cuánto cree que aprendió de la materia ?",
"  15.- ¿ El profesor le hizo interesarse por la materia ?",
"  16.- ¿ Le gustaría cursar otra materia con el profesor ?",
"  17.- ¿ Cree que la calificación le fue regalada por ineficiencia del profesor ?",
"  18.- ¿ El profesor actuó honestamente en el curso ?",
"  19.- ¿ El curso del profesor le fue tedioso ?",
"  20.- ¿ Le agrado el contenido de la materia ?",
"  21.- ¿ El profesor consultaba continuamente el libro o notas mostrando no haber preparado la clase ?",
"  24.- ¿ Si evaluara en general al profesor, que calificación le daría por su curso ?"

);
var $tipo1= array("Siempre","Mucho","Regular","Poco","Nunca");
var $tipo2 = array("Todo","Mucho","Regular","Poco","Nada");
var $tipo3 = array("No","Fue Justa","Medio","Poco","Si");
var $tipo4 = array("0-3","4-5","6-7","8-9","10");
//var $opciones = array("$this->tipo1", "$this->tipo1");	

}


?>
