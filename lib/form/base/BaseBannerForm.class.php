<?php

/**
 * Banner form base class.
 *
 * @package    portal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseBannerForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'titulo'      => new sfWidgetFormInput(),
      'descripcion' => new sfWidgetFormInput(),
      'texto'       => new sfWidgetFormTextarea(),
      'fecha'       => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Banner', 'column' => 'id', 'required' => false)),
      'titulo'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'descripcion' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'texto'       => new sfValidatorString(array('required' => false)),
      'fecha'       => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('banner[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Banner';
  }


}
