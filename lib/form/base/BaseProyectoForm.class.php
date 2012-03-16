<?php

/**
 * Proyecto form base class.
 *
 * @package    portal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseProyectoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'profesor_id' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'titulo'      => new sfWidgetFormInput(),
      'descripcion' => new sfWidgetFormTextarea(),
      'fecha'       => new sfWidgetFormDate(),
      'slug'        => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Proyecto', 'column' => 'id', 'required' => false)),
      'profesor_id' => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'titulo'      => new sfValidatorString(array('max_length' => 100)),
      'descripcion' => new sfValidatorString(array('required' => false)),
      'fecha'       => new sfValidatorDate(array('required' => false)),
      'slug'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('proyecto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Proyecto';
  }


}
