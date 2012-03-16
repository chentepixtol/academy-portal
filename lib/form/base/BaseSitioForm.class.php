<?php

/**
 * Sitio form base class.
 *
 * @package    portal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseSitioForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'profesor_id' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'titulo'      => new sfWidgetFormInput(),
      'texto'       => new sfWidgetFormTextarea(),
      'orden'       => new sfWidgetFormInput(),
      'fecha'       => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Sitio', 'column' => 'id', 'required' => false)),
      'profesor_id' => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'titulo'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'texto'       => new sfValidatorString(array('required' => false)),
      'orden'       => new sfValidatorInteger(array('required' => false)),
      'fecha'       => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sitio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sitio';
  }


}
