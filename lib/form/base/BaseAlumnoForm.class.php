<?php

/**
 * Alumno form base class.
 *
 * @package    portal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseAlumnoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'username'         => new sfWidgetFormInput(),
      'password'         => new sfWidgetFormInput(),
      'email'            => new sfWidgetFormInput(),
      'nombre'           => new sfWidgetFormInput(),
      'apellido_paterno' => new sfWidgetFormInput(),
      'apellido_materno' => new sfWidgetFormInput(),
      'boleta'           => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorPropelChoice(array('model' => 'Alumno', 'column' => 'id', 'required' => false)),
      'username'         => new sfValidatorString(array('max_length' => 40)),
      'password'         => new sfValidatorString(array('max_length' => 40)),
      'email'            => new sfValidatorString(array('max_length' => 150)),
      'nombre'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'apellido_paterno' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'apellido_materno' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'boleta'           => new sfValidatorString(array('max_length' => 10, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Alumno', 'column' => array('username')))
    );

    $this->widgetSchema->setNameFormat('alumno[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Alumno';
  }


}
