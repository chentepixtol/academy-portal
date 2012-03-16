<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Evaluacion filter form base class.
 *
 * @package    portal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseEvaluacionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'profesor_id' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'pregunta_id' => new sfWidgetFormPropelChoice(array('model' => 'Pregunta', 'add_empty' => true)),
      'num_resp_1'  => new sfWidgetFormFilterInput(),
      'num_resp_2'  => new sfWidgetFormFilterInput(),
      'num_resp_3'  => new sfWidgetFormFilterInput(),
      'num_resp_4'  => new sfWidgetFormFilterInput(),
      'num_resp_5'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'profesor_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'pregunta_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Pregunta', 'column' => 'id')),
      'num_resp_1'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_resp_2'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_resp_3'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_resp_4'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_resp_5'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('evaluacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Evaluacion';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'profesor_id' => 'ForeignKey',
      'pregunta_id' => 'ForeignKey',
      'num_resp_1'  => 'Number',
      'num_resp_2'  => 'Number',
      'num_resp_3'  => 'Number',
      'num_resp_4'  => 'Number',
      'num_resp_5'  => 'Number',
    );
  }
}
