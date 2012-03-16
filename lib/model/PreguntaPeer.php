<?php

class PreguntaPeer extends BasePreguntaPeer
{
  /**
   * Obtiene las Respuestas de una Pregunta
   * @return array
   */
  public static function getRespuestasByPK($id)
  {
    $respuestas = array();
    $res = self::retrieveByPK($id);
    $respuestas[] = $res->getRespuesta1();
    $respuestas[] = $res->getRespuesta2();
    $respuestas[] = $res->getRespuesta3();
    $respuestas[] = $res->getRespuesta4();
    $respuestas[] = $res->getRespuesta5();
    return $respuestas;
  }
  
  /**
   * Obtener el texto de la Pregunta
   * @param $id ID de la Pregunta
   * @return string
   */
  public static function getPreguntaByPk($id)
  {
    $p = self::retrieveByPK($id);
    return $p->getPregunta();
  }
}
