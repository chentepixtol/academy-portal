<?php

/**
 * Evaluacion form base class.
 *
 * @package    portal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseEvaluacionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'profesor_id' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'pregunta_id' => new sfWidgetFormPropelChoice(array('model' => 'Pregunta', 'add_empty' => false)),
      'num_resp_1'  => new sfWidgetFormInput(),
      'num_resp_2'  => new sfWidgetFormInput(),
      'num_resp_3'  => new sfWidgetFormInput(),
      'num_resp_4'  => new sfWidgetFormInput(),
      'num_resp_5'  => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Evaluacion', 'column' => 'id', 'required' => false)),
      'profesor_id' => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'pregunta_id' => new sfValidatorPropelChoice(array('model' => 'Pregunta', 'column' => 'id')),
      'num_resp_1'  => new sfValidatorInteger(array('required' => false)),
      'num_resp_2'  => new sfValidatorInteger(array('required' => false)),
      'num_resp_3'  => new sfValidatorInteger(array('required' => false)),
      'num_resp_4'  => new sfValidatorInteger(array('required' => false)),
      'num_resp_5'  => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('evaluacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Evaluacion';
  }


}
