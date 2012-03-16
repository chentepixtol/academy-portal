<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Pregunta filter form base class.
 *
 * @package    portal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BasePreguntaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'pregunta'    => new sfWidgetFormFilterInput(),
      'respuesta_1' => new sfWidgetFormFilterInput(),
      'respuesta_2' => new sfWidgetFormFilterInput(),
      'respuesta_3' => new sfWidgetFormFilterInput(),
      'respuesta_4' => new sfWidgetFormFilterInput(),
      'respuesta_5' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'pregunta'    => new sfValidatorPass(array('required' => false)),
      'respuesta_1' => new sfValidatorPass(array('required' => false)),
      'respuesta_2' => new sfValidatorPass(array('required' => false)),
      'respuesta_3' => new sfValidatorPass(array('required' => false)),
      'respuesta_4' => new sfValidatorPass(array('required' => false)),
      'respuesta_5' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pregunta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pregunta';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'pregunta'    => 'Text',
      'respuesta_1' => 'Text',
      'respuesta_2' => 'Text',
      'respuesta_3' => 'Text',
      'respuesta_4' => 'Text',
      'respuesta_5' => 'Text',
    );
  }
}
