<?php

/**
 * Wiki form base class.
 *
 * @package    portal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseWikiForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'materia_id'  => new sfWidgetFormPropelChoice(array('model' => 'Materia', 'add_empty' => false)),
      'profesor_id' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'titulo'      => new sfWidgetFormInput(),
      'texto'       => new sfWidgetFormTextarea(),
      'fecha'       => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Wiki', 'column' => 'id', 'required' => false)),
      'materia_id'  => new sfValidatorPropelChoice(array('model' => 'Materia', 'column' => 'id')),
      'profesor_id' => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'titulo'      => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'texto'       => new sfValidatorString(array('required' => false)),
      'fecha'       => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('wiki[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Wiki';
  }


}
