<?php

/**
 * MateriaProfesor form base class.
 *
 * @package    portal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseMateriaProfesorForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'profesor_id' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'materia_id'  => new sfWidgetFormPropelChoice(array('model' => 'Materia', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'MateriaProfesor', 'column' => 'id', 'required' => false)),
      'profesor_id' => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'materia_id'  => new sfValidatorPropelChoice(array('model' => 'Materia', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('materia_profesor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'MateriaProfesor';
  }


}
