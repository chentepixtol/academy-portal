<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * MateriaProfesor filter form base class.
 *
 * @package    portal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseMateriaProfesorFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'profesor_id' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'materia_id'  => new sfWidgetFormPropelChoice(array('model' => 'Materia', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'profesor_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'materia_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Materia', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('materia_profesor_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'MateriaProfesor';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'profesor_id' => 'ForeignKey',
      'materia_id'  => 'ForeignKey',
    );
  }
}
