<?php

class CuestionarioForm extends sfForm
{
  public function configure()
  {

    $c = new Criteria();
    $preguntas = PreguntaPeer::doSelect($c);

    foreach($preguntas as $i => $pregunta)
    {
      $respuestas = PreguntaPeer::getRespuestasByPK($pregunta->getId());
      $pregunta_str = PreguntaPeer::getPreguntaByPk($pregunta->getId());

      $this->setWidget($pregunta->getId() , new sfWidgetFormChoice(array(
      'choices' => $respuestas,
      'expanded' => true,
      )));

      $this->widgetSchema->setLabel($pregunta->getId(), $i+1 ."- " .  $pregunta_str);

      $this->setValidator($pregunta->getId(), new sfValidatorChoice(array('choices'=> array_keys($respuestas))));
    }

    $profesores = PerfilPeer::getAllFullName();

    $this->setWidget('profesor_id', new sfWidgetFormChoice(array(
      'choices' => $profesores, 
    )));

    $this->setValidator('profesor_id', new sfValidatorChoice(array(
      'choices' => array_keys($profesores),
    )));


    $this->widgetSchema->setNameFormat('cuestionario[%s]');
     
  }
}