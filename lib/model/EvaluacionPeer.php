<?php

class EvaluacionPeer extends BaseEvaluacionPeer
{
  /**
   * Obtiene una Evaluacion y si no existe la crea
   * @param $profesor_id
   * @param $pregunta_id
   * @return Evaluacion
   */
  public static function retrieveOrCreate($profesor_id, $pregunta_id)
  {
    $c = new Criteria();
    $c->add(self::PROFESOR_ID,$profesor_id);
    $c->add(self::PREGUNTA_ID,$pregunta_id);
    $eval = self::doSelectOne($c);
    if(empty($eval))
    {
      $eval = new Evaluacion();
      $eval->setProfesorId($profesor_id);
      $eval->setPreguntaId($pregunta_id);
    }
    return $eval;
  }
}
