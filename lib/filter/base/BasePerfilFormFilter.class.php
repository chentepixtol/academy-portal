<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Perfil filter form base class.
 *
 * @package    portal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BasePerfilFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'          => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'nombre'           => new sfWidgetFormFilterInput(),
      'apellido_paterno' => new sfWidgetFormFilterInput(),
      'apellido_materno' => new sfWidgetFormFilterInput(),
      'email'            => new sfWidgetFormFilterInput(),
      'telefono'         => new sfWidgetFormFilterInput(),
      'extension_1'      => new sfWidgetFormFilterInput(),
      'extension_2'      => new sfWidgetFormFilterInput(),
      'movil'            => new sfWidgetFormFilterInput(),
      'estancia'         => new sfWidgetFormFilterInput(),
      'horario'          => new sfWidgetFormFilterInput(),
      'foto'             => new sfWidgetFormFilterInput(),
      'enlace'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'user_id'          => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'apellido_paterno' => new sfValidatorPass(array('required' => false)),
      'apellido_materno' => new sfValidatorPass(array('required' => false)),
      'email'            => new sfValidatorPass(array('required' => false)),
      'telefono'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'extension_1'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'extension_2'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'movil'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estancia'         => new sfValidatorPass(array('required' => false)),
      'horario'          => new sfValidatorPass(array('required' => false)),
      'foto'             => new sfValidatorPass(array('required' => false)),
      'enlace'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('perfil_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Perfil';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'user_id'          => 'ForeignKey',
      'nombre'           => 'Text',
      'apellido_paterno' => 'Text',
      'apellido_materno' => 'Text',
      'email'            => 'Text',
      'telefono'         => 'Number',
      'extension_1'      => 'Number',
      'extension_2'      => 'Number',
      'movil'            => 'Number',
      'estancia'         => 'Text',
      'horario'          => 'Text',
      'foto'             => 'Text',
      'enlace'           => 'Text',
    );
  }
}
