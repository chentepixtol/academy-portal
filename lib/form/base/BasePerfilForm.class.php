<?php

/**
 * Perfil form base class.
 *
 * @package    portal
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BasePerfilForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'user_id'          => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'nombre'           => new sfWidgetFormInput(),
      'apellido_paterno' => new sfWidgetFormInput(),
      'apellido_materno' => new sfWidgetFormInput(),
      'email'            => new sfWidgetFormInput(),
      'telefono'         => new sfWidgetFormInput(),
      'extension_1'      => new sfWidgetFormInput(),
      'extension_2'      => new sfWidgetFormInput(),
      'movil'            => new sfWidgetFormInput(),
      'estancia'         => new sfWidgetFormInput(),
      'horario'          => new sfWidgetFormInput(),
      'foto'             => new sfWidgetFormInput(),
      'enlace'           => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorPropelChoice(array('model' => 'Perfil', 'column' => 'id', 'required' => false)),
      'user_id'          => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'nombre'           => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'apellido_paterno' => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'apellido_materno' => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'email'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'telefono'         => new sfValidatorInteger(array('required' => false)),
      'extension_1'      => new sfValidatorInteger(array('required' => false)),
      'extension_2'      => new sfValidatorInteger(array('required' => false)),
      'movil'            => new sfValidatorInteger(array('required' => false)),
      'estancia'         => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'horario'          => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'foto'             => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'enlace'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('perfil[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Perfil';
  }


}
