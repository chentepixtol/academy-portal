<?php

/**
 * Aviso form base class.
 *
 * @package    portal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseAvisoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'     => new sfWidgetFormInputHidden(),
      'titulo' => new sfWidgetFormInput(),
      'texto'  => new sfWidgetFormTextarea(),
      'activo' => new sfWidgetFormInputCheckbox(),
      'fecha'  => new sfWidgetFormDate(),
      'slug'   => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'     => new sfValidatorPropelChoice(array('model' => 'Aviso', 'column' => 'id', 'required' => false)),
      'titulo' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'texto'  => new sfValidatorString(array('required' => false)),
      'activo' => new sfValidatorBoolean(array('required' => false)),
      'fecha'  => new sfValidatorDate(array('required' => false)),
      'slug'   => new sfValidatorString(array('max_length' => 150, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('aviso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Aviso';
  }


}
