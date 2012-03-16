<?php

/**
 * Pregunta form base class.
 *
 * @package    portal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BasePreguntaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'pregunta'    => new sfWidgetFormInput(),
      'respuesta_1' => new sfWidgetFormInput(),
      'respuesta_2' => new sfWidgetFormInput(),
      'respuesta_3' => new sfWidgetFormInput(),
      'respuesta_4' => new sfWidgetFormInput(),
      'respuesta_5' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Pregunta', 'column' => 'id', 'required' => false)),
      'pregunta'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'respuesta_1' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'respuesta_2' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'respuesta_3' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'respuesta_4' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'respuesta_5' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pregunta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pregunta';
  }


}
