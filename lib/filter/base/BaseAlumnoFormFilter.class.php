<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Alumno filter form base class.
 *
 * @package    portal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseAlumnoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'username'         => new sfWidgetFormFilterInput(),
      'password'         => new sfWidgetFormFilterInput(),
      'email'            => new sfWidgetFormFilterInput(),
      'nombre'           => new sfWidgetFormFilterInput(),
      'apellido_paterno' => new sfWidgetFormFilterInput(),
      'apellido_materno' => new sfWidgetFormFilterInput(),
      'boleta'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'username'         => new sfValidatorPass(array('required' => false)),
      'password'         => new sfValidatorPass(array('required' => false)),
      'email'            => new sfValidatorPass(array('required' => false)),
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'apellido_paterno' => new sfValidatorPass(array('required' => false)),
      'apellido_materno' => new sfValidatorPass(array('required' => false)),
      'boleta'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('alumno_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Alumno';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'username'         => 'Text',
      'password'         => 'Text',
      'email'            => 'Text',
      'nombre'           => 'Text',
      'apellido_paterno' => 'Text',
      'apellido_materno' => 'Text',
      'boleta'           => 'Text',
    );
  }
}
