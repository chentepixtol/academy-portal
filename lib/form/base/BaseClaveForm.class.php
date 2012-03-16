<?php

/**
 * Clave form base class.
 *
 * @package    portal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseClaveForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'    => new sfWidgetFormInputHidden(),
      'clave' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'    => new sfValidatorPropelChoice(array('model' => 'Clave', 'column' => 'id', 'required' => false)),
      'clave' => new sfValidatorString(array('max_length' => 20)),
    ));

    $this->widgetSchema->setNameFormat('clave[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clave';
  }


}
